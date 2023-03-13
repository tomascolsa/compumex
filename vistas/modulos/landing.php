<div class="loader_bg">
  <div class="loader"><img src="vistas/dist/img/landing/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<div class="header">
  <div class="container">
    <div class="row d_flex">
      <div class=" col-md-2 col-sm-3 col logo_section">
        <div class="full">
          <div class="center-desk">
            <div class="logo">
              <a href="index.html"><img src="vistas/dist/img/landing/logo.png" alt="#" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <nav class="navigation navbar navbar-expand-md navbar-dark ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hosting.html">Hosting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="domain.html">Domain</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-md-2  d_none">
        <ul class="email text_align_right">
          <li><a href="Javascript:void(0)"> <i class="fa fa-shopping-bag" aria-hidden="true"> <span>0</span></i>
            </a>
          </li>
          <li>
            <a href="login">Sign In
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- end header inner -->
<!-- top -->
<div class="full_bg">
  <div class="slider_main">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="dream">
            <h1>
              PowerFul <br>HOSTING <br>Your dream <br>website
            </h1>
            <a class="read_more" href="Javascript:void(0)">Get Stared</a>
            <a class="read_more" href="Javascript:void(0)">Contact Us</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="dream_img">
            <figure><img src="vistas/dist/img/landing/dream_img.png" alt="#" /></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->
<!-- domain -->
<div class="domain">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage text_align_center">
          <h2>all starts with <span class="blue_light">a domain</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="form">
          <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search Domain">
            <a href="#" class="search_icon"><i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-10 offset-md-1">
        <div class="domain_bg">
          <div class="row">
            <div class="col-sm-2">
              <div class="domain-price">
                <strong>Domain <br> Per Year</strong>
              </div>
            </div>
            <div class="col-sm-10">
              <div class="domain-price_main ">
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
                <div class="domain-price">
                  <span>com.</span>
                  <strong>$22.999</strong>
                </div>
              </div>
            </div>
          </div>
          <a class="read_more" href="domain.html">See More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end domain -->
<!-- guarantee -->
<div class="guarantee">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <section class="content">

          <div class="box">

            <div class="box-body">

              <table class="table table-bordered table-striped dt-responsive tablaProductos table-responsive" width="100%">

                <thead>

                  <tr>

                    <th style="width:10px">#</th>
                    <th>Descripción</th>
                    <th>Código</th>
                    <th>Almacen</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Estetica de Producto</th>
                    <th>Procesador</th>
                    <th>Precio Remate</th>
                    <th>Precio Mayoreo</th>
                    <th>Precio de venta</th>
                    <th>Producto Agregado</th>
                    <th>Imagen</th>

                  </tr>

                </thead>

                <tbody>

                  <?php

                  $item = null;
                  $valor = null;
                  $contador = 0;

                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, 'id');

                  foreach ($productos as $key => $value) {

                    echo ' <tr>

                    <td>' . ($key + 1) . '</td>

                    <td class="text-uppercase">' . $value["descripcion"] . '</td>
                    <td class="text-uppercase">' . $value["codigo"] . '</td>';


                    $itemAlmacen = "id";
                    $valorAlmacen = $value["id_almacen"];

                    if (!$value["id_almacen"]) {

                      echo '<td class="text-uppercase">Sin Almacen</td>';
                    } else {

                      $respuestaAlmacen = ControladorAlmacen::ctrMostrarAlmacen($itemAlmacen, $valorAlmacen);
                      echo '<td class="text-uppercase">' . $respuestaAlmacen["almacen"] . '</td>';
                    }


                    $itemCategoria = "id";
                    $valorCategoria = $value["id_categoria"];

                    if (!$value["id_categoria"]) {

                      echo '<td class="text-uppercase">Sin Categoria</td>';
                    } else {

                      $respuestaCategoria = ControladorCategorias::ctrMostrarCategorias($itemCategoria, $valorCategoria);
                      echo '<td class="text-uppercase">' . $respuestaCategoria["categoria"] . '</td>';
                    }

                    echo '
                    <td class="text-uppercase">' . $value["stock"] . '</td>
                    <td class="text-uppercase">' . $value["estetica"] . '</td>
                    <td class="text-uppercase">' . $value["cpug"] . '</td>
                    <td class="text-uppercase">' . $value["precio_remate"] . '</td>
                    <td class="text-uppercase">' . $value["precio_mayoreo"] . '</td>
                    <td class="text-uppercase">' . $value["precio_venta"] . '</td>
                    <td class="text-uppercase">' . $value["fecha"] . '</td>
                    <td class="text-uppercase">
                    <img src="' . $value["imagen"] . '" width="40px">
                    </td>
                    ';

                    echo '</tr>';

                    if ($contador > 3) {
                      break;
                    }

                    $contador++;
                  }

                  ?>

                </tbody>

              </table>


            </div>

          </div>

        </section>

      </div>
    </div>
  </div>
