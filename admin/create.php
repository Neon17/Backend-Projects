<?php include "../inc/header.php"; ?>
<?php include "../inc/adminNavbar.php"; ?>

<?php include "../process/config.php";?>

<?php 
    $c = -1;
    if (isset($_POST["submit"])){

        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $address = $_POST["address"];

        if (($name=="")||($phone=="")||($email=="")||($password=="")||($address=="")){
            $c = 5;
        }
        else {
            echo "<script>console.log('Name: $name Phone: $phone  Email: $email Address: $address Password: $password');</script>";
            $query = "INSERT INTO users (name, phone, email, address, password)
            VALUES ('$name','$phone','$email','$address','$password')";
            $result = mysqli_query($conn,$query);
            if ($result){
                $c = 1;
                echo "<script>console.log('Success in posting..');</script>";
            }
        }
    }
?>


<div class="container mt-5">
    <form action="" method="post">
        <div class="row">
            <?php 
                if ($c==1){
            ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Your data is submitted!
            </div>
            <?php } ?>
            <?php 
                if ($c==5){
            ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                All fields are required!
            </div>
            <?php } ?>

            <div class="mb-3 col-lg-6">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId"
                    placeholder="abc@mail.com">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>
    </form>
</div>

<script>
    let a = document.getElementsByClassName("nav-link");
    a[1].className += " active";
    for (let i = 0; i<3; i++){
        if (i==1){continue;}
        a[i].className = "nav-link";
    }
</script>

<?php include "../inc/footer.php"; ?>