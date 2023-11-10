<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MiTiend@</title>
    <link rel="icon" href="public/img/iconpng.png" />
    <link rel="stylesheet" href="public/css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid p-0">
          <a class="navbar-brand m-2 active" href="#">MiTiend@</a>
          <button
            class="navbar-toggler me-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
              <li class="nav-item ms-2">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="public/views/ofertas.php"
                  >Ofertas</a
                >
              </li>
              <li class="nav-item ms-2 dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Zapatillas</a></li>
                  <li>
                    <a class="dropdown-item" href="public/views/hombre.php"
                      >Ropa de Hombre</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="public/views/mujer.php"
                      >Ropa de Mujer</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider item-disabled" />
                  </li>
                  <li>
                    <a class="dropdown-item item-disabled" href="#"
                      >Lo más vendido</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item ms-2">
                <a class="nav-link" href="public/views/quienessomos.php"
                  >Quiénes Somos</a
                >
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control ms-2 me-3 mb-2"
                type="search"
                placeholder="Buscar"
                aria-label="Search"
              />
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!-- PORTADA -->
    <div class="portada">
      <article class="portada-item img1"></article>
      <article class="portada-item img2"></article>
      <article class="portada-item img3"></article>
      <div class="container-button">
        <button class="button"><a href="public/views/mujer.php">Invierno 2023</a></button>
      </div>
    </div>

    <!-- MAIN -->
    <main>
      <section class="section">
        <article class="section-article img4"></article>

        <article
          class="section-article d-flex flex-column justify-content-around align-items-center"
        >
          <h2 class="section-title">Lo último en moda</h2>
          <p class="section-content">
            Explorá nuestras colecciones únicas y encontrá la moda que refleje
            tu personalidad. ¡Sumale accesorios a tu vida!
          </p>
          <div>
            <button class="button"><a href="public/views/hombre.php">Ver Coleccion</a></button>
          </div>
        </article>
      </section>

      <section class="section">
        <article
          class="section-article d-flex flex-column justify-content-around align-items-center"
        >
          <h2 class="section-title">Elegí tu estilo</h2>
          <p class="section-content">
            ¡Sumale onda a tus pasos! Encontrá tus zapas ideales y marcá tu
            propio ritmo a cada paso.
          </p>
          <div>
            <button class="button"><a href="#">Ver Coleccion</a></button>
          </div>
        </article>

        <article class="section-article flex2">
          <div class="container-zapa">
            <div class="img-zapatillas img5"></div>
            <div class="img-zapatillas img6"></div>
            <div class="img-zapatillas img7"></div>
            <div class="img-zapatillas img8"></div>
          </div>
        </article>
      </section>
    </main>

    <!-- ICONOS -->
    <div class="info">
      <article class="info-icon">
        <div class="icon-img icon1"></div>
        <div class="icon-text">Envio Seguro</div>
      </article>

      <article class="info-icon">
        <div class="icon-img icon2"></div>
        <div class="icon-text">Asistencia Personalizada</div>
      </article>

      <article class="info-icon">
        <div class="icon-img icon3"></div>
        <div class="icon-text">Todas las tarjetas</div>
      </article>

      <article class="info-icon">
        <a href="public/views/ofertas.php" class="icon-img icon4"></a>
        <div class="icon-text">¡Ofertas todos los dias!</div>
      </article>
    </div>

    <!-- FOOTER -->
    <footer class="footer d-flex flex-column">
      <hr class="m-0" />
      <div class="footer-content d-flex flex-row justify-content-center">
        <a
          href="public/views/quienessomos.php#contacto"
          class="footer-item p-3 pb-0"
          >Contacto</a
        >
        <a href="#" class="footer-item p-3 pb-0">Privacidad</a>
        <a href="#" class="footer-item p-3 pb-0">Terminos y Condiciones</a>
      </div>

      <div class="footer-content">
        <p class="footer-item p-2 m-0">
          &copyMiTiend@ por Christian Bonilla - Potrero Digital 2023
        </p>
        <p class="footer-item">
          Iconos por
          <a href="https://www.flaticon.es/autores/icongeek26" target="_blank">Icongeek26</a>
        </p>
      </div>
    </footer>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
