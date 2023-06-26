<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <?php include "config.php" ?>

    <?php 
    $c=0;
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $row = $result->fetch_assoc();
        if ($row!=null){
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            header("Refresh: 0; url=../admin/index.php");
        }
        else {
            $c=-1;
        }
    }

?>

    <div class="container py-5">
        <div class="card border-primary w-25 mx-auto">
            <div class="card-body">
                <h4 class="card-title text-center">Login Form</h4>
                <p class="card-text">
                    <?php 
                    if ($c==-1){
                ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Invalid Email or Password!
                </div>
                <?php } ?>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                            placeholder="abc@mail.com">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-45" name="login">Login</button>
                        <a name="" id="" class="btn btn-primary w-45" href="#" role="button">Register</a>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>