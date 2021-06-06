<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Speed Techserve | Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/ico/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style 1.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<style>

button {
    transition: all .5s ease-in-out
}


.text2 {
    text-align: center;
    color: #FFF;
    font-size: 18px;
    border: none;
    font-family: arial;
    padding: 5px 20px;
    margin: 22px auto;
    display: block;
    background-color: #1abc9c;
    cursor: pointer;
    position: relative;
    z-index: 20;
    transition: all. .5s ease-in-out;
    z-index: 2;
    overflow: hidden;
    border-radius: 30px/30px
}

.text2:after {
    content: "";
    width: 300px;
    height: 200px;
    transition: all .5s ease-in-out;
    background-color: #e74c3c;
    position: absolute;
    display: inline-block;
    margin-left: -130px;
    z-index: -2;
    margin-top: 70px
}

.text2:before {
    content: "";
    width: 220px;
    height: 600px;
    transition: all .5s ease-in-out;
    background-color: #c0392b;
    position: absolute;
    display: inline-block;
    margin-left: -160px;
    z-index: -2;
    margin-top: -700px
}

.text2:hover:after {
    margin-top: -20px;
    transform: skew(10deg)
}

.text2:hover:before {
    margin-top: -40px;
    transform: skew(20deg);
    margin-left: 10px
}


</style>

<body>
    <?php include('navbar.php') ?>

    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background: url(assets/img/blog/blog-3.jpg); background-size: cover; width: 100%; height: 100vh !important; background-repeat: no-repeat;">
                            <div class="carousel-container">
                                <div class="carousel-content breadcrumbs" id="breadcrumbs">
                                    <h2 class="animate__animated animate__fadeInDown text-center">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Welcome to <span style="color: aquamarine;">Traning and Placement</span>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </h2>
                                    <ol class="animate__animated animate__fadeInDown">
                                        <li><a href="index.php" style="font-size: 25px;font-weight: 500;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                                        <li style="font-size: 25px;font-weight: 500;">Job4Skill</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Hero -->
        
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters">
                    <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="assets/img/skill-development.jpg" alt="" class="image">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center p-2">
                            <h3 data-aos="fade-up" style="color: #f03c02;">Skill Development</h3>
                            <p data-aos="fade-up" style="text-align: justify;">
                                We always ensure that the right student chooses the right course according to his/her academic background, aptitude and skill-set. Doing this will help our students get the career edge and the extra push that is so highly needed in a competitive job market, eventually leading to professional success.
                            </p>
                        </div>
                    </div>
                </div>
        </section><!-- End About Us Section -->
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center p-2">
                            <h3 data-aos="fade-up" style="color: #f03c02;">Training</h3>
                            <p data-aos="fade-up" style="text-align: justify;">
                                We offer quality training content for licensing, along with valuable services to enable training providers to deliver a vast portfolio of courses in a cost-effective, convenient and efficient manner.
                            </p>
                        </div>
                    </div>
                    <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="assets/img/training1.jpg" alt="" class="image">
                    </div>
                </div>
        </section><!-- End About Us Section -->
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters">
                    <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="assets/img/placement1.jpg" alt="" class="image">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center p-2">
                            <h3 data-aos="fade-up" style="color: #f03c02;">Placement</h3>
                            <p data-aos="fade-up" style="text-align: justify;">
                                Placement Section provides a launch pad for students to make it to the best organizations in the fields of software, core industries, management, etc. The Giants in the corporate world visit the campus on a regular basis, with enviable recruitment offers. Our students have lived up to the expectations of organizations that visit the campus, looking for bright candidates to take up important and challenging responsibilities at their workplace.
                                <a  href="http://www.job4skill.com/" target="_blank"><button class="text2">Apply for Jobs Now</button></a>
                            </p>
                        </div>
                    </div>
                </div>
        </section><!-- End About Us Section -->
        <?php include('footer.php') ?>
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>