<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Stadtcafe</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Stadtcafe</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/#cafe">Das Cafe</a></li>
                <li><a href="/#darboven">Die Bohne</a></li>
                <li><a href="/#cimbali">Die Maschine</a></li>
                <li><a href="/#teecultur">Der Tee</a></li>
                <li><a href="/#feyerabend">Der Kuchen</a></li>
		<li class="dropdown">
          	  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Die Karten<span class="caret"></span></a>
          	  <ul class="dropdown-menu" role="menu">
		    <li><a href="/karte/speisekarte.html">Speisekarte</a></li>
		    <li class="divider"></li>
		    <li><a href="/karte/teekarte.html">Teekarte</a></li>
		  </ul>
		</li>
                <li><a href="/impressum">Impressum</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
	<!--
        <li data-target="#myCarousel" data-slide-to="3"></li>
	-->
      </ol>
      <div class="carousel-inner">
      
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"><img src="images/info.png" alt="Info"/></div>
                <div class="col-md-8">
                  <h1>Wichtige Info</h1>
			<p>Am Sonntag, den 16.08. bleibt das Cafe aufgrund eines familiären Anlasses geschlossen.</p>
                </div>
              </div><!-- row -->
              </div><!-- container -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"><img src="images/palme.png" alt="Info"/></div>
                <div class="col-md-8">
                  <h1>Sommerferien im Stadtcafe</h1>
		  <p>Wir machen Ferien von Freitag, 21.08. bis Sonntag, 06.09.2015</p>
		  <p>Das Cafe ist <b>ab Mittwoch, 09.09.</b> wieder zu den üblichen Zeiten <b>geöffnet</b>!</p>
                </div>
              </div><!-- row -->
              </div><!-- container -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"><img src="images/info.png" alt="Info"/></div>
                <div class="col-md-8">
              <h1>Frühstück</h1>
              <p>Mittwoch bis Samstag, ab 09:00h!</p>
              <p>Wählen Sie aus dem reichhaltigen Angebot vom einfachen Schwäbischen bis zum Genussfrühstück für Zwei</p>
              <p>Es ist für jeden was dabei ... Guten Hunger!</p>
                </div>
              </div><!-- row -->
              </div><!-- container -->
            </div>
          </div>
        </div>

      </div><!-- carousel-inner -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="images/clock.png" alt="Clockwork" />
          <h2>Öffnungszeiten</h2>
          <p><b>Montag und Dienstag geschlossen</b></p>
          <p>Mittwoch - Samstag</p>
          <p>09:00h - 18:00h</p>
          <p><b>Sonn- und Feiertage</b></p>
          <p><b>12:00h - 18:00h</b></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/facebook.png" alt="Facebook" />
          <h2>Social Media</h2>
          <p><a href="https://www.facebook.com/stadtcafe.neuenstadt" target="_blank"><b>Hier</b></a> geht's zur <a href="https://www.facebook.com/stadtcafe.neuenstadt" target="_blank">Facebook</a> Seite...</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/home.png" alt="Adresse" />
          <h2>Stadtcafe</h2>
          <p>Helmbundstrasse 20 | 74196 Neuenstadt</p>
          <p>T +49 7139 512 92 85 | Fax +49 7139 512 92 87</p>
          <p><a class="btn btn-danger" href="mailto:tanja@stadtcafe.biz?Subject=Anfrage%20Website" role="button">Email &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div id="maps" class="row featurette" style="text-align:center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2605.1212678280126!2d9.329550000000001!3d49.23619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47982354430e217b%3A0x2846f535af9d2b98!2sHelmbundstra%C3%9Fe+20%2C+74196+Neuenstadt+am+Kocher!5e0!3m2!1sde!2sde!4v1410255978268" width="800" height="300" frameborder="0" style="border:0"></iframe>
      </div>

      <hr class="featurette-divider">

      <div id="cafe" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Das Cafe. <span class="text-muted">Klein, aber fein.</span></h2>
          <p class="lead">Das Cafe bietet eine ruhige Umgebung, in der Sie sich vom Stress des Alltags erholen können.</p>
        </div>
        <div class="col-md-5" style="height:400px;">
          <img class="featurette-image img-responsive" src="images/cafe_impression.png" alt="Das Cafe">
        </div>
      </div>

      <hr class="featurette-divider">

      <div id="darboven" class="row featurette">
        <div class="col-md-5" style="height:400px;">
          <img class="featurette-image img-responsive" src="images/logo_darboven.png" alt="J.J. Darboven">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Die Bohne. <span class="text-muted">Aus dem Hause J.J. Darboven.</span></h2>
          <p class="lead">Ein seit 1866 bestehendes Unternehmen, das sich durch seinen bekömmlichen Kaffee auszeichnet und zertifizierte Bio-Kaffees im Sortiment führt. Weitere Informationen finden Sie <a href="http://www.darboven.com/" target="_blank">hier</a>.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div id="cimbali" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Die Maschine. <span class="text-muted">Aus dem Hause Cimbali.</span></h2>
          <p class="lead">Technik, die eine Tasse Kaffee zu einem grossartigen Erlebnis verwandelt. Weitere Informationen finden Sie <a href="http://www.cimbali.de/" target="_blank">hier</a>.</p>
        </div>
        <div class="col-md-5" style="height:400px;">
          <img class="featurette-image img-responsive" src="images/m29select.jpg" alt="La Cimbali">
        </div>
      </div>

      <hr class="featurette-divider">

      <div id="teecultur" class="row featurette">
        <div class="col-md-5" style="height:400px;">
          <img class="featurette-image img-responsive" src="images/teecultur.png" alt="TEECULTUR">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Der Tee. <span class="text-muted">Aus dem Hause Teecultur.</span></h2>
          <p class="lead">Das Teefachgeschäft aus Neckarsulm bietet Teegenuss von Anfang an. Weitere Informationen finden Sie <a href="http://www.teecultur.de/" target="_blank">hier</a>.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div id="feyerabend" class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Der Kuchen. <span class="text-muted">Aus dem Hause Feyerabend.</span></h2>
          <p class="lead">In Bad Wimpfen werden die selbst gemachten Backwaren, Kuchen und Torten nur mit besten Zutaten und ohne chemische Zusätze oder Geschmacksverstärker hergestellt. Weitere Informationen finden Sie <a href="http://www.friedrich-feyerabend.de/" target="_blank">hier</a>.</p>
        </div>
        <div class="col-md-5" style="height:400px;">
          <img class="featurette-image img-responsive" src="images/ff.png" alt="Restaurant Friedrich - Weinstube Feyerabend">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">nach oben</a></p>
        <p>&copy; 2014 Stadtcafe &middot; <a href="/impressum">Impressum</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

