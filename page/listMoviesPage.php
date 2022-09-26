<?php
include '../component/sidebar.php'?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        <div class="body d-flex ju justify-content-between">
            <h4>LIST MOVIE</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#addMovie">
              Tambah Movie
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addMovie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Movie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form action="../process/addMovieProcess.php" method="post" novalidate>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Name</label>
                              <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Genre</label>
                              <input class="form-control" id="genre" name="genre" aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="formlabel">Realese</label>
                              <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">

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
                              <button type="submit" class="btn btn-primary" name="addMovie">Register</button>
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
                    <th scope="col">Realese</th>
                    <th scope="col">Season</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>

            <tbody>
                <?php $query = mysqli_query($con, "SELECT * FROM movies") or die(mysqli_error($con));

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
                                <td>'.$data['realese'].'</td>
                                <td>'.$data['season'].'</td>
                                <td> <a href="../process/deleteMovieProcess.php?id='.$data['id'].'"onClick="return confirm ( \'Are you sure want to delete this data?\')"> <i style="color: red" class="fa fa-trash fa-2x"></i>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>