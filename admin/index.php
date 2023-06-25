<!-- index.php is collection of users in table -->
<!-- but I made it home page -->

<?php include "../inc/header.php" ?>
<?php include "../inc/adminNavbar.php" ?>

<div class="container pt-3">
   <div class="card-group">
    <div class="card m-2">
        <img class="card-img-top" src="../assets/img/sky.jpg" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Task Management System</h4>
            <p class="card-text">Give Assignments</p>
        </div>
    </div>
    <div class="card m-2">
        <img class="card-img-top" src="../assets/img/sky.jpg" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Task Management System</h4>
            <p class="card-text">Take Tests</p>
        </div>
    </div>
   </div>
   
</div>

<script>
    let a = document.getElementsByClassName("nav-link");
    a[0].className += " active";
    for (let i = 0; i<3; i++){
        if (i==0){continue;}
        a[i].className = "nav-link";
    }
</script>

<?php include "../inc/footer.php"?>