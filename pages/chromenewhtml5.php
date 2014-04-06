<?php
$shownpage_page = array("page_idf" => "chromenewhtml5", "title" => "Chrome loves HTML5", "isindropdown" => "tools");
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <div class="container">
     <?php include("templates/meldungen.php"); ?>
 <div class="page-header">
		<h1>Chrome &lt;3 HTML5</h1>
	  </div>
	  <div class="row">
        <!-- /.col-sm-4 -->
        <div class="col-sm-5">
        <table border="0">
  <tr>
          <!-- Die Lieblingsfrucht... Gibt man z.B. "B" ein, wird "Banane" vorgeschlagen! -->
    <td><p>Was ist deine Lieblingsfrucht?</p><input type="text" value="Schreibe hier!" list="fruits" />
<datalist id="fruits">
  <option value="Apfel"></option> 
  <option value="Orange"></option> 
  <option value="Pfirsich"></option> 
  <option value="Kirsche"></option> 
  <option value="Banane"></option> 
</datalist></td>
<!-- Slider - die Schritte können frei definiert werden! -->
    <td><div class="middle"><p>Stelle einen Wert ein!</p>
<input type="range" value="0" min="0" max="100" list="number" />
<datalist id="number">
  <option>10</option> 
  <option>20</option> 
  <option>30</option> 
  <option>40</option> 
  <option>50</option> 
  <option>60</option> 
  <option>70</option> 
  <option>80</option> 
  <option>90</option> 
  <option>100</option> 
</datalist></td>
    <td></div>
<!-- Ein Farbwähler - mit vordefinierten Farben! -->
<p>Farbwähler!</p>
<input type="color" value="#000000" list="color" />
<datalist id="color">
  <option>#ff0000</option> 
  <option>#0000ff</option> 
  <option>#00ff00</option> 
  <option>#ffff00</option> 
  <option>#00ffff</option> 
</datalist></td>
<!-- Hier gibt's Datum, Zeit, Monate & Wochen Angaben! -->
<td><p>Welcher ist heute?</p><input type="date" list="days" />
<datalist id="days">
  <option label="Gründung der WiiDatabase">2011-08-04</option>
  <option label="01. Mai">2013-05-01</option>
  <option label="Weihnachten">2013-12-24</option>
</datalist></td>
<td><p>Wie viel Uhr?</p><input type="time" list="times" />
<datalist id="times">
  <option label="Mitternacht">00:00</option>
  <option>06:00</option>
  <option label="Mittag">12:00</option>
  <option>18:00</option>
</datalist></td>
<td><p>Datum & Zeit</p><input type="datetime-local" list="datetime-locals" />
<datalist id="datetime-locals">
  <option label="Das Christkind kommt!">2013-12-23T23:59</option>
  <option label="Weihnachtsparty">2013-12-25T18:00</option>
  <option>2012-12-30T00:00</option>
  <option label="Happy New Year!">2014-01-01T00:00</option>
</datalist></td>
  </tr>
<tr>
<td><p>Monat & Jahr</p><input type="month" list="months" />
<datalist id="months">
  <option label="Ende des 20. Jhd.">1999-12</option>
  <option label="Gründung der WiiDatabase">2011-08</option>
  <option>2012-10</option>
  <option label="Mai 2013">2013-05</option>
</datalist></td>
<td><p>Woche</p><input type="week" list="weeks" />
<datalist id="weeks">
  <option label="Erste Woche in 2013">2013-W01</option>
  <option label="Zweite Woche in 2013">2013-W02</option>
  <option label="13. Woche in 2013">2013-W13</option>
  <option label="Letzte Woche in 2013">2013-W52</option>
</datalist></td>
</table>
        </div><!-- /.col-sm-4 -->
		</div>
	<div class="page-header">
		<h2>Nix wird angezeigt?</h2>
	  </div>
	  <p>Dann beherrscht dein Browser diese HTML5-Features nicht! <a href="https://www.google.com/intl/de/chrome/browser/">Installiere einen moderneren Browser</a> für ein schnelleres & besseres Web!</p>


    </div><!-- /.container -->
	</div>
	<!-- Footer -->
<?php
include("templates/footer.php");
include("templates/htmlEnd.php");
?>
