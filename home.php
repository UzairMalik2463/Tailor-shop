<?php

include'config.php';


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Super Tailors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="body"> 





    
  <nav class="navbar navbar-expand-lg navbar-dark bg-tarnsparent  fixed-top" id="navbar">
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
              <a class="nav-link active fs-5" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item mx-2 fs-5">
              <a class="nav-link" href="PantCoat.php">Pant Coat</a>
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






 


    



    
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/sherwani.webp" class="d-block heroimg w-100" alt="...">
        <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
          <h1 class=" animate__animated animate__slideInUp animate__slower">The Stitching Experts</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block heroimg w-100" src="images/pexels-cottonbro-studio-4621904.jpg" alt="...">
        <div class="carousel-caption position-absolute top-50 start-50 translate-middle">
          <h1 class=" animate__animated animate__slideInUp animate__slower">Best In Town</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/pexels-andrea-piacquadio-3755706.jpg" class="d-block heroimg w-100" alt="...">
        <div class="carousel-caption position-absolute top-50 start-50 translate-middle ">
          <h1 class=" animate__animated animate__slideInUp animate__slower">Elegence</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




  <div class="container section-bg my-3 shadow rounded">
    <div class="d-flex flex-column flex-md-row text-light">
      <div>
        <img data-aos="fade-up" data-aos-duration="1500" class="second-sec-img my-2 shadow rounded" src="images/pexels-emre-keshavarz-3734847.jpg" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="1500" class="mx-lg-5 mx-3  d-flex justify-content-center align-items-center flex-column ">
        <h1 class="mt-2">Unleash Your Style with Tailored Elegance</h1>
        <p class="lead">
          We believe that clothing is an expression of one's personality and individuality. Step into a world where
          craftsmanship meets style, and every stitch tells a story. Whether you're looking for the perfect suit, a
          bespoke dress, or alterations that make your clothes fit like a dream, we're here to transform your wardrobe
          into a masterpiece.
        </p>
      </div>
    </div>
  </div>














  <div class="container-fluid transparent-div d-flex justify-content-center align-items-center">
    <h1 data-aos="fade-up" data-aos-duration="1500" class="display-1 text-light">50 years of Experience</h1>
  </div>














    <div class="container-fluid my-2">
        <div class="container d-flex flex-md-row flex-lg-row flex-column justify-content-around align-items-center">
            <div data-aos="fade-up" data-aos-duration="1500" class="contact col-12 my-2 shadow text-light text-center p-2 rounded col-md-5">
                <h1>Contact us</h1>
                <p class="lead">
                    Have questions or ready to schedule a consultation? let's start creating the wardrobe of your
                    dreams.

                    Discover the elegance of personalized tailoring at Super Tailors. Your journey to refined style
                    begins here.
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="1500" class="contact col-12 my-2 shadow text-light text-center p-2 rounded col-md-5">
                <h1>Visit us</h1>
                <p class="lead">
                  Drop by our store to experience the art of tailoring firsthand. Our friendly team is ready to guide you through our services and help you discover the perfect additions to your wardrobe.
                </p>
            </div>
        </div>
    </div>





    <iframe class="shadow-lg my-3" data-aos="fade-up" data-aos-duration="1500" width="100%" height="200" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27249.135269196035!2d73.02924291083981!3d31.382650399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39225d9964844cd3%3A0xd9dc468ac12b5ed4!2sSuper%20Tailors%20And%20Garments!5e0!3m2!1sen!2s!4v1705469749202!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>








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





    <script src="home.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>