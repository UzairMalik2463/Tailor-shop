<?php
include("config.php");


  if(isset($_POST['logout'])){
    session_destroy();
    header("location: home.php");
    exit();
  }


   
  $name = $number = $length = $arm = $teera = $neck = $chest = $back = $ghaira = $kandha = $frontPocket = $sidePocket = $collarOrBan = $ghairaChoras = $cuffOrGolBazu = $trouserOrShalwar = $shalwarLength = $poncha = $zip = "";
  $success  = $enteralert = "";
  
  // Check if the form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $name = $_POST["name"];
      $number = $_POST["number"];
      $length = $_POST["Length"];
      $arm = $_POST["Arm"];
      $teera = $_POST["Teera"];
      $neck = $_POST["Neck"];
      $chest = $_POST["Chest"];
      $back = $_POST["Back"];
      $ghaira = $_POST["Ghaira"];
      $kandha = $_POST["Kandha"];
      $frontPocket = $_POST["frontpocket"];
      $sidePocket = $_POST["sidepocket"];
      $collarOrBan = $_POST["collarorban"];
      $ghairaChoras = $_POST["ghairachoras"];
      $cuffOrGolBazu = $_POST["cufforgolbazu"];
      $trouserOrShalwar = $_POST["trouserorshalwar"];
      $shalwarLength = $_POST["shalwarlength"];
      $poncha = $_POST["Poncha"];
      $zip = $_POST["Zip"];
  
      if (empty($name) || empty($number) || empty($length) || empty($arm) || empty($teera) || empty($neck) || empty($chest) || empty($back) || empty($ghaira) || empty($kandha) || empty($frontPocket) || empty($sidePocket) || empty($collarOrBan) || empty($ghairaChoras) || empty($cuffOrGolBazu) || empty($trouserOrShalwar) || empty($shalwarLength) || empty($poncha) || empty($zip)) {
        $enteralert = 'Enter values for all fields';
    } else {
        $sql = "INSERT INTO `size` (`name`, `number`, `length`, `arm`, `teera`, `neck`, `chest`, `back`, `ghaira`, `kandha`, `frontPocket`, `sidePocket`, `collarOrBan`, `ghairaChoras`, `cuffOrGolBazu`, `trouserOrShalwar`, `shalwarLength`, `poncha`, `zip`) VALUES ( '$name', '$number', '$length', '$arm', '$teera', '$neck', '$chest', '$back', '$ghaira', '$kandha', '$frontPocket', '$sidePocket', '$collarOrBan', '$ghairaChoras', '$cuffOrGolBazu', '$trouserOrShalwar', '$shalwarLength', '$poncha', '$zip')";
        $result = mysqli_query($conn, $sql);
    if ($result) {
        $success = 'Size inserted successfully';
    } else {
        $enteralert = 'Error: '. mysqli_error($conn);
    }
    }
    

  }







?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Size</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    


  <nav class="navbar navbar-expand-lg navbar-dark pant-coat-navbar  fixed-top" id="navbar">
        <div class="container">

            <h1 class="admin-logo text-white">Admin <span class="span-logo">Panel</span></h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas sidebar offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header border-bottom text-white">
                    <h5 class="offcanvas-title " id="offcanvasNavbarLabel">Main menu</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link  fs-5" aria-current="page" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link active" href="Size.php">Size</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link  " href="AdminPantCoat.php">Pant Coat</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link " href="AdminkurtaDesign.php">Kurta Design</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link" href="AdminEmbroidery.php">Embroidery</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                        <form  action="Size.php" method="post">
                             <button class=" btn btn-lg bg-danger text-white" type="submit" name="logout">LOG OUT</button>
                        </form>
                          </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="empty"></div>



  




                
       <form action="Size.php"  method="post" class="my-3">

             <div class="container mt-5 ">

             <h1 class="text-shadow text-center text-success">Add Customer Size</h1>



             <div class="alert-success bg-success text-white text-center">
                 <?php echo $success;  ?>
               </div>
               <div class="alert-danger bg-danger text-white text-center">
                 <?php echo $enteralert;  ?>
               </div>
             <div class="mb-3">
             <label for="username" class="form-label">Name </label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="name" 
             value='<?php echo $name ?>'>
             </div>
<!-- </div> -->

             <div class="mb-3">
             <label for="number" class="form-label">Number</label>
             <input type="text" name="number" class="form-control" id="inputPassword" >
             
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Length </label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Length">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Arm</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Arm">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Teera</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Teera">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Neck</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Neck">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Chest</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Chest">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Back</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Back">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Ghaira</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Ghaira">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Kandha</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Kandha">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Front Pocket</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="frontpocket">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Side Pocket</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="sidepocket">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Collar or Ban </label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="collarorban">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Ghaira Choras</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="ghairachoras">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Cuff or Gol Bazu</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="cufforgolbazu">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Trouser or Shalwar</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="trouserorshalwar">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Trouser or Shalwar / Length</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="shalwarlength">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Poncha</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Poncha">
             </div>

             <div class="mb-3">
             <label for="username" class="form-label">Zip</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="Zip">
             </div>



             <button width="100%" type="submit" class="btn btn-primary">Submit</button>

             </div>



             </form>



    







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>