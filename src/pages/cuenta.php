<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
  // Si no hay sesión activa, redirige al usuario al formulario de login
   header("Location: contacto.html");
    exit();}
    $fecha_actual = date('d-M-Y');
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Banco nacional de mexico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <link rel="stylesheet" href="../../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/index.css" media="screen">
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180"> 
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
    
    <!-- Custom styles for this template --> 
    <!-- Custom styles for this template -->
    <link href="../../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- Biblioteca de iconos svg-->
  <svg class="d-none">
    <symbol id="usuario" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
    </symbol>
    <symbol id="balance" viewBox="0 0 16 16">
      <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z"/>
    </symbol> 
    <symbol id="EstadoCuenta" viewBox="0 0 16 16">
    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5m-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z"/>
    </symbol> 
    <symbol id="Movimientos" viewBox="0 0 16 16">
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </symbol>
    <symbol id="Send" viewBox="0 0 16 16">
      <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
      <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
    </symbol>
  </svg>

<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white">
    <svg class="bi"><use xlink:href='#usuario'/>
    </svg><span class="ms-2"> CARL ERNEST K..</span></a>
</header>
<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="list-unstyled ps-0 ms-2">
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed">
                <svg class="bi"><use xlink:href='#balance'/></svg>
                <span class="ms-2">Balance</span>
              </button>
              <div class="border-start">
                <ul class="btn-toggle-nav border-start text-end me-3 list-unstyled fw-normal pb-1 small">
                  <li>
                    <span class="mb-3 small fw-semibold text-success">+$2,590,254.01 MXN</span>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg class="bi"><use xlink:href='#EstadoCuenta'/></svg>
                <span class="ms-2" >Estado de cuenta</span>
              </button>
              <!-- Modal -->
<div class="modal dialog" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
  <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
</svg> <h1 class="ms-2 modal-title fs-5" id="exampleModalLabel">Estado de cuenta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form id="myForm"> 
      </div>
      <div class="modal-body">
        <label for="inputValue" class="mb-2">Para consultar su estado de cuenta confirme su contraseña</label>
          <input  id="inputValue" name="inputValue" type="password" class="form-control " placeholder="CONTRASEÑA">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" data-bs-dismiss="modal">Continuar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> 
      </div>
      </form>
      <script>
    // Aquí va el código JavaScript

    document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que se envíe el formulario

  var inputValue = document.getElementById('inputValue').value.trim(); // Obtener el valor del input y limpiar espacios al inicio y final
  document.getElementById('inputValue').value = '';         // Vaciar el input después de la validación


  // Comparar el valor del input y redirigir según el caso
  if (inputValue === '12345') {
    window.open('../files/BNM-KASTEN.pdf', '_blank')  // Redirigir a la página destino si el valor coincide
  } else {
    alert('La contraseña es incorrecta.'); // Mostrar un mensaje de alerta si el valor no coincide
  }
});
  </script>
    </div>
  </div>
</div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 " data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              <svg class="bi"><use xlink:href='#Movimientos'/></svg>
              <span class="ms-2">Movimientos</span>
              </button>
              <div class="  border-start" id="orders-collapse">
                <ul class="btn-toggle-nav border-start text-end me-3 list-unstyled fw-normal pb-1 small">
                  <li>
                    <span class="mb-3 small fw-semibold text-success">+$2,590,254.00 MXN</span>
                  </li>
                  <li>
                    <span class="mb-3 small fw-semibold text-success">+$.01 MXN</span>
                  </li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed "data-bs-toggle="modal" data-bs-target="#envioModal">
                <svg class="bi"><use xlink:href='#Send'/></svg>
                <span class="ms-2">Transferir</span>
              </button>
                <!-- Modal -->
