<?php
  $shownpage_page = array("page_idf" => "discover", "title" => "Ein einzigartiges Design für ANDIBI.TK", "description" => "Entdecke das einzigartige Material-Design für ANDIBI.TK");
  $page_has_extra_navbarentry = "true";
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/carousel/material.jpg" alt="ANDIBI.TK">
          <div class="container">
            <div class="carousel-caption">
              <h1>Einzigartiges Material-Design</h1>
              <p>ANDIBI.TK benutzt das einzigartige Material-Design!</p>
              <p><a class="btn btn-lg btn-danger btn-raised" href="index.php" role="button">Jetzt erleben</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel/bootstrap.png" alt="Bootstrap">
          <div class="container">
            <div class="carousel-caption">
              <h1>Powered by Bootstrap</h1>
              <p>ANDIBI.TK benutzt Bootstrap, ein Framework zur einfachen Gestaltung von Webanwendungen.</p>
              <p><a class="btn btn-lg btn-primary btn-raised" href="http://getbootstrap.com/" target="_blank" role="button">Mehr erfahren</a></p>
            </div>
          </div>
        </div>
       <div class="item">
          <img src="img/carousel/inspired.png" alt="Inspiriert vom Android 5">
          <div class="container">
            <div class="carousel-caption">
                <h1>Inspiriert von Android</h1>
              <p>Das Material-Design für ANDIBI.TK befolgt <a href="http://www.google.com/design/" target="_blank">die Google-Richtlinien</a> für Material-Design.</p>
              <p><a class="btn btn-lg btn-warning btn-raised" href="#beginpromotion" role="button">Jetzt entdecken!</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <a id="beginpromotion"></a>
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/carousel/inspired.png" height="150" width="150" alt="Design">
          <h2>Design</h2>
          <p>Moderner als je zuvor.</p>
          <p><a class="btn btn-primary btn-raised" href="#design" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle shadow" src="img/promoting/google-bell.png" height="150" width="150" alt="Navbar">
          <h2>Navbar</h2>
          <p>Damit du immer alles im Blick hast.</p>
          <p><a class="btn btn-primary btn-raised" href="#navbar" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/promoting/now.jpg" height="150" width="150" alt="Generic placeholder image">
          <h2>Oneboxen</h2>
          <p>Bildschirme werden mehr breiter als höher. Und Smartphones und Tablets sind total im Trend!</p>
          <p><a class="btn btn-primary btn-raised" href="#bootstrap" role="button">Mehr Infos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <a id="design"></a>
      <div class="row featurette">
    <div class="col-md-6">
    <div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Ein materielles, modernes Design</h3></div>
    <div class="panel-body">
    <p>Dieses Design beeindruckt einfach alle. Das Material-Design von Google sieht klasse aus und verhält sich super auf allen Bildschirmgrößen!</p>
    <p>Schon das alte ANDIBI.TK konnte mit Responsivheit prahlen, nun wird der Platz noch besser genutzt!</p>
    </div>
    </div>
     </div>
        <div class="col-md-6">
     <div class="well">
      <img class="featurette-image img-responsive" src="img/promoting/design.png" alt="Design">
    </div>
     </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6">
            <a id="navbar"></a>
            <div class="well">
          <img class="featurette-image img-responsive" src="img/promoting/navbar.png" alt="Navbar">
          <img class="featurette-image img-responsive" src="img/promoting/modal.png" alt="Benachrichtigungs-Modal">
            </div>
        </div>
        <div class="col-md-6">
             <div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Eine immer präsente Navbar</h3></div>
    <div class="panel-body">
    Überall präsent: Die Navbar! Jetzt mit einer Benachrichtigungsglocke, sodass du neue Nachrichten nie verpasst und sie dir trotzdem nicht im Weg stehen!
    </div>
    </div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
      <a id="bootstrap"></a>
        <div class="col-md-6">
            <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">OneBoxen</h3></div>
             <div class="panel-body">
    Mit den OneBoxen - bekannt aus Google Now und Google-Suche - siehst du mehr Informationen auf einmal.
    </div>
        </div>
            </div>
        <div class="col-md-6">
            <div class="well">
          <img class="featurette-image img-responsive" src="img/promoting/now.jpg" alt="Google Now">
                </div>
        </div>
      </div>

      <!-- /END THE FEATURETTES -->


    <!-- Footer -->
<?php
$zusatz = '- <a href="#">Nach oben</a>';
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
