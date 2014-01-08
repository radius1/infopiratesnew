<!DOCTYPE html>
<html>
  <head>
    <title>InfoPirates - Informatieve game over Radius College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html"><img src="images/logo.png" class="logo img-responsive" alt="InfoPirates"></a>
          </div>
        
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Startpagina</a></li>
              <li><a href="informatie.html">Informatie</a></li>
              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=Radius+College,+Terheijdenseweg,+Breda&amp;aq=0&amp;oq=Radius+college&amp;sll=51.992171,4.494086&amp;sspn=1.219405,2.90863&amp;ie=UTF8&amp;hq=Radius+College,&amp;hnear=Terheijdenseweg,+Breda&amp;t=m&amp;ll=51.607304,4.777057&amp;spn=0.006663,0.002124&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
    
    <div class="container content">
        <h2>Contact opnemen</h2>
        <p>Heeft u een vraag of komt u ergens niet helemaal uit? Aarzel dan niet en neem contact met ons op. Wij zullen proberen u zo spoedig mogelijk van dienst te zijn.</p>
        <br />
        <form action="" role="form" method="post">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Uw naam..">
            </div>
            
            <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Uw e-mail adres..">
            </div>
            
            <div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Onderwerp..">
            </div>
        </div>
        
        <textarea name="" style="margin-top:20px;margin-bottom:20px;" id="" cols="30" rows="10" class="form-control" placeholder="Uw bericht.."></textarea>
        
        <button type="submit" class="btn btn-primary">Verzenden</button> <button type="cancel" class="btn btn-default">Annuleren</button>
        <hr>
        </form>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="images/screenshot.png" alt="" class="img-responsive">
            </div>
            
            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="images/screenshot.png" alt="" class="img-responsive">
            </div>
            
            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="images/screenshot.png" alt="" class="img-responsive">
            </div>
            
            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="images/screenshot.png" alt="" class="img-responsive">
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <p class="pull-left">&copy; 2013 - Alle rechten voorbehouden - InfoPirates</p>
            <p class="pull-right">Deze game is gemaakt door de opleiding Mediadevelopment op het Radius College.</p>
        </div>
    </div>
    
    <div class="modal fade" id="apps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">QR Codes scannen</h4>
          </div>
          <div class="modal-body">
            <p>Voor het meespelen aan InfoPirates is een QR Scanner vereist. Je vind hieronder een aantal apps die dit mogelijk maken.</p>
            <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Apple iPhone</h3>
                    <p><a href="https://itunes.apple.com/nl/app/quick-scan-qr-code-reader/id483336864?l=en&mt=8&ign-mpt=uo%3D2" target="_blank">QuickScan</a></p>
                    <p><a href="https://itunes.apple.com/nl/app/neoreader/id284973754?mt=8" target="_blank">NeoReader</a></p>
                    <p><a href="https://itunes.apple.com/nl/app/barcodes-scanner/id417257150?mt=8#" target="_blank">Barcode Scanner</a></p>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Android</h3>
                    <p><a href="https://play.google.com/store/apps/details?id=la.droid.qr" target="_blank">QR Droid</a></p>
                    <p><a href="https://play.google.com/store/apps/details?id=me.scan.android.client" target="_blank">Scan</a></p>
                    <p><a href="https://play.google.com/store/apps/details?id=tw.com.quickmark" target="_blank">QuickMark Barcode scanner</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>Windows Phone</h3>
                    <p>BeeTagg</p>
                    <p>QuickMark Barcode scanner</p>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3>BlackBerry</h3>
                    <p><a href="http://appworld.blackberry.com/webstore/content/1102" target="_blank">Scanlife</a></p>
                    <p><a href="http://appworld.blackberry.com/webstore/content/13962?lang=en" target="_blank">QR Code Scanner Pro</a></p>
                    <p><a href="http://appworld.blackberry.com/webstore/content/5781?lang=en" target="_blank">BeeTagg</a></a></p>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Sluiten</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>