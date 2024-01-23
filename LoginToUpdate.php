<?php

  include'config.php';

  $invalid = '';
 $name = '';
 $password = '';
 $namealert = '';
 $passwordalert = '';




  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if(empty($name)){
        $namealert = 'ENTER USERNAME';
    }elseif(empty($password)){
        $passwordalert = 'ENTER PASSWORD';
    }else{
        $sql = "SELECT * FROM `login` WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            $_SESSION['password'] = $row['password'];
            header ("location: UpdateAccount.php"); 
            exit();
        }else{
            $invalid = "Invalid username or password";
        }
    }
  }





?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>

  <div class="container mt-5 text-center text-success">
    <h1 class="admin-logo text-shadow">Login to Update Information</h1>
  </div>



  <div class="container mt-5">
  <form method="post" action="LoginToUpdate.php">

  <div class="alert-danger bg-danger text-white text-center">
        <?php echo $invalid;  ?>
      </div>


      <div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" 
  value = "<?php echo $name; ?>">
  <div class='alert-danger bg-danger text-white text-center'>
    <?php  echo $namealert;   ?>
  </div>
</div>

<div class="mb-3">
  <label for="inputPassword" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="inputPassword"
  value = "<?php echo $password; ?>">
  <div class='alert-danger bg-danger text-white text-center'>
    <?php  echo $passwordalert;   ?>
  </div>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>