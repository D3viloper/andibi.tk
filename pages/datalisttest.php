<?php
  $shownpage_page = array("page_idf" => "datalisttest", "title" => "Datalist-Test", "isindropdown" => "tools", "description" => "ANDIBI.TK - Datalist-Test");
  include("templates/headInclude.php");
  include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Welchen Browser benutzt du?</h4>
    </div>
     <div class="panel-body">
      <p><input type="text" value="Schreibe hier!" list="browsers" /></p>
         <datalist id="browsers">
             <option>Chrome</option>
             <option>Firefox</option>
             <option>Internet Explorer</option>
             <option>Opera</option>
             <option>Safari</option>
         </datalist>
      </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Stelle einen Wert ein!</h4>
    </div>
     <div class="panel-body">
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
</datalist>
        </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Wähle eine Farbe!</h4>
    </div>
     <div class="panel-body">
      <input type="color" value="#000000" list="color" />
<datalist id="color">
  <option>#ff0000</option>
  <option>#0000ff</option>
  <option>#00ff00</option>
  <option>#ffff00</option>
  <option>#00ffff</option>
</datalist>
         <p>Evtl. wird dies in einigen Browsern nicht (richtig) angezeigt.</p>
        </div>
      </div>
    </div>

<div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Welcher ist heute?</h4>
    </div>
     <div class="panel-body">
       <input type="date" list="days" />
<datalist id="days">
  <option label="Gründung der WiiDatabase">2011-08-04</option>
  <option label="01. Mai">2014-05-01</option>
  <option label="Weihnachten">2014-12-24</option>
</datalist>
      </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Wie viel Uhr ist es?</h4>
    </div>
     <div class="panel-body">
      <p><input type="time" list="times" />
          <datalist id="times">
  <option label="Mitternacht">00:00</option>
  <option>06:00</option>
  <option label="Mittag">12:00</option>
  <option>18:00</option>
</datalist></p>
        </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Welches Datum ist es und wie viel Uhr?</h4>
    </div>
     <div class="panel-body">
      <input type="datetime-local" list="datetime-locals" />
<datalist id="datetime-locals">
  <option label="Das Christkind kommt!">2014-12-23T23:59</option>
  <option label="Weihnachtsparty">2014-12-25T18:00</option>
  <option>2014-12-30T00:00</option>
  <option label="Happy New Year!">2015-01-01T00:00</option>
</datalist>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
    <div class="well">
      <h4>Hinweis</h4>
      <p><code>&lt;datalist&gt;</code> kann nicht gestyled werden, deshalb sehen einige Elemente so "abnormal" aus.</p>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Welcher Monat und welches Jahr ist heute?</h4>
    </div>
    <div class="panel-body">
      <input type="month" list="months" />
<datalist id="months">
  <option label="Ende des 20. Jhd.">1999-12</option>
  <option label="Gründung der WiiDatabase">2011-08</option>
  <option label="Die WiiDatabase wird 3">2014-08</option>
  <option label="Juli 2014">2014-07</option>
</datalist>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Welche Woche ist heute?</h4>
    </div>
    <div class="panel-body">
      <input type="week" list="weeks" />
<datalist id="weeks">
  <option label="Erste Woche in 2014">2014-W01</option>
  <option label="Zweite Woche in 2014">2014-W02</option>
  <option label="Die WiiDatabase wird 3">2014-W32</option>
  <option label="Letzte Woche in 2013">2014-W52</option>
</datalist>
    </div>
    </div>
    </div>

    <div class="col-md-12 col-sm-6">
    <div class="well">
      <h4>Nix wird angezeigt? Es funktioniert nur sparodisch? Es sieht seltsam aus?</h4>
      <p>Dann beherrscht dein Browser diese HTML5-Features nicht! <a href="https://www.google.com/intl/de/chrome/browser/" target="_blank">Installiere einen moderneren Browser</a> für ein schnelleres &amp; besseres Web!</p>
        <p>Momentane Probleme:</p>
        <ul>
	  <li><strong>Chropera:</strong> Besteht als erster Browser ALLES perfekt!</li>
          <li><strong>Google Chrome:</strong> keine Farbpipette mehr seit Aura, extrem abgespecktes Farbmenü</li>
          <li><strong>Mozilla Firefox:</strong> keine vordefinierten Farben, kein Kalender</li>
          <li><strong>Opera:</strong> keine Vorschläge für Daten &amp; Zeiten</li>
          <li><strong>Internet Explorer:</strong> Hier funktioniert fast gar nichts.</li>
        </ul>
    </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
