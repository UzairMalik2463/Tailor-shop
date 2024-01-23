

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
    
    








  <div class="container text-center mt-5">
        <div class="row">


           
        <?php
        include 'config.php';





        if(isset($_POST['delete'])){
            $delete = $_POST['delete'];
            $sql = "DELETE FROM embroidery WHERE `embroidery`.`id` = '$delete'";
            $result = mysqli_query($conn,$sql);
            if($result){
                $deletesuccess = 'DATA DELETED SUCCESSFULLY';
                
            }else{
                $deleteerror = 'FACING SOME ISSUES';
           
         }
        
         }


         $sql= "SELECT * FROM `embroidery`";
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){

     ?>


         <div class="col-lg-6 mb-3 animate__slideInUp animate__animated">
             <div class="card shadow" style="max-width: 540px;">
                 <div class="row g-0">
                     <div class="col-md-6">
                         <img src="images/<?php echo $row['image']?>" class="img-fluid rounded-start"
                             alt="...">
                     </div>
                     <div class="col-md-6">
                         <div class="card-body ">
                             <h1 class="card-title mt-5"><?php echo $row['description']?></h1>
                             <form action="EmbroideryRead.php" method='post' class="my-2 mx-2">
                      <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <?php }?>

         
         </div>
         </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>