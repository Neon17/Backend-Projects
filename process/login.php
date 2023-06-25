<?php include "../inc/header.php";?>
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

<?php include "../inc/footer.php";?>