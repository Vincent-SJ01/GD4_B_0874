<!Doctype html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"

            crossorigin="anonymous">

            <link href="../style.css" rel="stylesheet">

            <title>Register Page</title>
        </head>

        <body>
            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container">
                    <!-- Nama : nama panggilan kalian -->
                    <a class="navbar-brand fw-bold" href="/GD4_B_0874">PHP - Vincent</a>
                </div>
            </nav>

            <div class="bg bg-light text-dark">
                <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                    <div class="card text-white bg-dark ma-5 shadow " style="min-width:25rem;">
                        <div class="card-header fw-bold">Register</div>
                        <div class="card-body">

                            <form action="../process/registerProcess.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Name</label>
                                    <input class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Phone Number</label>
                                    <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp" pattern="^(08)([0-9]{8,10})$" required>
                                    <small id="emailHelp" class="form-text text-muted">example: 08124734xxxx</small>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Job</label>
                                    <select class="form-select" aria-label="Default select example" name="job" id="job" required>

                                        <option value="Student">Student</option>
                                        <option value="Lecturer">Lecturer</option>
                                        <option value="None">None</option>
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Membership</label>
                                    <select class="form-select" aria-label="Default select example" name="membership" id="membership" required>

                                        <option value="Reguler">Reguler</option>
                                        <option value="Platinum">Platinum</option>
                                        <option value="Gold">Gold</option>
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Email</label>
                                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
                                    <small id="emailHelp" class="form-text text-muted">example: example@gmail.com</small>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="formlabel">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                </div>

                            </form>

                            <p class="mt-2 mb-0">Have an account? <a href="./loginPage.php" class="text-primary">Login here!</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Option 1: Bootstrap Bundle with Popper -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"

            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>
