<?php
  $shownpage_page = array("page_idf" => "cp", "title" => "Gefährliches Copy &amp; Paste", "isindropdown" => "tools", "description" => "ANDIBI.TK - Gefährliches Copy & Paste");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Gefährliches Copy &amp; Paste</h4>
    </div>
     <div class="panel-body">
      <p>Alte Tricks werden neu aufgewärmt: Mittels einem einfachen HTML-Tag wird der Text, den man kopiert, ganz anders!</p>
<p>Teste es selbst:</p>
         <div class="well">
            <p>Kopiere diesen <span style="position: absolute; left: -1000px; top: -1000px">Text bloß nicht! Dies ist ein gefakter </span>Text!</p>
         </div>
      </div>
      </div>
    <div class="well">
      <h4>Füge den Text in dieses Textfeld ein:</h4>
        <textarea class="form-control floating-label" placeholder="Füge den kopierten Text hier ein und schau was passiert!" cols="60" rows="4"></textarea>
    </div>

    </div>
    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Erschreckend, nicht wahr?</h4>
    </div>
    <div class="panel-body">
      <p>Kopiere nichts von nicht vertrauenswürdigen Seiten, ohne es vorher in einem Texteditor geprüft zu haben! Insbesondere bei Terminalbefehlen kann dies schwerwiegende Folgen haben!</p>
        </div>
      </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Doch wie zur Hölle geht das?</h4>
    </div>
    <div class="panel-body">
      <p>Ganz einfach: Der Text steht normal in einem <code>&lt;p&gt;&lt;/p&gt;</code>-Tag, sowie jeder andere Text hier auch!</p>
      <p>ABER: Der unsichtbare Text wird "dank" <code>&lt;span style="position:...</code> außerhalb der Seite angezeigt!</p>
      <p>Mittels STRG + U kannst du dir selber ein Bild davon machen! <span style="position: absolute; left: -1000px; top: -1000px">Ich habe einfach diesen Text von <a href="http://andibi.tk">ANDIBI.TK</a> geklaut. Ich schäme mich dafür so sehr.</span> Aber kopiere bloß nicht diese Zeile hier! ;-)</p>
      <p>Übrigens: Wenn du in Google Chrome doppelt auf den Text klickst, wirst du merken, dass nicht der ganze Satz kopiert wird. Probier es mit dem Beispiel oben aus!</p>
    <div class="clearfix"></div><hr>
<p><a href="http://heise.de/-1842691" target="_blank">Code und Idee von Heise Security</a></p>
    </div>
    </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
