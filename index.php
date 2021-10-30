<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Eletivas SC</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
      

  

     





</head>
<body>
  <nav class="#1b5e20 green darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="img/logo_menor.png">Eletivas SC</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a class="white-text" href="https://www.saude.sc.gov.br/">SES</a></li>

        <li><a href="http://administrador.eletivassc.com.br">Administrador</a></li>
        <li><a href="http://regulacao.eletivassc.com.br">Regulacao</a></li>
        <li><a href="http://hospital.eletivassc.com.br">Hospital</a></li>
        <li><a href="http://importapaciente.eletivassc.com.br">Importa Paciente</a></li>


      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a href="#">Inicio</a></li>
        <li><a href="https://www.saude.sc.gov.br/">SES</a></li>
        <li><a href="http://administrador.eletivassc.com.br">Administrador</a></li>
        <li><a href="http://regulacao.eletivassc.com.br">Regulacao</a></li>
        <li><a href="http://hospital.eletivassc.com.br">Hospital</a></li>
        <li><a href="http://importapaciente.eletivassc.com.br">Importa paciente</a></li>

     </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

   
 <p>
  

   
   
      <div class="row center">
         
  <div class="container">
    <div class="carousel carousel-slider" id="demo-carousel-content" data-indicators="true" >
   <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>Administrador</h2>
      <p class="white-text">Acesse o endereço http://administrador.eletivassc.com.br</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Regulação</h2>
      <p class="white-text">Acesse o endereço http://regulacao.eletivassc.com.br</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Hospital</h2>
      <p class="white-text">Acesse o endereço http://hospital.eletivassc.com.br</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Importa Paciente</h2>
      <p class="white-text">Acesse o endereço http://importapaciente.eletivassc.com.br</p>
    </div>
  </div>






        


















  
       
  
      
  
 </div>
  
  
  
 <script>
  
 $(document).ready(function(){
  
  $('#demo-carousel-content').carousel();
  
   setInterval(function() {
  
     $('#demo-carousel-content').carousel('next');
  
   }, 2000);   
  
    
  
 });
  
 </script>












        <?php 
        $today = date("20y");                         
       ?>
       

			<section class="jumbotron">





    </section>
		</article>
	</center>
    </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">


          </div>
        </div>


        <div class="col s12 m4">
          <div class="icon-block">

            <img class="responsive-img" src="img/logo3.png">
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
 

  <footer class="#1b5e20 green darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Secretaria de Estado da Saúde</h5>
          <p class="grey-text text-lighten-4"> @ <?php echo $today; ?>.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <img class="responsive-img" src="img/logo2.png">

        </div>
        <div class="col l3 s12">
          <h5 class="white-text"></h5>
          <ul>
            <li><a class="white-text" href="https://www.saude.sc.gov.br/">SES</a></li>
            <li><a class="white-text" href="https://administrador.eletivassc.com.br">Adminisrador</a></li>
            <li><a class="white-text" href="https://regulacao.eletivassc.com.br">Regulação</a></li>
            <li><a class="white-text" href="https://hospital.eletivassc.com.br">Hospital</a></li>
            <li><a class="white-text" href="https://importapaciente.eletivassc.com.br">Importa Paciente</a></li>

          </ul>
        </div>
      </div>
    </div>
   
   
    <div class="footer-copyright">
      <div class="container"><h6 class="header center blue-text">Secretaria de Estado da Saúde 
    @ <?php echo $today; ?> <a class="orange-text text-lighten-3" href="http://materializecss.com"></a></h6>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>