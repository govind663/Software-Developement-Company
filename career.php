<?php include 'filesLogic.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Speed Techserve | Career</title>
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
<style type="text/css" media="screen">
    h1 {
        font-size: 20px;
        margin-top: 24px;
        margin-bottom: 24px;
    }

    img {
        height: 40px;
    }

    .register {
        background-color: #EA2626;
        border: none;
        margin-left: 30px;
        margin-bottom: 50px;
        cursor: pointer;
        color: #fff;
        outline: none;
        font-size: 20px;
        font-weight: normal;
        transition: all 0.5s ease-in-out;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        border-radius: 30px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -o-border-radius: 30px;
        -ms-border-radius: 30px;
    }

    .register:hover {
        background-color:#36b051;
        color:#fff;
    }

    @media only screen and (max-width: 500px) {
        .btn-mod.btn-large {
            padding: 6px 16px;
            font-size: 11px;
        }

        .form-title {
            font-size: 20px;
        }
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
                        <div class="carousel-item active" style="background: url(assets/img/blog/blog-1.jpg); background-size: cover; width: 100%; height: 100vh !important;">
                            <div class="carousel-container">
                                <div class="carousel-content breadcrumbs" id="breadcrumbs">
                                    <h2 class="animate__animated animate__fadeInDown text-center">
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Welcome to <span style="color: aquamarine;">Career At Speed Techserve</span>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </h2>
                                    <ol class="animate__animated animate__fadeInDown">
                                        <li><a href="index.php" style="font-size: 25px;font-weight: 500;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                                        <li style="font-size: 25px;font-weight: 500;">Career</li>
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
        
        <!-- ======= Start here Work Environment Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center p-2">
                            <h3 data-aos="fade-up" style="color: #f03c02;">Work Environment</h3>
                            <p data-aos="fade-up" style="text-align: justify;">
                                At Speed Techserve, you can explore your inner potential. Talent is developed and proactivity appreciated. Employees are welcome to add their inputs into the functioning of the organisation.
                            </p>
                            <p data-aos="fade-up" style="text-align: justify;">
                                You are given a chance to create your own opportunities. Product and Process ideas are taken seriously and added to the existing environment with due credit.
                            </p>
                        </div>
                    </div>
                    <div class=" col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="assets/img/career/career.jpg" alt="" class="image" style="width:99%; ">
                    </div>
                </div>
        </section><!-- End Work Environment Section -->
        <!-- ======= Start here Current Openings Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Current Openings</strong></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="testimonial-item">
                            <h3>JAVA Developer(Fresher)</h3>
                            <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                0-1 years hands on experience in core java,servlet,jsp. Html5,CSS,javascript,ajax addeed advantage
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item mt-4 mt-lg-0">
                            <h3>Android Developer(Fresher)</h3>
                            <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Knowledge of Android Sdk, Android App Development, Mobile Application Development, Android 4.0.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-item mt-4">
                            <h3>JAVA Developer(Experienced)</h3>
                            <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Strong technical skills in .Net, C#, MVC,ASP,Entity Framework, SQL Server(Reporting Service and Integration Service), AJAX, Web Services
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-item mt-4">
                            <h3>Dot Net Developer(Experienced)</h3>
                            <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Strong technical skills in .Net, C#, MVC,ASP,Entity Framework, SQL Server(Reporting Service and Integration Service), AJAX, Web Services.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-item mt-4">
                            <h3>Internship</h3>
                            <p style="text-align: justify;">
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                We are looking candidates for MCA,MCS,BE Internship in Java,Dot Net,Php,Android technologies
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End here Current Openings Section -->
        <section id="contact" class="contact">
            <div class="container">
                <h3 data-aos="fade-up" style="color: #f03c02;">Upload Your CV</h3>
                <br>
                <br>
                <div class="row  justify-content-center" data-aos="fade-left">
                    <div class="col-lg-8 " style="background: ghostwhite; color: black;">
                        <form id="contact-form" name="myForm" class="form justify-content-center p-5" action="career.php"  role="form" method="post" enctype="multipart/form-data">
                            
                            <h3  style="color: black;">Contact Information</h3>
                            <hr>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputName">First Name &nbsp;<span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" class="form-control" id="First_Name" placeholder="Enter your first name" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputName">Middle Name&nbsp;<span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control" id="Middle_Name" placeholder="Enter your middle name" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="exampleInputName">Last Name&nbsp;<span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" class="form-control" id="Last_Name" placeholder="Enter your middle name" required>
                                </div>
                            </div>
                            
                            <br>
                            <div class="form-group ">
                                <label for="exampleInputEmail" >Email address&nbsp;<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter your email address" required>
                            </div>
                            <br>
                            
                            <div class="form-group ">
                                <label for="exampleInputphone" >Phone &nbsp;<span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter your phone number" required>
                            </div>
                            <br>
                            
                            <h3  style="color: black ;">Position</h3>
                            <hr>
                            
                            <div class="form-group ">
                                <label for="exampleInputPosition">Position you are applying for&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" name="position" class="form-control" id="position" 
                                aria-describedby="positionHelp" placeholder="Enter your position you are applying for job" required>
                            </div>
                            <br>
                            
                            <div class="form-group ">
                                <label for="exampleInputPortfolio">Portfolio website</label>
                                <input type="text" name="portfolio" class="form-control" id="portfolio" 
                                aria-describedby="portfolioHelp" placeholder="Enter your portfolio website">
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="exampleInputSalary">Salary requirements</label>
                                <input type="text" name="salary" class="form-control" id="salary" 
                                aria-describedby="salaryHelp" placeholder="Enter your Salary requirements">
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="exampleInputStarting_Date">When can you start?</label>
                                <input type="date" name="starting_date" class="form-control" id="starting_date" 
                                aria-describedby="starting_dateHelp" placeholder="Enter your starting date">
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="exampleInputStarting_Data">Are you willing to relocate?</label><br>
                                <span><input type="radio" id="data_14_0" name="data_14" value="Yes"/> Yes</span><br/>
                                <span><input type="radio" id="data_14_1" name="data_14" value="No"/> No</span><br/>
                                <span><input type="radio" id="data_14_2" name="data_14" value="Not sure"/> Not sure</span><br/>
                            </div>
                            <br>

                            <div class="form-group mt-3">
                                <label class="mr-4 form-label text-dark" id="fileLabel"><i class="fas fa-upload"></i>&nbsp;Upload your CV:</label>
                                <input type="file" class="form-control" name="myfile">
                            </div>
                            <br>

                            <div class="form-group ">
                                <label for="exampleInputCompany">Last company you worked for</label>
                                <input type="text" name="company" class="form-control" id="position" 
                                aria-describedby="company" placeholder="Enter your Last company you worked for">
                            </div>
                            <br>
                            <div class="text-center margin-top-25">
                                <button type="submit" class="btn register" name="save"><i class="fas fa-share"></i>&nbsp;Send Resume</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
        
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