<div class="modal dialog" id="envioModal" tabindex="-1" aria-labelledby="envioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <svg class="bi"><use xlink:href='#Send'/></svg>
        <h1 class="ms-2 modal-title fs-5" id="envioModalLabel">Transferir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Cuenta no activa!</h4>Parece que aún necesitamos activar su cuenta. Por favor, póngase en contacto con nuestro equipo de atención al cliente para que podamos ayudarlo rápidamente.
       
         
        </div>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- barra de titulo en el main-->
        <h3 class="text-light"> Bienvenido a su cuenta BNM. </h3>
        <button type="button" class="btn btn-light"><a href="../scripts/logout.php" class="text-black-50S">  Cerrar sessión 
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"></path>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
</svg> </a>
            
      </div>
      <div class="shadow p-3 mb-5 bg-white rounded">
      <table class="table table-hover table-sm">
  <thead>
    <legend class="h4 mb-3" >Movimientos</legend>
    <tr> 
      <th scope="col">Concepto</th>
      <th scope="col"># de cuenta</th>
      <th scope="col">balance</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha de transacción</th>
    </tr>
  </thead>
  <tbody>
    <tr> 
      <td class="text-uppercase">depósito</td>
      <td>#######8321</td>
      <td class="text-success">+$2,590,254.00 MXN</td>
      <th class="text-warning fw-semibold">En proceso</th>
      <th class="fw-lighter text-center">19/02/2024</th>
    </tr>
    <tr> 
      <td class="text-uppercase">Cuenta
      </td>
      <td>#######5010</td>
      <td class="text-success">+$.01 MXN</td>
      <td class="text-success fw-semibold">Completado</td>
      <th class="fw-lighter text-center">13/02/2024</th>
    </tr>
    <tr> 
      <td colspan="5" class="text-center text-body-secondary fs-6">Aun no se registran mas movimientos</td>
      
    </tr>
  </tbody>
</table>

      </div>
      
       <div class="bg-white p-3 rounded-1 ">
        <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
  Indicadores
</div>

        <div class="p-3 row">
          <div class="col">
            <div class="card shadow bg-body-tertiary rounded mb-3" style="max-width: 18rem;">
              <div class="card-body text-center">
                  <p class="lh-1"> inflación subyacente</p>
                  <p class="lh-1">4.17</p>
                  <p class="lh-1"><?php echo $fecha_actual;?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow bg-body-tertiary rounded mb-3" style="max-width: 18rem;">
              <div class="card-body text-center">
                <span>Tipo de <br>cambio FIX</span> 
                  <p class="lh-1">18.2215</p>
                  <p class="lh-1"><?php echo $fecha_actual;?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow bg-body-tertiary rounded mb-3" style="max-width: 18rem;">
              <div class="card-body text-center">
                <span>Tasa <br>Objetivo</span> 
                  <p class="lh-1">11.00</p>
                  <p class="lh-1"><?php echo $fecha_actual;?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow bg-body-tertiary rounded mb-3">
              <div class="card-body text-center">
                  <p class="lh-1"> inflación</p>
                  <p class="lh-1">4.78</p>
                  <p class="lh-1"><?php echo $fecha_actual;?></p>
              </div>
            </div>
          </div>

          <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger"></div>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>

<span class="h4">Tipo de cambio</span>
        </div>
         <div class="row p-3"> 
          <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="row " ng-app="">
              <div class="col-sm-2">
                <label class="form-label" for="cantidad">MONTO</label>
                <input id="cantidad control-form" class="mb-3 form-control" type="number" ng-model="n1" placeholder="0" value="0">
              </div>
              <div class="col-sm-3">
                <label class="form-label" for="monedaorg">De</label>
                <select class="form-select" aria-label="Default select example" disabled>
                  <option selected><img src ="mxn.svg">CAD - Dolar Canadiense</option>
                  </select>
              </div>
              <div class="col-sm-3">
                <label class="form-label" for="">A</label>
                <input class="mb-3 form-control" type="TEXT" value="MXN - PESOS MEXICANOS" readonly>
              </div>
              <div class="col-sm-3 ">
                <label class="form-label" for="">Conversión</label>
                <input class="mb-3 form-control" type="TEXT" value="${{n1*13.46}}" readonly>
              </div> 
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
 Los resutados de esta herramienta pueden no ser completamente exactos. Verifique los datos para garantizar una precision y experiencia óptima para usted.
  </div>
</div>
 
            

 

 
          </div>
        </div>
       </div> 
       <br>
    </main>
  </div>
 
</div>

<?php
$indice = '../../';
    //Mostrar el contenido del archivo footer.html
  include_once '../components/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