</div>
<!-- end guarantee -->
<!-- order -->
<div class="order">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="titlepage text_align_center">
          <h2>Check Out Awesome Plans, <br> <span class="blue_light">Order Now</span></h2>
          <p>dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum."
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div id="ho_co" class="order-box_main">
          <div class="order-box text_align_center">
            <h3>Shared Hosting</h3>
            <p>STARTING <span>$9</span> PER MONTH</p>
            <a href="Javascript:void(0)">Personal use</a>
            <ul class="supp">
              <li>Unlimited projects</li>
              <li>24/7 support</li>
              <li>Personal use</li>
              <li>Unlimited projects</li>
              <li>24/7 support</li>
            </ul>
          </div>
          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div id="ho_co" class="order-box_main">
          <div class="order-box text_align_center">
            <h3>Reseller Hosting</h3>
            <p>STARTING <span>$9</span> PER MONTH</p>
            <a href="Javascript:void(0)">Personal use</a>
            <ul class="supp">
              <li>Unlimited projects</li>
              <li>24/7 support</li>
              <li>Personal use</li>
              <li>Unlimited projects</li>
              <li>24/7 support</li>
            </ul>
          </div>
          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div id="ho_co" class="order-box_main">
          <div class="order-box text_align_center">
            <h3>Dedicated Servers</h3>
            <p>STARTING <span>$9</span> PER MONTH</p>
            <a href="Javascript:void(0)">Personal use</a>
            <ul class="supp">
              <li>Unlimited projects</li>
              <li>24/7 support</li>
              <li>Personal use</li>
              <li>Unlimited projects</li>
              <li>24/7 support</li>
            </ul>
          </div>
          <a class="read_more" href="Javascript:void(0)">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end order -->
<!-- about -->
<div class="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage text_align_center">
          <h2>About <span class="blue_light">Comapny</span></h2>
        </div>
      </div>
      <div class="col-md-10 offset-md-1">
        <div class="about_img text_align_center">
          <figure><img src="vistas/dist/img/landing/about.png" alt="#" /></figure>
          <p>
            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now
          </p>
          <a class="read_more" href="Javascript:void(0)">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end about -->
<!-- contact -->
<div class="contact">
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <div class="titlepage text_align_center">
          <h2>Contact <span class="blue_light">Us</span></h2>
        </div>
      </div>
      <div class="col-md-10 offset-md-1">
        <form id="request" class="main_form">
          <div class="row">
            <div class="col-md-12 ">
              <input class="contactus" placeholder="Name" type="type" name=" Name">
            </div>
            <div class="col-md-12">
              <input class="contactus" placeholder="Phone number" type="type" name="Phone Number">
            </div>
            <div class="col-md-12">
              <input class="contactus" placeholder="Your Email" type="type" name="Email">
            </div>
            <div class="col-md-12">
              <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
            </div>
            <div class="col-md-12">
              <button class="send_btn">Submit Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- contact -->
<!--  footer -->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="infoma text_align_left">
            <h3>Choose.</h3>
            <ul class="commodo">
              <li>Commodo</li>
              <li>consequat. Duis a</li>
              <li>ute irure dolor</li>
              <li>in reprehenderit </li>
              <li>in voluptate </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="infoma">
            <h3>Get Support.</h3>
            <ul class="conta">
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>Address : Loram Ipusm
              </li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>Call : +01 1234567890</li>
              <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> Email : demo@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="infoma">
            <h3>Company.</h3>
            <ul class="menu_footer">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About </a></li>
              <li><a href="domain.html">Domain</a></li>
              <li><a href="hosting.html">Hosting</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="infoma text_align_left">
            <h3>Services.</h3>
            <ul class="commodo">
              <li>Commodo</li>
              <li>consequat. Duis a</li>
              <li>ute irure dolor</li>
              <li>in reprehenderit </li>
              <li>in voluptate </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>© 2020 All Rights Reserved. <a href="https://html.design/"> Free html Templates</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>