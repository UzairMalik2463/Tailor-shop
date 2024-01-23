




<?php

 include 'config.php';



    $usernotfound = '';





 if(isset($_POST['logout'])){
  session_destroy();
  header("location: home.php");
  exit();
}



 if(isset($_POST['delete'])){
    $delete = $_POST['delete'];
    $sql = "DELETE FROM size WHERE `size`.`id` = '$delete'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $deletesuccess = 'DATA DELETED SUCCESSFULLY';
    }else{
        $deleteerror = 'FACING SOME ISSUES';
   
 }

 }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    
</head>
<body class="body">

         
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
                            <a class="nav-link active fs-5" aria-current="page" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link " href="Size.php">Size</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link " href="AdminPantCoat.php">Pant Coat</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link " href="AdminkurtaDesign.php">Kurta Design</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link" href="AdminEmbroidery.php">Embroidery</a>
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










    <div class="rounded container border">





    <form action="admin.php" method="post" class="d-flex" role="search">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
      </form>


      <div class="alert-danger bg-danger text-white text-center">
        <?php echo $usernotfound;  ?>
      </div>






      <?php



if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM `size` WHERE `name` LIKE '%$search%' OR `number` LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){
        $usernotfound = 'This user doesnt exist';
    }else{

    
    ?>
    <table id="supertailors" class="table mx-1 my-4">
        <thead>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="col">Name</th>
                <td><?php echo $row['name'] ?></td>
            </tr>
            <tr>
                <th scope="col">Number</th>
                <td><?php echo $row['number'] ?></td>
            </tr>
            <tr>
                <th scope="col">Length</th>
                <td><?php echo $row['length'] ?></td>
            </tr>
            <tr>
                <th scope="col">Arm</th>
                <td><?php echo $row['arm'] ?></td>
            </tr>
            <tr>
                <th scope="col">Teera</th>
                <td><?php echo $row['teera'] ?></td>
            </tr>
            <tr>
                <th scope="col">Neck</th>
                <td><?php echo $row['neck'] ?></td>
            </tr>
            <tr>
                <th scope="col">Chest</th>
                <td><?php echo $row['chest'] ?></td>
            </tr>
            <tr>
                <th scope="col">Back</th>
                <td><?php echo $row['back'] ?></td>
            </tr>
            <tr>
                <th scope="col">Ghaira</th>
                <td><?php echo $row['ghaira'] ?></td>
            </tr>
            <tr>
                <th scope="col">Kandha</th>
                <td><?php echo $row['kandha'] ?></td>
            </tr>
            <tr>
                <th scope="col">Front Pocket</th>
                <td><?php echo $row['frontPocket'] ?></td>
            </tr>
            <tr>
                <th scope="col">Side Pocket</th>
                <td><?php echo $row['sidePocket'] ?></td>
            </tr>
            <tr>
                <th scope="col">COLLAR or Ban</th>
                <td><?php echo $row['collarOrBan'] ?></td>
            </tr>
            <tr>
                <th scope="col">Ghaira Choras</th>
                <td><?php echo $row['ghairaChoras'] ?></td>
            </tr>
            <tr>
                <th scope="col">Cuff or Gol Bazu</th>
                <td><?php echo $row['cuffOrGolBazu'] ?></td>
            </tr>
            <tr>
                <th scope="col">Trouser or Shalwar</th>
                <td><?php echo isset($row['trouserOrShalwar']) ? $row['trouserOrShalwar'] : ''; ?></td>
            </tr>
            <tr>
                <th scope="col">Shalwar Length</th>
                <td><?php echo $row['shalwarLength'] ?></td>
            </tr>
            <tr>
                <th scope="col">Poncha</th>
                <td><?php echo $row['poncha'] ?></td>
            </tr>
            <tr>
                <th scope="row">Zip</th>
                <td><?php echo $row['zip'] ?></td>
            </tr>
        </thead>
        <tbody>
    
            
                <tr>
                  
                    <td>
                    <form action="admin.php" method='post' class="my-2 mx-2">
                      <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            <?php
            }
            }
            ?>
    </table>
<?php
}
?>
                   








  <div class="container my-5 text-center d-flex flex-row justify-content-center">
    <div class="mx-3">
    <a class="nav-link " href="LoginToUpdate.php">
        <button class="btn btn-success animate__slideInUp animate__animated">Update Account</button>
    </a>
    </div>

    <div class="mx-3">
    <a class="nav-link " href="AddAccount.php">
        <button class="btn btn-success animate__slideInUp animate__animated">Add Account</button>
    </a>
    </div>
  </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>
</html>



