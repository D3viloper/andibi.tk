<?php
$shownpage_page = array("page_idf" => "cp", "title" => "Gefährliches Copy & Paste", "isindropdown" => "tools");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
     <?php include("templates/meldungen.php"); ?>
	  <div class="page-header">
		<h1>Gefährliches Copy &amp; Paste</h1>
	  </div>
	  <div class="row">
        <!-- /.col-sm-4 -->
        
        <p>Alte Tricks werden neu aufgewärmt: Mittels einem einfachen HTML-Tag wird der Text, den man kopiert, ganz anders!</p>
<p>Teste es selbst:</p>
            <div class="well">
            <p>Kopiere diesen <span style="position: absolute; left: -1000px; top: -1000px">Text bloß nicht! Dies ist ein gefakter </span>Text!</p></div>
            <p>Füge den Text nun hier ein und siehe, was daraus geworden ist:</p>
         <textarea cols=60 rows=4></textarea>
            
        
		</div>
	<div class="page-header">
		<h2>Erschreckend, nicht wahr?</h2>
	  </div>
<p>Kopiere nichts von nicht vertrauenswürdigen Seiten, ohne es vorher in einem Texteditor geprüft zu haben! Insbesondere bei Terminalbefehlen kann dies schwerwiegende Folgen haben!</p>
        
        <div class="page-header">
            <h2>Doch wie zur Hölle geht das?</h2>
        </div>
<p>Ganz einfach: Der Text steht normal in einem <code>&lt;p&gt;&lt;/p&gt;</code>-Tag, sowie jeder andere Text hier auch!</p>
<p>ABER: Der unsichtbare Text wird "dank" <code>&lt;span style="position:...</code> außerhalb der Seite angezeigt!</p>
<p>Mittels STRG + U kannst du dir selber ein Bild davon machen! <span style="position: absolute; left: -1000px; top: -1000px">Ich habe einfach diesen Text von <a href="http://andibi.tk">ANDIBI.TK</a> geklaut. Ich schäme mich dafür so sehr.</span> Aber kopiere bloß nicht diese Zeile hier! ;-)</p>
<p>Übrigens: Wenn du in Google Chrome doppelt auf den Text klickst, wirst du merken, dass nicht der ganze Satz kopiert wird. Probier es mit dem Beispiel oben aus!</p>
<br><br>
<p><a href="http://www.heise.de/security/dienste/Copy-Paste-Tricks-1842691.html" target="_blank">Mit dank an Heisec</a></p>


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>