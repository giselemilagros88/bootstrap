<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Bootstrap</title>
  </head>
  <body>
      <header>
        <!-- nav -->
        <div class="container-fluid">
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark text-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img  class ="w-50"src="https://picsum.photos/200" alt="imagen_1"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                
                  <button class="btn btn-outline-secondary" type="submit">buscar</button>
                </form>
              </div>
            </div>
          </nav>
          </div>
           <!--  fin nav -->
      </header>

      <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img_1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img_2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img_3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>

      <div class="container-fluid">
        <div class="card-group w-75 mx-auto">
            <div class="card p-2 m-2 shadow-lg p-2 mb-5 bg-body rounded"> 
              <img src="ada.jpeg" class="card-img-top foto" alt="...">
              <div class="card-body">
                <h5 class="card-title">ADA</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card p-2 m-2 shadow-lg p-2 mb-5 bg-body rounded">
              <img src="billgates2.jpg" class="card-img-top foto" alt="...">
              <div class="card-body">
                <h5 class="card-title">Bill Gate</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card p-2 m-2 shadow-lg p-2 mb-5 bg-body rounded">
              <img src="steve_2.jpg" class="card-img-top foto" alt="...">
              <div class="card-body">
                <h5 class="card-title">Steve Jobs</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
      </div>

    </div>

    <section class="container-fluid section mt-2 mb-2">

        <div class="row h-100">
            <div class="col-6 div-der">
                
            </div>
            <div class="bg-dark text-light col-6 div-izq">
                <h2 class="mt-2 mb-5">Contenido</h2>
                <p class="mb-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero, accusantium cupiditate tempore deleniti quia quae placeat id inventore dicta sint omnis pariatur quas deserunt! Fuga sed corporis natus delectus. </p>
                <button class="btn btn-outline-secondary" type="submit">Mas Info</button>
            </div>
        </div>
        <!--   otra manera de hacerlo 
        <div class="container-fluid h-100 d-flex">
            <div class="div-der w-50">
              
            </div>
            <div class="div-izq w-50 bg-dark text-light p-4">
                 <h2 class="mt-2 mb-5">Contenido</h2>
                 <p class="mb-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero, accusantium cupiditate tempore deleniti quia quae placeat id inventore dicta sint omnis pariatur quas deserunt! Fuga sed corporis natus delectus. </p>
                 <button class="btn btn-outline-secondary mt-5" type="submit">Mas Info</button>
            </div>

        </div>

       -->
    </section>
    <footer class="bg-dark p-5">
        <div class="container-fluid bg-dark text-light">
            <div class="row">
                <div class="col-2"> 
                   <a href="#">Inicio</a> 
                </div>
                <div class="col-2"> 
                    Quienes Somos
                </div>
                <div class="col-2"> 
                    Galeria
                </div>
                <div class="col-2"> 
                    Redes Sociales
                </div>
                <div class="col-2"> 
                    M??s sobre Nosotros
                </div>
                <div class="col-2"> 
                    Contacto
                </div>
            </div>

        </div>
    </footer>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
