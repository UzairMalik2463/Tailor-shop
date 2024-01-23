<?php
session_start();
include 'config.php';

if(isset($_POST['logout'])){
    session_destroy();
    header("location: home.php");
    exit();
}



$username = $_SESSION['name'];

$sql = "SELECT * FROM `login` WHERE name = '$username'";
$result = mysqli_query($conn, $sql);
$oldinfo = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newname = $_POST['newname'];
    $newpassword = $_POST['newpassword'];
    $id = $oldinfo['id'];

    $sql = "UPDATE `login` SET `name` = '$newname', `password` = '$newpassword' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $updatesuccess = 'UPDATED SUCCESSFULLY';
        header ('location: admin.php');
    } else {
        $updateerror = 'THERE IS SOME ISSUE' . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udate Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>






    <div class="container mt-5">

    <h1 class="text-success text-center text-shadow display-3">Update Information</h1>
        

        <form action="UpdateAccount.php" method="post" class="shadow p-3 rounded mt-4">
            <div class="mb-3">
                <label for="newname" class="form-label">New Name:</label>
                <input type="text" class="form-control" id="newname" name="newname" value="<?php echo $oldinfo['name']; ?>">
            </div>
            
            <div class="mb-3">
                <label for="newpassword" class="form-label">New Password:</label>
                <input type="password" class="form-control" id="newpassword" name="newpassword" value="<?php echo $oldinfo['password']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Information</button>
        </form>

        <?php
        if (isset($updatesuccess)) {
            echo '<div class="alert-success bg-success text-white text-center mt-3">' . $updatesuccess . '</div>';
        }

        if (isset($updateerror)) {
            echo '<div class="alert-danger bg-danger text-white text-center mt-3">' . $updateerror . '</div>';
        }
        ?>
    </div>


    









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
