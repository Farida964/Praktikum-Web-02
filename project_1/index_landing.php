<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        align-items: center;
        justify-content:center;
        
    }
    .img-fluid {
        border-radius:8px;
    }
/* navigasi  */

    .navbar-brand > h2 {
        color: #795CAA;
    }
    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    .navbar ul li {
        display: inline;
        margin-right: 20px;
    }  
    .navbar ul li a {
        display: block;
        color: #795CAA;
        text-decoration: none;
        padding: 10px;
        transition: color 0.3s ease;
    }
    .navbar ul li a:hover {
        color: #fff;
    }
    .navbar ul li:last-child {
        margin-right: 0;
    }
/* navbarend */

    .img-fluid {
        width: 70%;
    }
    .portfolio-caption {
        width: 70%;
    }
    .portfolio-hover-content > i:hover {
        color: #fff;
    }
</style>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #A8C7D6;">
            <div class="container">
                <a class="navbar-brand" href="index.php"><h2>KarinaLab</h2></a>
                <div class="navbar">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="index_landing.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index_landing.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index_landing.php">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="index_landing.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php" style="background-color: #fff; border-radius: 8px;">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url(dist/img/rumah_sakit.jpeg);">
            <div class="container">
                <div class="masthead-heading text-uppercase" style="color: #4B5390">We will help you gladly!</div>
                <div class="masthead-subheading" style="color: #5C6BAA">Welcome To KarinaLab</div>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="data_periksa.php">
                                <img class="img-fluid" src="dist/img/periksa.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption" style="background-color: #A8C7D6; border-radius: 8px;">
                                <div class="portfolio-caption-heading">Periksa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="data_pasien.php">
                                <img class="img-fluid" src="dist/img/pasien.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption" style="background-color: #A8C7D6; border-radius: 8px;">
                                <div class="portfolio-caption-heading">Pasien</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="data_dokter.php">
                                <img class="img-fluid" src="dist/img/dokter.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption" style="background-color: #A8C7D6; border-radius: 8px;">
                                <div class="portfolio-caption-heading">Dokter</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    </div>
                </div>
            </div>
        </section>

         <!-- Team-->
         <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Doctor</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="dist/img/dr cowok 1.jpeg" alt="..." />
                            <h4>Dr. John Doe</h4>
                            <p class="text-muted">Dentist</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="dist/img/dr cewek.jpeg" alt="..." />
                            <h4>Dr. Sarah Johnson</h4>
                            <p class="text-muted">Nefrologist</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="dist/img/dr cowok 2.jpeg" alt="..." />
                            <h4>Dr. Michael Smith</h4>
                            <p class="text-muted">Internist</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Contact-->
         <section class="page-section" id="contact" style="background-color: #795CAA;">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit" style="background-color: #795CAA;">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; 2024 by Farida Rabbani Virdynata</div>
                </div>
            </div>
        </footer>
    </body>

