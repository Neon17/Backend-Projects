<?php include "../inc/header.php" ?>
<?php include "../inc/adminNavbar.php" ?>

<?php include "../process/config.php" ?>



<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created on</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result);
                    echo "<script>console.log($count);</script>";
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr class="">
                    <td scope="row"><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    </td>
                    <td><?php echo $data['phone']; ?></td>
                    </td>
                    <td><?php echo $data['email']; ?></td>
                    </td>
                    <td><?php echo $data['address']; ?></td>
                    </td>
                    <td><?php echo $data['created on']; ?></td>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

</div>


<script>
let a = document.getElementsByClassName("nav-link");
a[2].className += " active";
for (let i = 0; i < 3; i++) {
    if (i == 2) {
        continue;
    }
    a[i].className = "nav-link";
}
</script>

<?php include "../inc/footer.php"; ?>