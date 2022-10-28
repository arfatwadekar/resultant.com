<?php
require('Connection.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>login Page!</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header text-center p-3 fw-bold">Admin Login</h5>
                    <div class="card-body">

                        <form method="Post">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Name</label>
                                <input type="text" id="form2Example1" class="form-control" name="AdminName" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Password</label>
                                <input type="password" id="form2Example2" class="form-control" name="AdminPassword" />
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mb-4 text-center" name="Signin">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_Post['Signin'])) {
        $query = "SELECT * FROM `admin` WHERE  `Admin_Name` = '$_Post[AdminName]' And `Admin_Password` = '$_POST[AdminPassword]' ";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['AdminLoginId'] = $_Post['AdminName'];
            header('location: AdminPannel.php ');
        } else {
            echo "<script>alert('incorrect password');</script>";
        }
    }

    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>