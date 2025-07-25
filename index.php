<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HELPZ - Free Charity Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+123 456 7890</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Helpz</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="causes.html" class="nav-item nav-link">Causes</a>
                    <a href="event.html" class="nav-item nav-link">Events</a>
                    <a href="blog.html" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="single.html" class="dropdown-item">Detail Page</a>
                            <a href="service.html" class="dropdown-item">What We Do</a>
                            <a href="team.html" class="dropdown-item">Meet The Team</a>
                            <a href="donate.html" class="dropdown-item">Donate Now</a>
                            <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Let's be kind for children</h1>
                        <p>
                            "The best way to find yourself is to lose yourself in the service of others." - Mahatma Gandhi

                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="./donate.html">Donate Now</a>
                            <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="./img/carousel-2.webp" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Get Involved with helping hand</h1>
                        <p>
                            "The value of a man resides in what he gives and not in what he is capable of receiving." - Albert Einstein
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">Donate Now</a>
                            <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Bringing smiles to millions</h1>
                        <p>
                            "We make a living by what we get, but we make a life by what we give." - Winston Churchill
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="">Donate Now</a>
                            <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch
                                Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div> -->
                <div class="col-lg-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Worldwide non-profit charity organization</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Our charity collecting firm is dedicated to making a positive impact on society by
                                organizing and managing fundraising campaigns. With a commitment to transparency and
                                efficiency, we facilitate the collection of donations to support various charitable
                                causes. Together with our donors, we strive to create meaningful change and contribute
                                to a better, more compassionate world.Our charity collecting firm prioritizes integrity
                                and collaboration, ensuring every donated dollar reaches its intended destination. Join
                                us in fostering hope and building brighter futures for those in need.</div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                At our core, our mission is to inspire kindness and transform lives. We believe in the
                                power of collective compassion, uniting people to make a profound impact through
                                charitable giving. Striving for transparency and efficiency, we aim to create a ripple
                                effect of positive change, fostering a world where everyone has the opportunity to
                                thrive, and no act of generosity goes unnoticed or unappreciated.</div>
                            <div id="tab-content-3" class="container tab-pane fade">

                                Our vision is a world where philanthropy flourishes, breaking down barriers and
                                uplifting communities. We aspire to be a driving force behind global compassion,
                                fostering a culture where generosity becomes second nature. Envisioning a society united
                                by empathy, we seek to empower individuals to contribute meaningfully, creating a ripple
                                effect of positive change that transcends borders. Together, we are dedicated to
                                building a brighter, more equitable future for generations to come.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>We believe that we can save more lifes with you</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-diet"></i>
                        </div>
                        <div class="service-text">
                            <h3>Healthy Food</h3>
                            <p>Nourishing bodies and minds, healthy food promotes well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-water"></i>
                        </div>
                        <div class="service-text">
                            <h3>Pure Water</h3>
                            <p>essential for life, refreshing and vital. Hydration that promotes health and sustains our
                                well-being.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                        <div class="service-text">
                            <h3>Health Care</h3>
                            <p>Vital medical services and preventative measures for overall well-being and sustained
                                health.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-education"></i>
                        </div>
                        <div class="service-text">
                            <h3>Primary Education</h3>
                            <p>Foundation for lifelong learning, fostering curiosity, knowledge, and essential skills in
                                early academic years.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="service-text">
                            <h3>Residence Facilities</h3>
                            <p>Comfortable living spaces providing essential amenities, fostering community, and
                                ensuring a secure, supportive environment for residents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-social-care"></i>
                        </div>
                        <div class="service-text">
                            <h3>Social Care</h3>
                            <p>Compassionate support and services addressing individuals' well-being, fostering
                                community, and enhancing overall societal welfare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Facts Start -->
    <div class="facts">
        <!-- <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <!-- <h3 class="facts-plus" data-toggle="counter-up">150</h3> -->
                            <h3 class="facts-plus">150</h3>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <!-- <h3 class="facts-plus" data-toggle="counter-up">400</h3> -->
                            <h3 class="facts-plus">4007</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <!-- <h3 class="facts-dollar" data-toggle="counter-up">10000</h3> -->
                            <h3 class="facts-dollar">1000000</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <!-- <h3 class="facts-dollar" data-toggle="counter-up">5000</h3> -->
                            <h3 class="facts-dollar">50000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Causes Start -->
    <div class="causes">
        <div class="container">
            <div class="section-header text-center">
                <p>Popular Causes</p>
                <h2>Let's know about charity causes around the world</h2>
            </div>
            <div class="owl-carousel causes-carousel">
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-1.jpg" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> Rs.100000</p>
                            <p><strong>Goal:</strong> Rs.50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Donation for ABC area</h3>
                        <p>Donate now, uplift lives in ABC area, fostering positive change and community well-being.</p>
                    </div>
                    <div class="causes-btn">
                        <!-- <a class="btn btn-custom">Learn More</a> -->
                        <a class="btn btn-custom" href="./donate.html">Donate Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-2.jpg" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>85%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> Rs.100000</p>
                            <p><strong>Goal:</strong> Rs.50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Donation for XYZ area</h3>
                        <p>Donate now, uplift lives in XYZ area, fostering positive change and community well-being.</p>
                    </div>
                    <div class="causes-btn">
                        <!-- <a class="btn btn-custom">Learn More</a> -->
                        <a class="btn btn-custom" href="./donate.html">Donate Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-3.jpg" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> Rs.100000</p>
                            <p><strong>Goal:</strong> Rs.50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Donation for EFG area</h3>
                        <p>Donate now, uplift lives in EFG area, fostering positive change and community well-being.</p>
                    </div>
                    <div class="causes-btn">
                        <!-- <a class="btn btn-custom">Learn More</a> -->
                        <a class="btn btn-custom" href="./donate.html">Donate Now</a>
                    </div>
                </div>
                <div class="causes-item">
                    <div class="causes-img">
                        <img src="img/causes-4.jpg" alt="Image">
                    </div>
                    <div class="causes-progress">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">
                                <span>60%</span>
                            </div>
                        </div>
                        <div class="progress-text">
                            <p><strong>Raised:</strong> Rs.100000</p>
                            <p><strong>Goal:</strong> Rs.50000</p>
                        </div>
                    </div>
                    <div class="causes-text">
                        <h3>Donation for LMO area</h3>
                        <p>Donate now, uplift lives in LMO area, fostering positive change and community well-being.</p>
                    </div>
                    <div class="causes-btn">
                        <!-- <a class="btn btn-custom">Learn More</a> -->
                        <a class="btn btn-custom" href="./donate.html">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Donate Start -->
    <div class="donate">
        <!-- <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg"> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Let's donate to needy people for better lives</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                Your donation brings hope, nourishment, and vital resources, making a tangible impact on
                                lives in need.Transform lives with your donation, offering solace and opportunities for
                                those in need.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-custom active">
                                    <input type="radio" name="options" checked> Rs.100
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> Rs.500
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="options"> Rs.1000
                                </label>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Event Start -->
    <div class="event">
        <div class="container">
            <div class="section-header text-center">
                <p>Upcoming Events</p>
                <h2>Be ready for our upcoming charity events</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="img/event-1.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>01-March-24</p>
                                <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                <p><i class="fa fa-map-marker-alt"></i>Vadodara</p>
                            </div>
                            <div class="event-text">
                                <h3>Vadodara Donation Campaign</h3>
                                <p>
                                    Join us, make a difference. Your support brings hope, uplifts communities, and
                                    sparks positive change.</p>
                                <a class="btn btn-custom" href="">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-item">
                        <img src="img/event-2.jpg" alt="Image">
                        <div class="event-content">
                            <div class="event-meta">
                                <p><i class="fa fa-calendar-alt"></i>01-July-24</p>
                                <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                <p><i class="fa fa-map-marker-alt"></i>Mumbai</p>
                            </div>
                            <div class="event-text">
                                <h3>Mumbai Donation Campaign</h3>
                                <p>
                                    Unite for change. Your contribution uplifts lives, fosters hope, and creates
                                    meaningful impact in Mumbai communities.
                                </p>
                                <a class="btn btn-custom" href="">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our Team</p>
                <h2>Awesome guys behind our charity activities</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dhruvit Vegad</h2>
                            <p>Founder & CEO</p>
                            <div class="team-social">
                                <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Mohib Solanki</h2>
                            <p>Chef Executive</p>
                            <div class="team-social">
                                <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Kanthil Dayani</h2>
                            <p>Chef Advisor</p>
                            <div class="team-social">
                                <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Palak Patel</h2>
                            <p>Advisor</p>
                            <div class="team-social">
                                <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Volunteer Start -->
    <div class="volunteer">
        <!-- <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg"> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="volunteer-form">
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" placeholder="Why you want to become a volunteer?"
                                    required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Become a volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="volunteer-content">
                        <div class="section-header">
                            <p>Become A Volunteer</p>
                            <h2>Let’s make a difference in the lives of others</h2>
                        </div>
                        <div class="volunteer-text">
                            <p>
                                Become a volunteer and make a difference! Join our dedicated team, contribute your skills, and create positive change. Embrace the rewarding experience of serving your community and beyond.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Testimonial</p>
                <h2>What people are talking about our charity activities</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="./img/modi.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Narendra Modi
                                </h3>
                            <p>Prime Minister of India</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Sabka Saath, Sabka Vikas, Sabka Vishwas
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="./img/ambani.webp" alt="Image">
                        <div class="testimonial-name">
                            <h3>Mukesh Dhirubhai Ambani</h3>
                            <p> Indian billionaire businessman</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            generosity, encourages donations for a brighter, more compassionate society. Join us in giving.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="img/bhupendrabhai.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Bhupendra Rajnikant Patel</h3>
                            <p>Chief Minister of Gujarat </p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            My support for this charity is unwavering. Let's join hands to make a meaningful impact together.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="./img/dhoni.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Mahendra Singh Dhon</h3>
                            <p>Indian professional cricketer</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Charity connects hearts.I believes in the power of giving, fostering change, and building hope together.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="contact-img">
                <img src="img/contact.jpg" alt="Image">
            </div>
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required"
                            data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required"
                            data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    <!-- <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Blog</p>
                <h2>Latest news & articles directly from our blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                            <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <h2>Our Head Office</h2>
                        <p><i class="fa fa-map-marker-alt"></i>123 Area, Rajkot ,Gujarat</p>
                        <p><i class="fa fa-phone-alt"></i>+91 9173160534</p>
                        <p><i class="fa fa-envelope"></i>donation@gmail.com</p>
                        <div class="footer-social">
                            <a class="btn btn-custom" href="https://twitter.com/i/flow/login"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-custom" href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-custom" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-custom" href="https://www.instagram.com/accounts/login/"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-custom" href="https://in.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Popular Links</h2>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Popular Causes</a>
                        <a href="#">Upcoming Events</a>
                        <a href="#">Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Useful Links</h2>
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">FQAs</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-newsletter">
                        <h2>Newsletter</h2>
                        <form>
                            <input class="form-control" placeholder="Email goes here">
                            <button class="btn btn-custom">Submit</button>
                            <label>Don't worry, we don't spam!</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Donation System</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="">Dhruvit Vegad</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>