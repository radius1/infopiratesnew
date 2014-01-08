<?php

session_start();

 $ipadress = $_SERVER['REMOTE_ADDR'];

if (!isset($_SESSION['name'])) {
  header('location: register.php');
}
else 
{ 

?>

<!DOCTYPE html>
<html>
  <head>
    <title>InfoPirates, de Game!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <meta charset="ISO-8859-1">
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

      <div class="row">
      <div class="col-xs-12 userinfo">
       Welkom, <span class="user"> <b><?php echo $_SESSION['name'];?></b></span>. Puzzelstukken behaald: <span class="badge counter"></span>
      <p>klik op de quests om de opdrachten te zien</p>
      </div>

      </div>

      <div class="row">
        <ul class="nav nav-tabs" id="tabs">
          <li class="active"><a href="#quest">Quests</a></li>
          <li><a href="#voortgang">Voortgang</a></li>
          <li><a href="#berichten">Berichten</a></li>
        </ul>
      </div>
    
      <div class="tab-content">
      <div class="row tab-pane active" id="quest">
        <h2>Quests:</h2>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span><strong> Quest:</strong> Your First Day as a Pirate.
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <p><b>De kapitein spreekt niet:</b> " Aarrghh... Welkom aan boord piraat, 
                voor jouw zoektocht naar de schat is je eerste opdracht de qr-reader 
                installeren op je smartphone. Na de installatie scan je de qr-code op de balie."</p>
<hr class="quest">
<p>Beloning:
Het eerste puzzelstuk.  </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                 <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span> <strong> Quest:</strong> Land HO!
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <p><b>De kapitein spreekt:</b> "Ahooy!!!!! Land in zicht aaaarrghhh... De kapituur stuurt jou naar buiten bij de hoofdingang om de drone naar het land te sturen
                en zoek naar het volgende puzzel stuk. Dit zijn de co&#246;rdinatie N 51.606411, W 4.77858 , maarrrrr 
                pas op voor het beest, de kraken!"</p>                        
                <hr class="quest">
                <p>Beloning: Het tweede puzzelstuk</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                 <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span> <strong> Quest:</strong> Legend of Hanoi.
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
               <p><b>De kapitein spreekt:</b> "Aaarrghh... Voor deze quest moet je het raadsel van de Torens van Hanoi oplossen. Ga naar het lokaal 330 op de derde verdieping
               en ga de game spelen bij de Applicatieontwikkelaar." </p>
               <hr class="quest">
                <p>Beloning: Het derde puzzelstuk</p> 
              </div> 
            </div>
          </div>
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span>  <strong> Quest:</strong> The Gathering.
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                <p><b>De kapitein spreekt:</b> "Landrotten! In mijn hand heb ik een brief in een flesje, het is
                van de Mediadevelopers en zij zeggen: Ahoy Zeeschuimers! Hierbij nodigen wij jullie als 
                piraten onder elkaar om ons zelfgemaakt chatapp te tonen. Weg met de brief in de fles, met deze chatapp
                is de must have voor ieder piraat! Kom naar lokaal 328 en ontdek het zelf!"</p>
                <hr class="quest">
                <p>Beloning: Het vierde puzzelstuk</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                 <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span> <strong> Quest:</strong> The Quest.
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                <p><b>De Kapitein spreekt:</b> "SCHAT, schat, schat. Ik krijg niet genoeg van schatten. 
                Ik honger naar meer schatten en daarom stuur ik jou om de schat te zoeken. Alleen degene
                met een qr-reader zal deze taak volbrengen! Ik geef jou de schatkaart en volg de pijlen
                naar de schat. De schat is gemarkeerd met de rode kruis! "</p>  
                <p><img width='369px' src="img/schatkaart.jpg"></p>
                <hr class="quest">
                <p>Beloning: Het vijfde puzzelstuk</p>
              </div>                
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                 <span class="done"><img src="img/quest_open.png" alt="" id="marker"></span> <strong> Quest:</strong> Wanted: Dead or Alive.
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
               <p><b>De kapitein spreekt:</b>"GEZOCHT! Ik zoek naar een landrot die is ge-entert op mijn schip en mijn schat heeft gestolen! 
               Zoek naar die landrot, levend of dood! Hij zit in dit gebouw bij het Radius College, maar hij verplaatst keer op keer. Hij is
               voor het laatst gezien op de 3de verdieping. Als je hem ziet, loop je er naar toe, tik je hem aan en roep Gezocht: Levend of dood!"</p> 
               <p><img src="img/piraat.jpg"></p> 
              <hr class="quest">
                <p>Beloning: Het zesde puzzelstuk</p>
              </div> 
            </div>
          </div>
        </div>
        </div>
        
        <div class="row tab-pane" id="voortgang">
              <h2>Voortgang</h2>
              <div class="row puzzle-container">
                <div class="piece col-xs-4"></div>  
                <div class="piece col-xs-4"></div>
                <div class="piece col-xs-4"></div>
                <div class="piece col-xs-4"></div>
                <div class="piece col-xs-4"></div>
                <div class="piece col-xs-4"></div>
              </div>
        </div>

        <div class="row tab-pane" id="berichten">
            dfdfdfdfdf
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

<?php

}

?>