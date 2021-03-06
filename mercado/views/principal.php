<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url?>assets/style_principal.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mi mercado</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Configuracion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url?>user/logout">Cerrar sesion</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="separador"></div>
    <div class="texto-separador">
      <p class="titulo_principal">Productos</p>
    </div>

    <div class="container-fluid row">
        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        <div class="venta col-sm-3">
          <div class="product-img"></div>
          <div class="product-name">Nombre Producto</div>
          <div class="product-desc">Vendedor y precio</div>
          <button type="submit" class="product-btn">
            <p>Comprar ahora</p>
          </button>
          <button type="submit" class="product-btn-carrito">
            <p>Agregar al carrito</p>
          </button>
        </div>

        

    </div>
  </body>
</html>
