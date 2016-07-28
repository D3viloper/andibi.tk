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
    <div class="panel-heading"><h3 class="panel-title">Welchen Browser benutzt du?</h3></div>
     <div class="panel-body">
      <input type="text" placeholder="Schreibe hier!" list="browsers" />
         <datalist id="browsers">
             <option>Chrome</option>
             <option>Firefox</option>
             <option>Internet Explorer</option>
			 <option>Edge</option>
             <option>Opera</option>
             <option>Safari</option>
         </datalist>
      </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Stelle einen Wert ein!</h3></div>
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
    <div class="panel-heading"><h3 class="panel-title">Wähle eine Farbe!</h3></div>
     <div class="panel-body">
      <input type="color" value="#000000" list="color" />
<datalist id="color">
  <option>#ff0000</option>
  <option>#0000ff</option>
  <option>#00ff00</option>
  <option>#ffff00</option>
  <option>#00ffff</option>
</datalist>
        </div>
		<div class="panel-footer">Evtl. wird dies in einigen Browsern nicht (richtig) angezeigt.</div>
      </div>
    </div>

<div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Welcher ist heute?</h3></div>
     <div class="panel-body">
       <input type="date" list="days" />
<datalist id="days">
  <option label="Gründung der WiiDatabase">2011-08-04</option>
  <option label="01. Mai"><?php echo date("Y"); ?>-05-01</option>
  <option label="Weihnachten"><?php echo date("Y"); ?>-12-24</option>
</datalist>
      </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Wie viel Uhr ist es?</h3></div>
     <div class="panel-body">
      <input type="time" list="times" />
          <datalist id="times">
  <option label="Mitternacht">00:00</option>
  <option>06:00</option>
  <option label="Mittag">12:00</option>
  <option>18:00</option>
</datalist>
        </div>
      </div>
    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Welches Datum und wie viel Uhr ist es?</h3></div>
     <div class="panel-body">
      <input type="datetime-local" list="datetime-locals" />
<datalist id="datetime-locals">
  <option label="Das Christkind kommt!"><?php echo date("Y"); ?>-12-24T20:00</option>
  <option label="Weihnachtsparty"><?php echo date("Y"); ?>-12-25T18:00</option>
  <option><?php echo date("Y"); ?>-12-30T00:00</option>
  <option label="Happy New Year!"><?php echo date("Y")+1; ?>-01-01T00:00</option>
</datalist>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Welcher Monat und welches Jahr ist heute?</h3></div>
    <div class="panel-body">
      <input type="month" list="months" />
<datalist id="months">
  <option label="Ende des 20. Jhd.">1999-12</option>
  <option label="Gründung der WiiDatabase">2011-08</option>
  <option label="Die WiiDatabase wird fünf">2016-08</option>
  <option label="Oktober <?php echo date("Y"); ?>"><?php echo date("Y"); ?>-10</option>
</datalist>
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Welche Woche ist heute?</h3></div>
    <div class="panel-body">
      <input type="week" list="weeks" />
<datalist id="weeks">
  <option label="Erste Woche in <?php echo date("Y"); ?>"><?php echo date("Y"); ?>-W01</option>
  <option label="Zweite Woche in <?php echo date("Y"); ?>"><?php echo date("Y"); ?>-W02</option>
  <option label="30. Woche in <?php echo date("Y"); ?>"><?php echo date("Y"); ?>-W30</option>
  <option label="Letzte Woche in <?php echo date("Y"); ?>"><?php echo date("Y"); ?>-W52</option>
</datalist>
    </div>
    </div>
    </div>

    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
