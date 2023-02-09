<!DOCTYPE html>
<html lang="en">

<head>
    <title>CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/logotitle.png" type="image/x-icon">

    <!-- css bootstap 5 npm-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- font awesome 5-->
    <link rel="stylesheet" href="asset/css/all.min.css">

    <!-- style min -->
    <link rel="stylesheet" href="asset/css/style.min.css">

    <!-- responsive -->
    <link rel="stylesheet" href="asset/css/responsive.min.css">

</head>

<body>
    <div id="preloader"></div>

    <!--start button up -->
    <i class="fas fa-arrow-up btn-up fa-2x bg-mainColor"></i>
    <!-- end button up   -->

    <!-- start header -->
    <header>
        <div class="header_section py-5" id="home">
            <div class="overlay">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 position-relative">
                            <div class="image fl-wrap">
                                <img class="ms-4" src="img/avatar.PNG" alt="your photo">
                            </div>
                        </div>
                        <div class="info_part col-lg-7 col-md-12 offset-lg-1">
                            <div class="info m-auto pt-5">
                                <!-- typing animation -->
                                <div class="wrapper">
                                    <div class="static-txt">I'm <span class="dynamic-txt"></span></div>
                                </div>

                                <div>
                                    <ul class="contact_info p-4">
                                        <li><i class="fa fa-envelope"></i><a href="mailto:">hamsajaber0@gmail.com</a>
                                        </li>
                                        <li><i class="fa fa-phone"></i><span>0568536481</span></li>
                                        <li><i class="fa fa-map-marked"></i><span>palestine/tulkarm</span></li>
                                    </ul>
                                    <ul class="social_icon m-auto">
                                        <li><a href="#"><i class="fab fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/hamsa-jaber-86b915225"><i
                                                    class="fab fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://github.com/hamsaJaber22"><i
                                                    class="fab fa-brands fa-github"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <a href="#service" class="scroll-down-arrow">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main-header bg-dark">
            <div class="navContent">
                <div class="header_logo">
                    <a class="logo" href="index.html">
                        <img src="img/logo.png" alt="header logo">
                    </a>
                </div>

                <!-- menue -->
                <div class="header_menu ">
                    <button class="menu" onclick="toggleNav()">
                        <i onclick="changeIcon(this)" class="fab-sharp fa fa-bars">
                            <span class="menu-button-text">Menu</span>
                        </i>
                    </button>
                </div>
                <!-- end menu -->

                <div class="show_share bg-mainColor" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Share This">
                    <i class="fa fa-retweet"></i>
                </div>

                <div class="navbar bg-dark px-5">
                    <ul class="navbar-nav" id="mymenu">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                    </ul>
                </div>

                <div class="header_social" style="margin-top: 100px;">
                    <ul>
                        <li><a href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a></li>
                        <li><a href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a></li>
                        <li><a href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a></li>
                        <li><a href="#" target="_blank">
                                <i class="fab fa-vk"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- start services section -->
    <section>
        <div class="services_section py-3  bg-secColor" id="service">
            <div class="container_75">
                <div class="my_services position-relative text-start my-2">
                    <h1 class="mb-0">SERVICES</h1>
                    <h2 class="mb-0">MY SERVICE</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus nam expedita ipsum
                        officiis
                        eveniet? Nisi ex repudiandae minus adipisci recusandae.</p>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-5 mx-1">
                    <div class="services col-md-4">
                        <div class="service_item">
                            <div class="services_icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="services_text">
                                <h5 class="text-capitalize"><a href="#">UI/UX designer</a></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum corrupti
                                    officia temporibus
                                    iure
                                    atque consectetur laborum odit, architecto saepe?</p>
                            </div>
                        </div>
                    </div>

                    <div class="services col-md-4">
                        <div class="service_item">
                            <div class="services_icon">
                                <i class="fa fa-chart-pie"></i>
                            </div>
                            <div class="services_text">
                                <h5 class="text-capitalize"><a href="#">Website Design</a></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum corrupti
                                    officia temporibus
                                    iure
                                    atque consectetur laborum odit, architecto saepe?</p>
                            </div>
                        </div>
                    </div>

                    <div class="services col-md-4">
                        <div class="service_item">
                            <div class="services_icon">
                                <i class="fa fa-camera"></i>
                            </div>
                            <div class="services_text">
                                <h5 class="text-capitalize"><a href="#">photography</a></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum corrupti
                                    officia temporibus
                                    iure
                                    atque consectetur laborum odit, architecto saepe?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services section -->

    <!-- start resume section -->
    <section>
        <div class="resume_section position-relative my-3" id="resume">
            <div class="container_75">
                <div class="my_resume position-relative text-start my-2">
                    <h1 class="mb-0">my resume</h1>
                    <h2 class="mb-0">EDUCATION & EXPERIENCE </h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus nam expedita ipsum
                        officiis
                        eveniet? Nisi ex repudiandae minus adipisci recusandae.</p>
                </div>
                <div class="row justify-content-center pb-3">

                    <div class="edue_list col-md-5 mt-5">

                        <div class="edue_list_item custom-inner-header workres my-3">
                            <h3><i class="fa fa-graduation-cap"></i>BS COMPUTER SCIENCE<span>Palestine Technical
                                    University, Kadoorie (PTUK) </span></h3>
                            <p>Graduation Project :
                                Watch -> web site like Netflix</p>
                            <span> 2017-2021 </span>
                        </div>


                        <div class="edue_list_item custom-inner-header workres my-3">
                            <h3><i class="fa fa-graduation-cap"></i>Frontend Development<span>Knowledge Academy</span>
                            </h3>
                            <p>135 hours of training.</p>
                            <span> Oct 2021–Mar 2022 </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end resum section -->

    <!-- dawnloadCv section -->
    <section>
        <div class="dawnloadCv">
            <!-- <div class="container"> -->
            <div class="content col-md-5 m-auto">
                <h2>Download My Resume Now!</h2>
                <div class="daenloadbtn">
                    <a class="btn" href="">Download CV</a>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- end dawnloadCv section -->

    <!-- start about portfolio -->
    <section>
        <div class="portfolio_section  bg-secColor" id="portfolio">
            <div class="content py-3">
                <div class="container_75">
                    <div class="row">
                        <div class="portfolio position-relative text-start my-2">
                            <h1 class="mb-0">portfolio</h1>
                            <h2 class="mb-0">my portfolio</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus nam expedita ipsum
                                officiis
                                eveniet? Nisi ex repudiandae minus adipisci recusandae.</p>
                        </div>

                        <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web"
                                    aria-selected="false">WEB DESIGN</button>

                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ui-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-ui" type="button" role="tab" aria-controls="pills-ui"
                                    aria-selected="false">UI DESIGN</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/travel.PNG" alt=" portfolio photo">
                                            <div class="overlay">
                                                <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"></i>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/travel.PNG" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>
                                                                    Travel website front-end project, using HTML,css
                                                                    bootstrap,js,jQuery
                                                                </p>
                                                                <p class="date">
                                                                    July 2022 – Sep 2022
                                                                </p>
                                                                <div class="url">
                                                                    <span>url : </span><a
                                                                        href="https://hamsajaber22.github.io/travel_website"
                                                                        target="_blank">Around The World </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="https://hamsajaber22.github.io/travel_website">Aroud
                                                            The World</a>
                                                    </h2>
                                                    <p><a href="#">photography </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/cv.PNG" alt="portfolio photo">
                                            <div class="overlay">
                                                <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal1" tabindex="-1"
                                                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <video width="100%" controls>
                                                                <source src="img/CV .mp4" type="video/mp4">
                                                                <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
                                                                Your browser does not support HTML video.
                                                            </video>


                                                            <div class="project-info">
                                                                <p>Simone is a one-page resume, cv, vcard and
                                                                    bootstrap
                                                                    5 personal portfolio react template with unique
                                                                    design, made with precision and focus on an
                                                                    intuitive user experience.
                                                                    Contain
                                                                    information,
                                                                    resume,
                                                                    portfolio,
                                                                    skills,
                                                                    and contact using HTML, CSS, Bootstrap,
                                                                    JavaScript,
                                                                    and JQuery.</p>
                                                                <p class="date">
                                                                    10 November 2022 - 25 November 2022
                                                                </p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">Portfolio</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="#">Portfolio</a></h2>
                                                    <p><a href="#">Video </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/webDesign.webp" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal2" tabindex="-1"
                                                aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/webDesign.webp" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>

                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">Video </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/rolast.PNG" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal3"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal3" tabindex="-1"
                                                aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel3">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/rolast.PNG" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Rolast is a professional property listing website
                                                                    template for your real estate business. Whether you
                                                                    are working on your own project or your client’s,
                                                                    help yourself with a predefined site canvas. In
                                                                    short, this will help you save plenty of time and
                                                                    energy, as many page layouts and components are
                                                                    available out of the box. Rolast also sorts out
                                                                    mobile-readiness and cross-browser compatibility for
                                                                    your convenience.</p>
                                                                <p class="date"> Dec 12, 2021.
                                                                </p>
                                                                <div class=" url">
                                                                    <span>url : </span><a
                                                                        href="https://reverent-torvalds-55f68e.netlify.app"
                                                                        target="_blank">Rolast</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">

                                                <div class="info">
                                                    <h2><a href="#">Rolast</a></h2>
                                                    <p><a href="#">Video </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/design.jpg" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal9"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal9" tabindex="-1"
                                                aria-labelledby="exampleModalLabel19" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel19">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/design.jpg" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">photography </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/ui.jpg" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal4"></i>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal4" tabindex="-1"
                                                aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel4">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/ui.jpg" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">

                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">photography </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                                <div class="row">
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/travel.PNG" alt=" portfolio photo">
                                            <div class="overlay">
                                                <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal10"></i>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal10" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/travel.PNG" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>
                                                                    Travel website using HTML,css bootstrap,js,jQuery
                                                                </p>
                                                                <p class="date">
                                                                    July 2022 – Sep 2022
                                                                </p>
                                                                <div class="url">
                                                                    <span>url : </span><a
                                                                        href="https://hamsajaber22.github.io/travel_website"
                                                                        target="_blank">Around The World </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="https://hamsajaber22.github.io/travel_website">Aroud
                                                            The World</a>
                                                    </h2>
                                                    <p><a href="#">photography </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/cv.PNG" alt="portfolio photo">
                                            <div class="overlay">
                                                <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal11"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal11" tabindex="-1"
                                                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/cv.PNG" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Simone is a one-page resume, cv, vcard and bootstrap
                                                                    5 personal portfolio react template with unique
                                                                    design, made with precision and focus on an
                                                                    intuitive user experience.

                                                                    Contain
                                                                    information,
                                                                    resume,
                                                                    portfolio,
                                                                    skills,
                                                                    and contact using HTML, CSS, Bootstrap, JavaScript,
                                                                    and JQuery.</p>

                                                                <p class="date">
                                                                    10 November 2022 - 25 November 2022
                                                                </p>

                                                                <div class="url">

                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">Portfolio</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="#">Portfolio</a></h2>
                                                    <p><a href="#">Video </a> <a href="#"> Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/rolast.PNG" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal12"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal12" tabindex="-1"
                                                aria-labelledby="exampleModalLabel12" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel12">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/rolast.PNG" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Rolast is a professional property listing website
                                                                    template for your real estate business. Whether you
                                                                    are working on your own project or your client’s,
                                                                    help yourself with a predefined site canvas. In
                                                                    short, this will help you save plenty of time and
                                                                    energy, as many page layouts and components are
                                                                    available out of the box. Rolast also sorts out
                                                                    mobile-readiness and cross-browser compatibility for
                                                                    your convenience.</p>
                                                                <p class="date"> Dec 12, 2021.
                                                                </p>
                                                                <div class="url">
                                                                    <span>url : </span><a
                                                                        href="https://reverent-torvalds-55f68e.netlify.app"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">

                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">photography</a>
                                                        <a href="#">Branding</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/design.jpg" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal13"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal13" tabindex="-1"
                                                aria-labelledby="exampleModalLabel13" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel13">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/design.jpg" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">
                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">photography</a>
                                                        <a href="#">Branding</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-ui" role="tabpanel" aria-labelledby="pills-ui-tab">
                                <div class="row">
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/ui.jpg" alt="portfolio photo">
                                            <div class="overlay">
                                                <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal5"></i>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal5" tabindex="-1"
                                                aria-labelledby="exampleModalLabel15" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel15">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/ui.jpg" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">

                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">Video</a> <a href="#">Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio_item col-md-4">
                                        <div class="card bg-dark ">
                                            <img src="img/design.jpg" alt="portfolio photo">
                                            <div class="overlay"> <i class="fa fa-plus" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal6"></i>
                                            </div> <!-- Modal -->
                                            <div class="modal fade my-5" id="exampleModal6" tabindex="-1"
                                                aria-labelledby="exampleModalLabel16" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="title d-flex justify-content-between p-3">
                                                            <h5 class="modal-title" id="exampleModalLabel16">Title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/design.jpg" alt="portfolio photo">
                                                            <div class="project-info">
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Dignissimos voluptatum,
                                                                    blanditiis quam enim tempora eos dicta
                                                                    necessitatibus dolorem fugiat aut tempore ex
                                                                    magnam iure. Architecto eaque inventore distinctio
                                                                    blanditiis ad.</p>
                                                                <div class="url">
                                                                    <span>url : </span><a href="#"
                                                                        target="_blank">example</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio_item_box">

                                                <div class="info">
                                                    <h2><a href="#">Kent Brant Concept</a></h2>
                                                    <p><a href="#">photography</a><a href="#">Branding</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about portfolio -->

    <!-- start skills section -->
    <section>
        <div class="skills_section pt-3 pb-5" id="skills">
            <div class="container_75">
                <div class="row">
                    <h1 class="position">ATTAINMENS</h1>

                    <div class="developer_skills py-5">
                        <div class="skills_title col-md-4 text-start offset-md-1">
                            <h3>My Skills</h3>
                            <p>Lorem Ipsum generators on the Internet king this the first true generator</p>
                        </div>

                        <div class="col-md-6 offset-1">
                            <div class="skills_content pb-3">
                                <div class="skill-details">
                                    <span>HTML & CSS</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skills_content pb-3">
                                <div class="skill-details">
                                    <span>Bootstrap</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skills_content pb-3">
                                <div class="skill-details">
                                    <span>JavaScript/JQuery</span>
                                    <span>60%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skills_content pb-3">
                                <div class="skill-details">
                                    <span>php</span>
                                    <span>65%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statrt contact section -->
    <section class="contact_section py-5 bg-secColor" id="contact">
        <div class="container_75 py-2" id="frmContact">
            <div id="mail-status"></div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="contact_title">
                        <h3 class="text-capitalize">get in touch</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatem officiis quas,
                            deserunt autem
                            fugit?</p>
                    </div>
                </div>

                <div class="col-lg-7 col-md-10 col-sm-12 offset-md-1 m-auto">
                    <div class="my-2 text-start px-3">
                        <span id="info" class="info text-danger fs-6 text-capitalize"></span><br />
                    </div>

                    <div class="contact-form">
                        <form class="custom-form" name="contact" id="form">
                            <fieldset>

                                <div class="row">
                                    <div class="form-item col-md-6">
                                        <i class="fa fa-user"></i>
                                        <input type="text" name="userName" id="userName" class="demoInputBox"
                                            placeholder="Your Name *">
                                        <p id="error" style="color:red; font-size:11px; margin:0; font-weight: 500;">
                                        </p>
                                    </div>

                                    <div class="form-item col-md-6">
                                        <i class="fa fa-envelope"></i>
                                        <input type="email" name="userEmail" id="userEmail"
                                            placeholder="Email Address * " class="demoInputBox">
                                    </div>

                                    <div class="form-item col-md-6">
                                        <i class="fa fa-mobile"></i>
                                        <input class="form-input" type="text" name="userNumber" id="userNumber"
                                            placeholder="Phone *" class="demoInputBox">
                                    </div>

                                    <div class="form-item col-md-6">
                                        <input class="form-input px-4" type="text" name="subject" id="subject"
                                            placeholder="Subject" class="demoInputBox">
                                    </div>
                                </div>
                                <textarea name="message" id="message" cols="40" rows="3"
                                    placeholder="Your Message:"></textarea>

                            </fieldset>
                        </form>
                        <div class="sendMessage d-flex">
                            <button name="submit" type="submit" class="btn float-btn flat-btn color-btn"
                                onClick="sendContact();" id="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- start footer -->
    <footer>
        <div class="content bg-dark">
            <div class="container_75">
                <p class="mb-0">All right reserved <span class="text-mainColor">resum</span> .&copy; 2022</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- js bootstrap npm -->
    <script src="asset/js/bootstrap.bundle.min.js"></script>

    <script src="asset/js/jquery.min.js"></script>

    <script src="asset/js/query.js"></script>

    <script src="asset/js/main.js"></script>

    <script src="asset/js/contactValidation.js"></script>

    <!-- typing cdn jd -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
    var typed = new Typed('.dynamic-txt', {
        strings: ["Hamsa Jaber", "a web developer."],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true
    });
    </script>

    <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = "none";
    }, 10000)
    </script>

</body>

</html>
