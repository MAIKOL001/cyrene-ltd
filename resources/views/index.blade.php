<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cyrene security ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-removebg-preview.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    


    <!-- Navbar Start -->
   @include('layouts.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/two guards (1).jpg" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Best CCTV & Security Solution For You</h1>
                                <p class="fs-5 text-white mb-4 pb-2">"Discover peace of mind with Cyrene Security – your ultimate choice for the best CCTV & security solutions. We redefine protection, ensuring your safety with innovative, customized services."</p>
                                <a href=""  style="background-color:#b61b1b; color:white;" class="btn  rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" style="background-color:#18275d; color:white;"  class="btn rounded-pill py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/ala.jpg" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Smart Security Solution For All Business</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Elevate your business security with Cyrene – your go-to for smart security solutions. Tailored for all business needs, our cutting-edge approach ensures comprehensive protection.</p>
                                <a href=""  style="background-color:#b61b1b; color:white;" class="btn  rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" style="background-color:#18275d; color:white;" class="btn rounded-pill py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/walkie talkie guy (1).jpg" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Innovative Solution For Security System</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Empower your security with Cyrene – where innovation meets protection. Our cutting-edge solutions redefine security systems, ensuring advanced and effective protection for your peace of mind</p>
                                <a href=""  style="background-color:#b61b1b; color:white;" class="btn rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" style="background-color:#18275d; color:white;" class="btn rounded-pill py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
   @include('layouts.facts
   ')
    <!-- Facts Start -->


    <!-- About Start -->
   @include('layouts.abouts')
    <!-- About End -->


    <!-- Service Start -->
    @include('layouts.services')
    <!-- Service End -->


    <!-- Feature Start -->
    @include('layouts.features
    ')
    <!-- Feature End -->


    <!-- Gallery Start -->
    @include('layouts.gallery')
    <!-- Gallery End -->


    


    <!-- others Start -->
   @include('layouts.otherservices')
    <!-- others End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class=" mb-3 mx-auto" style="width: 60px; height: 2px; background-color:#b61b1b;"></div>
                <h1 style="color:#18275d;" class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">"Impressed with Cyrene's CCTV installation! Quick and professional service. My security concerns are now in safe hands."</p>
                    <h4>Evelyn Mwende</h4>
                    
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">"Exceptional Event Security by Cyrene! Their team ensured a smooth and secure event. Highly recommend for any occasion."</p>
                    <h4>Mary Gathoni</h4>
                    
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">"Cyrene's Guard Services surpassed expectations. Vigilant and reliable, they provide a strong sense of security. Top-notch service!"</p>
                    <h4>Dennis Nyaboke</h4>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
   @include('layouts.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    @include('layouts.copyright')
    <!-- Copyright End -->


    <!-- Back to Top -->
    @include('layouts.toparrow')


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>