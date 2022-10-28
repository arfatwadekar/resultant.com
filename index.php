<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Home Page!</title>
</head>

<body>

    <!-- navbar -->
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./images/logo.png" width="200rem" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-3">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                    </ul>
                    <!-- <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul> -->
                </div>
            </div>
        </nav>

        <!-- slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/banner.jpg" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <!-- courses section -->
    <main id="courses" class="courses p-3 mt-5 mb-5">
        <div class="container">
            <!-- section header -->
            <h2 class="h2-responsive fw-bold text-center my-2">
                Our
                <span class="head">Courses</span>
            </h2>
            <hr class="w-25 m-auto">

            <div class="headline text-center pt-4">
                <span class="fs-5">Private, Group, Special, Batches & Crash Courses</span>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title fs-4 ">Computer/IT</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFOJtQuaJ8IhkIstx4F3Xf0LYMVqkqIUepFg&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title fs-4">Mechanical</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjAZKOpz6m-_nxrxtjmQ6BY1sQpU0rpO5CqQ&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">CIVIL ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwz4XRsIL1rUHF7zHBvPOnmh7QicjwxRolm2q_dKfh7BffyUfzQeFnBPnQc4q1OcO2qIs&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ELECTRONIC & TELECOM</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ELECTRICAL ENGG</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlY_EypdVTG5nFfbyo7ermhi4S8ErYqRSZKQ&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">Mechatrronics ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">ARITIFICIAL INTELLIGENCE ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">MACHINE LEARNING ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div class="card box">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- <i class="fa fa-code bg-primary p-2 text-white rounded mb-2"></i> -->
                            <h5 class="card-title ">AUTOMATION & ROBOTIC'S ENGG.</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="" class="btn btn-primary px-2 pl-2">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- about section -->
    <main id="about">
        <div class="about bg-light p-3 mt-5 mb-5">
            <div class="container">
                <!-- section head -->
                <h2 class="h2-responsive  fw-bold text-center my-2">
                    About
                    <span class="head">Us</span>
                </h2>
                <hr class="w-25 m-auto">
                <!-- <p class="text-center w-responsive mx-auto mb-1 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Odit ea ipsam minima similique adipisci quis quos minus commodi omnis reiciendis.</p> -->
                <!-- section head end -->

                <div class="row mt-5">
                    <!-- <div class="col-md-6 align-item-strech">
                        <img src="./images/about_us.jpg" class="img-fluid text-center" alt="">
                    </div> -->

                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto  align-item-strech">
                        <img src="./images/about_us.jpg" class="img-fluid img-thumbnail my-2" width="100%" alt="">
                    </div>

                    <div class="col-md-6">
                        <h3 class="h2-responsive section_heading fw-bold text-start my-2">--- Resultant Accademy ---
                        </h3>
                        <!-- <hr class="w-30 m-auto">  -->
                        <p class="lh-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cumque
                            magni, voluptatum aliquam numquam ad expedita, sequi eaque quos excepturi, culpa aut fuga
                            quasi natus laudantium id corporis maiores. Voluptatem mollitia et, itaque, possimus
                            incidunt nesciunt unde nulla quidem ipsum, magni veritatis fugiat cum. Id omnis incidunt
                            deserunt velit eveniet.</p>
                        <a href="about.html" class="btn btn-primary px-2 pl-2">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- testimonial -->
    <main class="testimonial mt-5 mb-5" id="testimonial">
        <div class="container">
            <!-- section header -->
            <h2 class="h2-responsive fw-bold text-center my-2">
                Our
                <span class="head">Topper's</span>
            </h2>
            <hr class="w-25 m-auto">

            <div class="row mt-3">
                <!-- Carousel wrapper -->
                <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Maria Kate</h5>
                                    <p>Photographer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                        doloremque.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">John Doe</h5>
                                    <p>Web Developer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item">
                            <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Anna Deynah</h5>
                                    <p>UX Designer</p>
                                    <p class="text-muted">
                                        <i class="fas fa-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                        fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                        doloremque.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-2">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="far fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->
            </div>
        </div>
    </main>



    <!-- footer -->
    <main class="footer" id="footer">
        <!-- Footer -->
        <footer class="text-center  pt-3 text-lg-start bg-light text-muted">
            <!-- Section: Links  -->
            <section class="footer">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <img src="./images/logo.png" width="280rem" alt="">
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>

                            <p>
                                Office Number: 8169364389
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">
                                Products
                            </h6>
                            <hr class="w-35 m-auto mb-2">
                            <p>
                                <a href="index.php" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="about.php" class="text-reset">About</a>
                            </p>
                            <p>
                                <a href="courses.php" class="text-reset">Courses</a>
                            </p>
                            <p>
                                <a href="gallery.php" class="text-reset">Gallery</a>
                            </p>
                            <p>
                                <a href="contact.php" class="text-reset">Contact Us</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">
                                Contact Number
                            </h6>
                            <hr class="w-35 m-auto mb-2">
                            <p>
                                <a href="#!" class="text-reset">9619568502</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">9619468502</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">9619468502</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Adress</h6>
                            <hr class="w-28 m-auto mb-2">
                            <p><i class="fas fa-home me-3"></i>11/c-1 Kismat Colony, Building
                                Kismat Colony Near sagar Sweets, Mumbra Dist.Thane - 400612</p>
                            <p><i class="fas fa-envelope me-3"></i>resultantacademy@gmail.com</p>
                            <p><i class="fab fa-instagram me-3"></i>@resultantacademy</p>
                            <p><i class="fab fa-facebook-f me-3"></i>@resultantacademy</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://www.ignitech.in/">Arfat I Wadekar</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>