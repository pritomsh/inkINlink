<!DOCTYPE html>

<!-- Sunit Corneleous-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INK Ink Link</title>

    <!-- bootstrap 4 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>

<body>


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/inkINlink/inkINlink.php">INK In Link</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/inkINlink/inkINlink.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="LogInUser/logInForm.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/inkINlink/RegistrationForm/index.php">Registration </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catagories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- HERO Section -->

    <section class="hero py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-post shadow">
                        <img class="img-fluid" src="images/1.jpg" alt="">
                        <div class="hero-post-badges">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            <a href="#">26, February 2021</a>
                            <a href="#">Technology</a>
                        </div>
                        <div class="hero-post-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid rounded-circle" src="images/author.jpg" alt="Writter">
                                </div>
                                <div class="col-md-9">
                                    <h2>Perseverance Rover on Mars</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-post shadow">
                        <img class="img-fluid" src="images/2.jpg" alt="">
                        <div class="hero-post-badges">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            <a href="#">26, February 2021</a>
                            <a href="#">Technology</a>
                        </div>
                        <div class="hero-post-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid rounded-circle" src="images/author.jpg" alt="Writter">
                                </div>
                                <div class="col-md-9">
                                    <h3>Cyber Security</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-post shadow">
                        <img class="img-fluid" src="images/3.jpeg" alt="">
                        <div class="hero-post-badges">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            <a href="#">26, February 2021</a>
                            <a href="#">Technology</a>
                        </div>
                        <div class="hero-post-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="img-fluid rounded-circle" src="images/author.jpg" alt="Writter">
                                </div>
                                <div class="col-md-9">
                                    <h3>Artificial Intelligence</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <div class="container">
        <section class="blog-posts py-4">
            <div class="row">
                <div class="col-md-8">
                    <article class="blog-post mb-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid" src="images/covid-19.jpg" alt="">
                            </div>
                            <div class="col-sm-9">
                                <h3>Covid-19</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus nibh, lacinia in magna eu,
                                    bibendum convallis nunc. Fusce ornare ultricies urna. In hac habitasse platea dictumst. Ut purus
                                    tellus, maximus sed laoreet eget, pharetra non quam. Vivamus orci ante, scelerisque congue urna quis,
                                    vehicula pulvinar est.</p>
                                <div class="badge">
                                    <a href="#">Medical</a>
                                    <a href="#">global</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="blog-post mb-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid" src="images/covid-19.jpg" alt="">
                            </div>
                            <div class="col-sm-9">
                                <h3>Covid-19</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus nibh, lacinia in magna eu,
                                    bibendum convallis nunc. Fusce ornare ultricies urna. In hac habitasse platea dictumst. Ut purus
                                    tellus, maximus sed laoreet eget, pharetra non quam. Vivamus orci ante, scelerisque congue urna quis,
                                    vehicula pulvinar est.</p>
                                <div class="badge">
                                    <a href="#">Medical</a>
                                    <a href="#">global</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="blog-post mb-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid" src="images/covid-19.jpg" alt="">
                            </div>
                            <div class="col-sm-9">
                                <h3>Covid-19</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus nibh, lacinia in magna eu,
                                    bibendum convallis nunc. Fusce ornare ultricies urna. In hac habitasse platea dictumst. Ut purus
                                    tellus, maximus sed laoreet eget, pharetra non quam. Vivamus orci ante, scelerisque congue urna quis,
                                    vehicula pulvinar est.</p>
                                <div class="badge">
                                    <a href="#">Medical</a>
                                    <a href="#">global</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="blog-post mb-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid" src="images/covid-19.jpg" alt="">
                            </div>
                            <div class="col-sm-9">
                                <h3>Covid-19</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus nibh, lacinia in magna eu,
                                    bibendum convallis nunc. Fusce ornare ultricies urna. In hac habitasse platea dictumst. Ut purus
                                    tellus, maximus sed laoreet eget, pharetra non quam. Vivamus orci ante, scelerisque congue urna quis,
                                    vehicula pulvinar est.</p>
                                <div class="badge">
                                    <a href="#">Medical</a>
                                    <a href="#">global</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <aside class="col-md-4">
                    <!-- Social links -->
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <a class="social-link py-4 w-100">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="social-link py-4 w-100">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="social-link py-4 w-100">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <h4 class="aside-heading mt-4">Popular Authors</h4>
                    <article class="row author mb-3">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded-circle" src="images/author.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="m-0">Jake peralta</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="social-link">
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="row author mb-3">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded-circle" src="images/author.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="m-0">Jake peralta</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="social-link">
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="row author mb-3">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded-circle" src="images/author.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="m-0">Jake peralta</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="social-link">
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="row author mb-3">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded-circle" src="images/author.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="m-0">Jake peralta</h5>
                            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="social-link">
                                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </article>
                    <h4 class="aside-heading mt-4">Popular Catagories</h4>
                    <div class="badge w-100">
                        <p class="badge-link">
                            <a href="#">Technology</a>
                        </p>
                        <p class="badge-link">
                            <a href="#">Medical</a>
                        </p>
                        <p class="badge-link">
                            <a href="#">Global</a>
                        </p>
                        <p class="badge-link">
                            <a href="#">Covid-19</a>
                        </p>
                        <p class="badge-link">
                            <a href="#">Sports</a>
                        </p>
                    </div>
                </aside>
            </div>
        </section>

    </div>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="footer-logo" href="">INK in Link</a>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae suscipit deserunt autem veritatis!</p>
                </div>
                <div class="col-md-4">
                    <h4>Usefull Links</h4>
                    <ul>
                        <li>Home</li>
                        <li>Terms of services</li>
                        <li>Privacy Policy</li>
                        <li>Contact Us</li>
                        <li>About Us</li>

                    </ul>
                </div>
                <div class="col-md-4 shadow">

                </div>
            </div>
            <div class="w-100 text-center credits">
                <p>Made by Team EDITH &copy; 2021</p>
            </div>
        </div>
    </footer>

    <!-- bootstrap js, jquery, popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
