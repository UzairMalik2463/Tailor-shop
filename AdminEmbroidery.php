<?php
include("config.php");


  if(isset($_POST['logout'])){
    session_destroy();
    header("location: home.php");
    exit();
  }


   $enteralert = '';
   $success = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];

    $image = $_FILES['image']['name']; 
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder =  "images/" . $image;
    move_uploaded_file($tmp_name, $folder);

    if (empty($image) || empty($description)) {
        $enteralert = 'Enter description or image';
    } else {
        
        $sql = "INSERT INTO `embroidery` (`description`, `image`) VALUES ('$description', '$image')";
        
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $success = 'Card uploaded successfully';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    // header("location: show-pantcoat.php");
}





 





?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Embroidery</title>
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
                            <a class="nav-link " href="Size.php">Size</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link  " href="AdminPantCoat.php">Pant Coat</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link " href="AdminkurtaDesign.php">Kurta Design</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link active" href="AdminEmbroidery.php">Embroidery</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                        <form  action="admin.php" method="post">
                             <button class=" btn btn-lg bg-danger text-white" type="submit" name="logout">LOG OUT</button>
                        </form>
                          </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="empty"></div>

    <div class="container mt-5 animate__slideInUp animate__animated  text-center mb-4  text-xxl-end pant-coat-head-div">
        <h1 class="text-success text-shadow">Add Design</h1>
    </div>




    





    <form action="adminEmbroidery.php" method="post" enctype="multipart/form-data">

    <div class="alert-danger bg-danger text-white text-center">
        <?php echo $enteralert;  ?>
      </div>
      <div class="alert-success bg-success text-white text-center">
        <?php echo $success;  ?>
      </div>




    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-12 mb-3 animate__slideInUp animate__animated">
                <div class="card" >
                    <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-6 text-center">
                            <input type="file" name="image" class="img-fluid rounded-start mt-5">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body ">
                            <div class="mb-3">
                              <label for="description" class="form-label fw-bold">Card Title</label>
                              <input name="description" type="text" class="form-control" id="description" aria-describedby="description">

                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="animate__slideInUp animate__animated btn btn-primary">Submit</button>

            <!-- card-title mt-5 -->
        </div>
    </div>
    </form>






    
    <div class="container text-center mt-5">
        <div class="row">







        <div class="container my-5 text-center d-flex flex-row justify-content-center">

    <div class="mx-3">
    <a class="nav-link " href="EmbroideryRead.php">
        <button class="btn btn-danger animate__slideInUp animate__animated">Delete Any Card</button>
    </a>
    </div>
  </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>