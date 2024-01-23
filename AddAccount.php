

<?php

 include 'config.php';





 $name = '';
 $password = '';

 $namealert = '';
 $passwordalert = '';
 
 $useralert = '';
 $signupalert = '';



if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = $_POST['name'];
  $password = $_POST['password'];

  if(empty($name)){
    $namealert = 'ENTER NAME';
  }elseif(empty($password)){
    $passwordalert = 'ENTER PASSWORD';
  }else{
    $check = "SELECT * FROM `login` WHERE name = '$name'";
    $checkresult = mysqli_query($conn,$check);
    if(mysqli_num_rows($checkresult) > 0){
      $useralert = 'THIS USER ALREADY EXISTS';
    }else{
      $sql = "INSERT INTO `login` (`name`, `password`) VALUES ( '$name', '$password')";
      $result = mysqli_query($conn,$sql);
      if($result){
        $signupalert = 'SIGNUP SUCCESSFULLY';
        $name = '';
        $password = '';
        header("location: admin.php");
      }else{
        echo 'ERROR IN INSERING DATA' . mysqli_error($conn);
      }
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
  </head>
  <body>




  
  <form action="AddAccount.php"  method="post">

<div class="container mt-5 ">

<h1 class="text-shadow text-center text-success">Add more Accounts</h1>



<div class="alert-success bg-success text-white text-center">
    <?php echo $signupalert;  ?>
  </div>
  <div class="alert-danger bg-danger text-white text-center">
    <?php echo $useralert;  ?>
  </div>
<div class="mb-3">
<label for="username" class="form-label">Name </label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="name" 
value='<?php echo $name ?>'>
<div class='alert-danger bg-danger text-white text-center'>
<?php  echo $namealert;   ?>
</div>
</div>
<!-- </div> -->

<div class="mb-3">
<label for="inputPassword" class="form-label">Password</label>
<input type="password" name="password" class="form-control" id="inputPassword" 
value='<?php echo $password ?>'>
<div class='alert-danger bg-danger text-white text-center'>
<?php  echo $passwordalert;   ?>
</div>
</div>

<button width="100%" type="submit" class="btn btn-primary">Submit</button>

</div>



</form>

    



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>