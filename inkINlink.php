<!DOCTYPE html>

<!-- Sunit Corneleous-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INK Ink Link</title>

    <!-- bootstrap 4 cdn -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>


    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">INK In Link</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="LogInUser/logInForm.php">Log In</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/inkINlink/RegistrationForm/index.php">Registration </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Trends</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Catagories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Technology</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">World</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sports</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control border-0 rounded-0"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button
              class="btn-main btn btn-success ml-3 my-sm-0 rounded-0"
              type="submit"
            >
              Search
            </button>
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

    <section class="blog-posts py-4">
      <div class="container contents-blogs">
        <div class="row">
          <div class="col-md-8">
            <article class="blog-post mb-3 shadow">
              <div class="row">
                <div class="col-sm-4">
                  <img class="img-fluid" src="images/covid-19.jpg" alt="" />
                </div>
                <div class="col-sm-8">
                  <a href="/blogs.html" class="blog-title">Asus Zenfone 8 will become official on May 12</a>
                  <p class="m-0">
                    Asus has announced when it's going to make the Zenfone 8 family of smartphones official. The unveiling event will take place on May 12 at 1 PM Eastern / 7 PM CET. We are thus less than 19 days away from that point, as the counter on the special event website helpfully informs us, with a handy countdown that perhaps unnecessarily includes seconds.
                  </p>
                  <div class="badge">
                    <a href="#">Medical</a>
                    <a href="#">global</a>
                  </div>
                </div>
              </div>
            </article>
            <article class="blog-post mb-3 shadow">
                <div class="row">
                  <div class="col-sm-4">
                    <img class="img-fluid" src="images/covid-19.jpg" alt="" />
                  </div>
                  <div class="col-sm-8">
                    <a href="/blogs.html" class="blog-title">Covid-19</a>
                    <p class="m-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Aliquam risus nibh, lacinia in magna eu, bibendum convallis
                      nunc. Fusce ornare ultricies urna. In hac habitasse platea
                      dictumst. Ut purus tellus.
                    </p>
                    <div class="badge">
                      <a href="#">Medical</a>
                      <a href="#">global</a>
                    </div>
                  </div>
                </div>
              </article>
              <article class="blog-post mb-3 shadow">
                <div class="row">
                  <div class="col-sm-4">
                    <img class="img-fluid" src="images/covid-19.jpg" alt="" />
                  </div>
                  <div class="col-sm-8">
                    <a href="/blogs.html" class="blog-title">Covid-19</a>
                    <p class="m-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Aliquam risus nibh, lacinia in magna eu, bibendum convallis
                      nunc. Fusce ornare ultricies urna. In hac habitasse platea
                      dictumst. Ut purus tellus.
                    </p>
                    <div class="badge">
                      <a href="#">Medical</a>
                      <a href="#">global</a>
                    </div>
                  </div>
                </div>
              </article>
              <article class="blog-post mb-3 shadow">
                <div class="row">
                  <div class="col-sm-4">
                    <img class="img-fluid" src="images/covid-19.jpg" alt="" />
                  </div>
                  <div class="col-sm-8">
                    <a href="/blogs.html" class="blog-title">Covid-19</a>
                    <p class="m-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Aliquam risus nibh, lacinia in magna eu, bibendum convallis
                      nunc. Fusce ornare ultricies urna. In hac habitasse platea
                      dictumst. Ut purus tellus.
                    </p>
                    <div class="badge">
                      <a href="#">Medical</a>
                      <a href="#">global</a>
                    </div>
                  </div>
                </div>
              </article>
              <article class="blog-post mb-3 shadow">
                <div class="row">
                  <div class="col-sm-4">
                    <img class="img-fluid" src="images/covid-19.jpg" alt="" />
                  </div>
                  <div class="col-sm-8">
                    <a href="/blogs.html" class="blog-title">Covid-19</a>
                    <p class="m-0">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Aliquam risus nibh, lacinia in magna eu, bibendum convallis
                      nunc. Fusce ornare ultricies urna. In hac habitasse platea
                      dictumst. Ut purus tellus.
                    </p>
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
            <div class="social-links row text-center">
              <div class="col-sm-4 py-5">
                <a class="social-link w-100">
                  <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-sm-4 py-5 second">
                <a class="social-link w-100">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-sm-4 py-5">
                <a class="social-link w-100">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <h4 class="aside-heading mt-4 mb-3 pl-3">Popular Authors</h4>
            <article class="row author mb-3">
              <div class="col-sm-4">
                <img
                  class="img-fluid rounded-circle"
                  src="images/author.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-8">
                <h5 class="m-0">Jake peralta</h5>
                <p class="m-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="social-link">
                  <a href="#"
                    ><i class="fa fa-facebook-official" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-youtube-play" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </article>
            <article class="row author mb-3">
              <div class="col-sm-4">
                <img
                  class="img-fluid rounded-circle"
                  src="images/author.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-8">
                <h5 class="m-0">Jake peralta</h5>
                <p class="m-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="social-link">
                  <a href="#"
                    ><i class="fa fa-facebook-official" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-youtube-play" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </article>
            <article class="row author mb-3">
              <div class="col-sm-4">
                <img
                  class="img-fluid rounded-circle"
                  src="images/author.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-8">
                <h5 class="m-0">Jake peralta</h5>
                <p class="m-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="social-link">
                  <a href="#"
                    ><i class="fa fa-facebook-official" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-youtube-play" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </article>
            <article class="row author mb-3">
              <div class="col-sm-4">
                <img
                  class="img-fluid rounded-circle"
                  src="images/author.jpg"
                  alt=""
                />
              </div>
              <div class="col-sm-8">
                <h5 class="m-0">Jake peralta</h5>
                <p class="m-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="social-link">
                  <a href="#"
                    ><i class="fa fa-facebook-official" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-youtube-play" aria-hidden="true"></i
                  ></a>
                </div>
              </div>
            </article>
            <h4 class="aside-heading mt-4 pl-3">Popular Catagories</h4>
            <div class="badges w-100">
                <a href="#">Technology</a>
                <a href="#">Global</a>
                <a href="#">Medical</a>
                <a href="#">Daily life</a>
                <a href="#">National</a>
                <a href="#">Weather</a>
                <a href="#">Sports</a>
                <a href="#">Education</a>
                <a href="#">Business</a>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- Footer Section -->
  <footer class="footer py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <a class="footer-logo" href="">INK in Link</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius animi commodi quaerat. Quidem dolore odit consequatur unde asperiores libero laudantium? Similique eveniet reiciendis necessitatibus saepe numquam quasi expedita eius dolore?
            </p>
          </div>
          <div class="col-md-3">
            <h4>Usefull Links</h4>
            <ul>
              <li>Home</li>
              <li>Terms of services</li>
              <li>Privacy Policy</li>
              <li>Contact Us</li>
              <li>About Us</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Give Us Feedback</h4>
            <a class="feedback-button" href="feedback/index.html">Give Feedback</a>
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
