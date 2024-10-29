<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta dall'Italia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>


    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pasta dall'Italia - Restaurante Italiano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu Principal</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Catálogo</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mais
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="pages/cadastro.php" target="_blank">Login</a></li>
                                <li><a class="dropdown-item" href="pages/cadastro.php">Cadastre-se</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="" target="_blank">Contato - iFood</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="What are you searching for...?" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <header data-aos="fade-down" data-aos-duration="1500">
        <h1>Pasta dall'Italia</h1>
        <p>Seu restaurante Italiano!</p>
    </header>

    <section>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/GettyImages-176597247.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Promoção de Inauguração</h5>
                  <p>Saboreie nossos pratos com 50% do preço.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <div class="background-type">
        <div class="container">
                <div class="row">
                <h2>Cárdápio</h2>
                <p>Nosso cardápio é atualizado diariamente. Confira as principais novidades aqui!</p>
                <article class="col-12 col-sm-6 col-md-4 col-lg-3 p-3" >
                    <div class="card" style="height: 392.71px;" data-aos="zoom-in">
                        <img src="img/cotoletta-alla-milanese-1.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Novidade: Cotoletta alla Milanese</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Confira!</a>
                        </div>
                      </div>
                </article>

                <article class="col-12 col-sm-6 col-md-4 col-lg-3 p-3" >
                    <div class="card" style="height: 392.71px;" data-aos="zoom-in">
                        <img src="img/Ravioli-53.jpg" class="card-img-top" alt="..." style="height: 174.41px;">
                        <div class="card-body">
                          <h5 class="card-title">Ravioli ao Molho branco</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, neque. <br>
                          </p>
                          <a href="#" class="btn btn-primary">Confira!</a>
                        </div>
                      </div>
                </article>

                <article class="col-12 col-sm-6 col-md-4 col-lg-3 p-3" >
                    <div class="card" style="height: 392.71px;" data-aos="zoom-in">
                        <img src="img/comidas-tipicas-da-italia-824x420.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Semna da Massa Italiana: Lasagna</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt consequatur culpa atque totam quasi deleniti.</p>
                          <a href="#" class="btn btn-primary">Confira!</a>
                        </div>
                      </div>
                </article>

                <article class="col-12 col-sm-6 col-md-4 col-lg-3 p-3" >
                    <div class="card" style="height: 392.71px;" data-aos="zoom-in">
                        <img src="img/arancini.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Arancini</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Confira!</a>
                        </div>
                      </div>
                </article>

            </div>
        </div>

        <div class="container">
          <div class="row">
            <h2>Receita do Chef</h2>
            <p>Confira algumas receitas inspiradoras que você pode fazer em casa!</p>
            <!-- <div>
                <div class="card" style="height: 392.71px; width:900.71px;" data-aos="zoom-in">
                    <img src="img/carbonaro.jpg" style="max-width: 400px; max-height: 400px;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Receita: Pasta Carbonara</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, neque. <br>
                          </p> -->
                          <div class="card mb-3">
                            <div class="row g-0">
                              <div class="col-md-6">
                                <img
                                  src="img/carbonaro.jpg"
                                  
                                  alt="..."
                                  style="max-height: 350px; width:400px;"
                                />
                              </div>
                              <div class="col-md-6">
                                <div class="card-body">
                                  <h5 class="card-title" style="font-size: 25px; font-weight: bold">
                                    Receita: Pasta Carbonara
                                  </h5>
                                  <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus
                                    ipsam quibusdam ipsum delectus est consequuntur dolorum error
                                    assumenda distinctio, eligendi, velit nihil doloremque fugit ab.
                                    Aperiam repudiandae minus aspernatur quidem debitis, velit
                                    assumenda, officiis consequuntur impedit dolorum vitae voluptas
                                    qui nemo? Quaerat explicabo sed, dolor deserunt incidunt dolorum
                                    asperiores dicta, velit soluta aperiam beatae eaque illum.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
        </div>
      </div>


    </section>

    <footer style="display: flex;">
        <p style=" align-content: center;">&copy; 2024. All rights reserved to "Pasta dall'Italia" enterprise. Powered by Aster0id.</p>
    </footer>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</html>