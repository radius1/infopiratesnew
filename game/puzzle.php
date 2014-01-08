<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Open dag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

<!-- windowsmobile 8 / bootstrap fix -->
<script type="text/javascript"> 
<!-- 
(function() { 
    if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) { 
        var msViewportStyle = document.createElement("style"); 
        msViewportStyle.appendChild( 
            document.createTextNode("@-ms-viewport{width:auto!important}") 
        ); 
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle); 
    } 
})(); 
//--> 
</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="page-header">
          <h1>Infohunters </h1>
          <h2>vind ze allemaal...</h2> 
        </div>
          Puzzelstukken behaald:<span class="counter badge"></span><br>
         
      </div>

      <div class="row"> <button type="button" class="btn-sm"><a href="index.php">terug naar de quest log.</a> </button> </div>
      
        
        
      <div class="row puzzle-container">
      
        <div class="piece col-xs-4"></div>  
        <div class="piece col-xs-4"></div>
        <div class="piece col-xs-4"></div>
        <div class="piece col-xs-4"></div>
        <div class="piece col-xs-4"></div>
        <div class="piece col-xs-4"></div>
      </div>
    

    <div class="row">
      <!-- Modal All-->
      <div class="modal fade" id="myModal-all" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <img src="img/box-closed.png" alt="" id="puzzle-piece">
              <h4 class="modal-title" id="myModalLabel">Proficiat!</h4>
            </div>
            <div class="modal-body">
              <p>Je hebt alles gevonden!</p>
            </div>
            <div class="modal-footer">
             
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>

    <div class="row">
  <!-- Modal first -->
        <div class="modal fade" id="myModal-first" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <img src="img/box-closed.png" alt="" id="puzzle-piece">
                <h4 class="modal-title" id="myModalLabel">Welkom, infohunter...</h4>
              </div>
              <div class="modal-body">
                <p>Je hebt zojuist je eerste stuk van de puzzel gevonden. Er zijn er nog 5 te vinden op deze open dag.</p>
                <p>Wil je meedoen met dit avontuur, gemaakt door de opleiding Mediadevelopment?</p>
                <button type='button' class="btn-block"><h4><a href="register.php">Registreer dan nu!</a></h4></button>
              </div>
              <div class="modal-footer">
               
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>


  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>