<?php
include '../component/sidebar.php'?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        <div class="body d-flex ju justify-content-between">
            <h4>LIST SERIES</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#addSeries"
                onClick="setTambah()">
              Tambah Series
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addSeries" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modelTitle">Tambah Series</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form action="../process/addEditSeriesProcess.php" method="post">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Name</label>
                              <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Genre</label>
                              <input class="form-control" id="genreView" name="genreView" aria-describedby="emailHelp">
                              <select class="form-select" multiple aria-label="multiple Disabled select example" name="genre[]" id="inputGenre">
                                  <option value="Comedy">Comedy</option>
                                  <option value="Action">Action</option>
                                  <option value="Horror">Horror</option>
                              </select>
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Release</label>
                              <input class="form-control" id="realease" name="realease" aria-describedby="emailHelp">

                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Episode</label>
                              <input class="form-control" id="episode" name="episode" aria-describedby="emailHelp">

                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Season</label>
                              <input class="form-control" id="season" name="season" aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Synopsis</label>
                              <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp">
                          </div>

                          <div class="d-grid gap-2">
                              <input type="hidden" id="action" name="action" value="" />
                              <input type="hidden" id="idUser" name="idUser" value="" />

                              <button type="submit" class="btn btn-primary" name="addSeries" id="btnModal">Tambah Series</button>
                          </div>

                      </form>
                  </div>

                </div>
              </div>
            </div>
        </div>

        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Release</th>
                    <th scope="col">Episode</th>
                    <th scope="col">Season</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>

            <tbody>
                <?php $query = mysqli_query($con, "SELECT * FROM series") or die(mysqli_error($con));

                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
                            echo'
                            <tr>
                                <th scope="row">'.$no.'</th>
                                <td>'.$data['name'].'</td>
                                <td>'.$data['genre'].'</td>
                                <td>'.$data['realease'].'</td>
                                <td>'.$data['episode'].'</td>
                                <td>'.$data['season'].'</td>
                                <td>

                                <button type="button" class="btn btn-primary btn-sm" onCLick=\'setEdit('.(json_encode($data)).')\'>
                                  <i class="fa fa-edit fa-1x"></i>
                                </button>

                                <a href="../process/deleteSeriesProcess.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onClick="return confirm ( \'Are you sure want to delete this data?\')">
                                    <i class="fa fa-trash fa-1x"></i>
                                </a>


                                </td>
                            </tr>';

                            $no++;
                        }
                    }
                ?>

            </tbody>
        </table>

    </div>




</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script>

    function setTambah(){
        //set mode;
        let action = document.getElementById("action");

        document.getElementById("modelTitle").value = "Tambah Series";
        document.getElementById("btnModal").value = "Tambah Series";

        action.value = "tambah";

        reset();
    }

    function setEdit(objek){
        //set mode;
        let action = document.getElementById("action");
        let idUser = document.getElementById("idUser");
        let inputGenre = document.getElementById("inputGenre");
        console.log(inputGenre);

        action.value = "edit";
        idUser.value = objek.id;

        document.getElementById("modelTitle").innerHTML = "Edit Series";
        document.getElementById("btnModal").innerHTML = "Edit Series";

        // document.getElementById("name").value = objek.name;
        // document.getElementById("genreView").value = objek.genre;
        // document.getElementById("realease").value = objek.realease;
        // document.getElementById("episode").value = objek.episode;
        // document.getElementById("season").value = objek.season;
        // document.getElementById("synopsis").value = objek.synopsis;

        reset(objek);

        let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById("addSeries"));

        modal.show();
    }

    function reset(objek=false){
        document.getElementById("name").value = objek.name || "";
        document.getElementById("genreView").value = objek.genre || "";
        document.getElementById("realease").value = objek.realease || "";
        document.getElementById("episode").value = objek.episode || "";
        document.getElementById("season").value = objek.season || "";
        document.getElementById("synopsis").value = objek.synopsis || "";
    }



</script>



</body>

</html>