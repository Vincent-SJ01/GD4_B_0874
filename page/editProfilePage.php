<?php
include '../component/sidebar.php';
$user = $_SESSION['user'];

?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        <div class="body d-flex ju justify-content-between">
            <h4>Edit Profile</h4>
        </div>

        <hr>
        <form class="row g-3" action='../process/editProcess.php' method="post" >

            <div class="col-12">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Saja" value=<?php echo $user['name']?> name="name" required>
            </div>

            <div class="col-12">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="0812xxxxxxxx" value=<?php echo $user['phonenum']?> name="phonenum" pattern="^(08)([0-9]{8,10})$" required>
                <small id="emailHelp" class="form-text text-muted">example: 08124734xxxx</small>

            </div>

            <div class="col-12">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="example@google.com" value=<?php echo $user['email']?> name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
                <small id="emailHelp" class="form-text text-muted">example: example@gmail.com</small>
            </div>

            <div class="col-12">
                <label for="exampleInputEmail1" class="formlabel">Job</label>
                <select class="form-select" aria-label="Default select example" name="job" required>


                    <option value="Student"
                        <?php
                            if($user['job'] == "Student"){
                                echo "selected";
                            }
                         ?>

                    >Student</option>
                    <option value="Lecturer"
                        <?php
                            if($user['job'] == "Lecturer"){
                                echo "selected";
                            }
                         ?>
                    >Lecturer</option>
                    <option value="None"
                        <?php
                            if($user['job'] == "None"){
                                echo "selected";
                            }
                         ?>
                    >None</option>
                </select>

            </div>

            <div class="col-12">
                <label for="exampleInputEmail1" class="formlabel">Membership</label>
                <input type="text" class="form-control" placeholder="Saja" value=<?php echo $user['membership']?> name="membership" disabled>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="userEdit" >Submit form</button>
            </div>
        </form>

    </div>

</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>