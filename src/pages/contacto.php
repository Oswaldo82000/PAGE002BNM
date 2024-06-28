<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contactenos">
    <meta name="description" content="">
    <title>Contactenos</title>
    <link rel="stylesheet" href="../../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../assets/css/contacto.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../assets/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.13.4, nicepage.com">
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../../assets/img/banco-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="contacto">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
  <?php
    //idice de ruta
    $indice = '../../';
    //añade el contenido del archivo header con funcionalidad php
    include_once '../../src/components/header.php';?>
    <section class="u-clearfix u-grey-10 u-section-1" id="carousel_5c99">
      <img class="u-expanded-width u-image u-image-1" src="../../assets/img/mnmn-min.jpg" data-image-width="1920" data-image-height="730">
      <div class="u-clearfix u-gutter-16 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-radius-20 u-size-29 u-white u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-left u-custom-font u-font-montserrat u-text u-text-1">Contactenos</h2>
                <p class="u-text u-text-2">Contactenos ya se via telefonica o por correo y un representante lo apoyara.</p>
                <div class="u-border-2 u-border-grey-25 u-line u-line-horizontal u-line-1"></div>
                <div class="u-expanded-width u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                    <div class="u-align-left u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-1"><img src="../../assets/img/3179068.png" alt=""></span>
                        <h6 class="u-text u-text-3">Domicilio</h6>
                        <p class="u-text u-text-4"> Montecito 38, Nápoles, Benito Juárez, <br>03810 Ciudad de México, CDMX, México
                        </p>
                      </div>
                    </div>
                    <div class="u-align-left u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-text-palette-4-base u-icon-2"><img src="../../assets/img/ce131fa2-9b26-4c33-a9f7-aff3357242a7.png" alt=""></span>
                        <h6 class="u-text u-text-5">Telefono</h6>
                        <p class="u-text u-text-6">559-558-6222</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-custom-color-1 u-layout-cell u-radius-20 u-size-31 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-4">
                <h4 class="u-custom-font u-font-montserrat u-text u-text-7">Acceso Cuentahabiente</h4>
                <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-form u-form-1">

                  <form action="../scripts/login.php" method="post" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 0px;">
                    <div class="u-form-group u-form-name">
                      <label for="username" class="u-label">Nombre de Usuario:</label><br><br>
                      <input type="text"  id="username" name="username" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" required>
                    </div><br>
                    <div class="u-form-email u-form-group">
                      <label for="password" class="u-label">Contraseña:</label><br><br>
                      <input type="password" id="password" name="password" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-10 u-white" required>
                      
                      <?php
                      if(empty($_POST))echo "<br><br><br>";else{echo "<p>Contraseña incorrecta!<p><br><br> ";}
                      ?>

                    <div class="u-align-right u-form-group u-form-submit">
                      <input type="submit" class="u-active-palette-2-light-1 u-border-5 u-border-active-palette-2-light-1 u-border-hover-palette-2-light-1 u-border-palette-2-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-10 u-btn-1" value="Acceder">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php
    //Mostrar el contenido del archivo footer.html
    include_once '../components/footer.php';?>
</body></html>