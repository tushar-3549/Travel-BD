<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel BD Website</title>


    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- bootstrap4 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- bootstap5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css file  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- top nav start  -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 m-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marked-alt me-2"></i>123, DIU Smart City</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+8801843080401</small>
                    <small class="me-3 text-light"><i class="fa fa-envelope-open me-2"></i>info@gmail.com</small>
                </div>
            </div>
        </div>
    </div>

    <!-- top nav end  -->


    <!-- main nav bar starts  -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Travel <span style="color: red;">BD</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#destination">Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="register.php"><i class="fas fa-user"></i>Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>
            </ul>
        </div>
    </nav>




    <!-- main nav bar ends  -->

    <!-- front section starts -->
    <div id="home" class="container-fluid position-relative p-0">
        <div class="container-fluid py-5 mb-5 front-header">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 fw-bold cusf1">Enjoy your vacation with us</h1>
                    <p class="fs-7 text-light mb-4">Welcome to our Travel BD official website and book any places in
                        Bangladesh</p>
                    <div class="position-relative w-75 mx-auto">
                        <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-3 pe-5"
                            placeholder="Eg:Cox's Bazar">
                        <button type="button"
                            class="btn btn-danger rounded-pill px-4 py-2 position-absolute top-0 end-0 me-2"
                            style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- front section ends -->


    <!-- about us section starts -->
    <h2 id="about" class="text-center bg-white section-title text-start text-danger pe-3">About US</h2>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src="img/travel.jpeg" alt="" style="object-fit: cover;"
                            class="img-fluid position-absolute w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <h5 class="bg-white section-title text-start text-success pe-3">About US</h5> -->
                    <h3 class="mb-4"> Welcome to <span class="text-success">Bangladesh</span></h1>

                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, facere! Lorem
                            ipsum
                            dolor sit amet, consectetur adipisicing elit.
                            Veniam dolorem id, atque reprehenderit mollitia dignissimos.</p>
                        <!-- <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, facere!</p> -->

                        <div class="row gx-4 gy-2 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Airport and Plane
                                    service
                                </p>
                                <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>AC and Non-AC Bus
                                    service
                                </p>
                                <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>AC and Non-AC Train
                                    service</p>
                                <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Beautiful home and
                                    food
                                    service</p>
                            </div>
                        </div>

                        <buton class="btn btn-danger" href="#demo" data-toggle="collapse">Read more</buton>
                        <div id="demo" class="collapse">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero error quo odio deserunt
                                sit
                                rem eius quis? Tempore.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us section ends -->


    <!-- service section starts  -->
    <div id="service" class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <!-- <h6 class="section-title bg-white text-center text-danger px-3">Services</h6> -->
                <h1 class="mb-5 text-danger">Our Services</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-danger mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-danger mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-danger mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-danger mb-4"></i>
                            <h5>World Wide Tourist</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-umbrella text-danger mb-4"></i>
                            <h5>Travel Insurance</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hiking text-danger mb-4"></i>
                            <h5>Adventure Tours</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-plane text-danger mb-4"></i>
                            <h5>Flight Booking</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-ship text-danger mb-4"></i>
                            <h5>Cruise Packages</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, earum.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- service section ends  -->

    <!-- destination part starts  -->
    <div id="destination" class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5 text-danger">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">

                        <div class="col-lg-12 col-md-12">
                            <a href="" class="d-block overflow-hidden position-relative img-container">
                                <img src="img/coxbazar.jpeg" alt="" class="img-fluid">
                                <div class="bg-white text-danger position-absolute fw-bold top-0 start-0 m-3 py-1 px-2">
                                    28% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 m-3 py-1 px-2">
                                    Cox's Bazar</div>
                            </a>
                        </div>


                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block overflow-hidden position-relative img-container">
                                <img src="img/sylhet.jpeg" alt="" class="img-fluid">
                                <div class="bg-white text-danger position-absolute fw-bold top-0 start-0 m-3 py-1 px-2">
                                    25% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 m-3 py-1 px-2">
                                    Sylhet Spot</div>
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block overflow-hidden position-relative img-container">
                                <img src="img/rangamati.jpeg" alt="" class="img-fluid">
                                <div class="bg-white text-danger position-absolute fw-bold top-0 start-0 m-3 py-1 px-2">
                                    35% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 m-3 py-1 px-2">
                                    Rangamati</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                    <a href="" class="d-block position-relative h-100 overflow-hidden img-container">
                        <img src="img/sajek.jpeg" alt="" class="img-fluid position-absolute w-100 h-100"
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">38% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 m-3 py-1 px-2">Sajek Velly
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- destination part ends  -->

    <!-- package section starts  -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5 text-danger">Awsome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">


                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="img/bandarban.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i>Bandarban
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calender-alt text-primary me-2"></i>3 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-user text-primary me-2"></i>2 person
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">৳2000 TK Only</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias sit aliquid iure?</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-outline-danger px-3 mr-2"
                                    style="border-radius: 30px;">Read more</a>
                                <a href="" class="btn btn-sm btn-outline-danger px-3" style="border-radius: 30px;">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div id="package" class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="img/jaflong.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i>Jaflong
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calender-alt text-primary me-2"></i>4 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-user text-primary me-2"></i>3 person
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">৳2250 TK Only</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias sit aliquid iure?</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-outline-danger px-3 mr-2"
                                    style="border-radius: 30px;">Read more</a>
                                <a href="" class="btn btn-sm btn-outline-danger px-3" style="border-radius: 30px;">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="img/shitakundhu.jpeg" alt="" class="img-fluid">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i>Shitakundu
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calender-alt text-primary me-2"></i>3 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-user text-primary me-2"></i>2 person
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">৳2200 TK Only</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias sit aliquid iure?</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-outline-danger px-3 mr-2"
                                    style="border-radius: 30px;">Read more</a>
                                <a href="" class="btn btn-sm btn-outline-danger px-3" style="border-radius: 30px;">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- package section ends  -->


    <!-- tourist feedback start  -->

    <div class="container text-center text-danger">
        <h1 class="mb-4">Tourist Feedback</h1>
    </div>


    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                    style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Maria Kate</h5>
                        <p>From India</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                    style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Mr Modom Mohon</h5>
                        <p>From Dhaka</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
            <div class="carousel-item">
                <img class="rounded-circle shadow-1-strong mb-4"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                    style="width: 150px;" />
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h5 class="mb-3">Miss Nadia</h5>
                        <p>From Thailand</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                            nesciunt sint eligendi reprehenderit reiciendis.
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="fas fa-star fa-sm"></i></li>
                    <li><i class="far fa-star fa-sm"></i></li>
                </ul>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->

    <!-- tourist feedback end  -->


    <!-- booking design start  -->
    <div class="container-xxl py-5 bg-success">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="mb-4 text-white">Online Booking</h1>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum a
                            minus!</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum a
                            minus!</p>
                        <a href="" class="btn btn-danger mt-2">Read more</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">
                            Book A Tour
                        </h1>
                        <form action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            placeholder="Enter your name">
                                        <label for="name">Your name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email"
                                            placeholder="Enter your E-mail">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control bg-transparent" id="date"
                                            placeholder="Date">
                                        <label for="date">Set Date</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" name="" id="select1">
                                            <option value="1">Cox's Bazar</option>
                                            <option value="2">Bandarban</option>
                                            <option value="3">Shitakundhu</option>
                                            <option value="4">Jaflong</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" id="message" cols="" rows=""
                                            class="bg-transparent form-control text-white"
                                            placeholder="Message"></textarea>
                                        <label for="message"></label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button id="bookNowBtn" class="btn btn-outline-danger w-100 py-3" type="submit">Book
                                        Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- booking design end  -->



    <!-- footer design starts  -->

    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel arcu sed lorem fermentum
                        tristique. Integer tincidunt sapien quis massa ultrices dignissim.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#destination">Destinations</a></li>
                        <li><a href="#package">Packages</a></li>
                        <li><a href="#service">Our Services</a></li>
                    </ul>
                </div>
                <div id="contact" class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Daffodil Smart City</p>
                    <p>Email: tushar15-3549@diu.edu.bd</p>
                    <p>CEO and Founder: Md Tushar Ahmed</p>
                    <p>Cell: +1234567890</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-center">
                    <p>&copy; 2023 Travel BD. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>





    <!-- footer design ends  -->










    <!-- bootstrap4 cdn for js, jQuery, popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- bootstrap3 cdn for js,jQuery, popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- javascript file -->
    <script src="script.js"></script>

</body>

</html>
