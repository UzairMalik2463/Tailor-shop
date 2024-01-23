<?php


include'config.php';



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pant Coat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="body">







    <nav class="navbar navbar-expand-lg navbar-dark pant-coat-navbar  fixed-top" id="navbar">
        <div class="container">

            <a href="login.php" class="logo text-decoration-none"><h1>Super <span class="span-logo">Tailors</span></h1>
            </a>
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
                            <a class="nav-link  fs-5" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link active" href="PantCoat.php">Pant Coat</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link" href="kurtaDesign.php">Kurta Design</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link" href="embroidery.php">Embroidery</a>
                        </li>
                        <li class="nav-item mx-2 fs-5">
                            <a class="nav-link" href="#contact">Contact</a>
                          </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>





    <div class="container animate__slideInUp animate__animated  text-center mb-4  text-xxl-end pant-coat-head-div">
        <h1 class=" pant-coat-head">Elevate Your Wardrobe with Pant Coats</h1>
    </div>









    <div class="container text-center mt-5">
        <div class="row">

        <?php


            $sql= "SELECT * FROM `pantcoat`";
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }?>



        </div>
    </div>





    <iframe class="shadow-lg my-5" data-aos="fade-up" data-aos-duration="1500" width="100%" height="200" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27249.135269196035!2d73.02924291083981!3d31.382650399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39225d9964844cd3%3A0xd9dc468ac12b5ed4!2sSuper%20Tailors%20And%20Garments!5e0!3m2!1sen!2s!4v1705469749202!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>






    <div id="contact" class="d-flex section-bg mt-3 text-light flex-column text-center flex-md-row justify-content-around align-items-center">
        <div class="py-3">
            <img class="d-inline-block" src="images/phone-call.png" alt="">
          <p class="d-inline-block">+92 21-6617276</p>
          <div></div>
          <img class="d-inline-block" src="images/phone-call.png" alt="">
          <p class="d-inline-block">+92 21-6617277</p>
        </div>
        <div class="py-3">
            <img class="d-inline-block" src="images/location.png" alt="">
          <p class="d-inline-block">Street no 6 Nisar colony Samanabad,Faisalabad</p>
        </div>
      </div>








    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>