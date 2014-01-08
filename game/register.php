<?php
session_start();

$ipadress = $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Open dag</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

<!-- fix windowsmobile8 / bootstrap quirk -->
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
          <h1>InfoPirates </h1>
          <h2>vind ze allemaal...</h2>
         
        </div>
      </div>
        <div class="row text-reg">
          <h4>Welkom, aankomende Infopirate...</h4>
          <p class="first-text">
            Ahaa, vers bloed! Dus jij denkt de taak aan te kunnen als InfoPirate, en alle 6 de sleutelstukken te verkrijgen voor de schat? We zullen je maar alvast zeggen; <br><br> het is geen simpele taak, maar als jij denkt dat jij dit kan, be my guest ;)... 
          </p>
          <div class="var-text-succes"> <!--div om text variabel te maken adhv keuzes speler -->
          <div class="alert alert-success"><p>Mooi.... geen weg meer terug nu. Geef hieronder je username en email op en je kunt aan de slag met onze quests!</p></div>
            <form onsubmit="return isAlphanumeric()" class="form-horizontal" role="form" action="reg_user.php" method="POST">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" id="username" class="form-control" id="inputEmail3" name="name" pattern=".{2,100}" title="gebruikersnaam mag niet minder dan 2 karakters bevatten" placeholder="Username" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputPassword3" name="email" pattern=".{15,100}" 
                      placeholder="Email-adres" required>
                </div>
                <div class="hiddenform">
                    <input type="hidden" id="ip" name="user_ip"  value="<?php echo $ipadress; ?>"required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" id="submit" name="submit">Wordt InfoPirate!</button>
                </div>
              </div>
          </form>
          </div> <!-- einde text-succes -->

          <div class="var-text-fail">
            <div class="alert alert-danger"><p>hahaa! We wisten het wel. Te moeilijk voor je he? Dit avontuur is namelijk alleen weggelegd voor echte InfoPirates! </p></div>
             <button type="button" class="btn btn-success second-choice">Ho, maar zo doe ik toch mee!!</button>
          </div>

          <button type="button" class="btn btn-success choice">Arrr! (ja)</button>
          <button type="button" class="btn btn-danger choice">No way! (nee)</button>
        </div>

        

    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>