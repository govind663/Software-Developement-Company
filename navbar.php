

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <strong>
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="info@speedtechserve.com">&nbsp;info@speedtechserve.com</a>
                </i>
            </strong>
            <strong>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span> 9975923975</span></i>
            </strong>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/?lang=en" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://in.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section><!-- End Top Bar -->
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
        <div class="logo">
            <h1 style="color: orangered;">
                <a href="index.php"><img src="assets/img/ico/Logo.png" alt="" class="img-fluid">
                    &nbsp;Speed Techserver
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="index.php"><b></i> Home</b></a></li>
                <li><a href="about.php"><b>About</b></a></li>
                <li><a href="services.php"><b>Services</b></a></li>
                <li><a href="portfolio.php"><b>Portofolio</b></a></li>
                <li><a href="job4skill.php"><b>Job4Skill</b></a></li>
                <li><a href="career.php"><b>Career</b></a></li>
                <li><a href="contact.php"><b>Contact</b></a></li>
                &nbsp;&nbsp;&nbsp;
                <li>
                    <!-- Search form -->
                    <form class="form-inline ml-auto border-2">
                        <div class="md-form my-0 form-group" >
                            <input class="form-control mr-sm-2" style="border-radius: 5px; border-color: orangered; border-width: medium; transition: all 0.35s;" id="search-focus" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </li>   
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<script>
const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});
</script>