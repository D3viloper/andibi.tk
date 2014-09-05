<?php
$shownpage_page = array("page_idf" => "archrepo-entfernung", "title" => "Entfernung von Paketen aus der Arch-Repo", "description" => "Diese Pakete werden/wurden aus der [andi] Arch Linux Repo entfernt.");
$page_has_extra_navbarentry = "true";
$page_has_extra_navbarentry_url = "archrepo-entfernung.php";
$page_has_extra_navbarentry_title = "Entfernung von Paketen aus der Arch-Repo";
include("templates/headInclude.php");
include("templates/navbar.php");
?>
    <!--main-->
    <div class="container" id="main">
    <div class="row">
        <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Endgültige Entfernung von Paketen aus der Arch-Repo</h4>
    </div>
     <div class="panel-body">
      <p>Folgende Pakete wurden entfernt:</p>
  <div class="table-responsive">
      <table class="table table-striped">
        <thead><tr>
               <th>Paket</th>
               <th>Entfernungsdatum</th>
               <th>Grund</th>
           </tr></thead>
           <tr><td><a href="https://aur.archlinux.org/packages/firefox-kde-opensuse" target="_blank">firefox-kde-opensuse</a></td>
               <td>15. August 2014</td>
               <td>Zu hoher Wartungsaufwand</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/jreen" target="_blank">jreen</a></td>
               <td>15. August 2014</td>
               <td>Abhängigkeit von tomahawk</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/kmozillahelper" target="_blank">kmozillahelper</a></td>
               <td>15. August 2014</td>
               <td>Abhängigkeit von firefox-kde-opensuse</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/libechonest" target="_blank">libechonest</a></td>
               <td>01. September 2014</td>
               <td>Abhängigkeit von tomahawk (vergessen...)</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/qtweetlib" target="_blank">qtweetlib</a></td>
               <td>15. August 2014</td>
               <td>Abhängigkeit von tomahawk</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/sigram-git" target="_blank">sigram-git</a></td>
               <td>15. August 2014</td>
               <td>telegram-destop als Ersatz</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/sublime-text" target="_blank">sublime-text</a></td>
               <td>15. August 2014</td>
               <td>Shareware</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/sublime-text-dev" target="_blank">sublime-text-dev</a></td>
               <td>15. August 2014</td>
               <td>Shareware</td></tr>
           <tr><td><a href="https://aur.archlinux.org/packages/tomahawk" target="_blank">tomahawk</a></td>
               <td>15. August 2014</td>
               <td>-</td></tr>
           <tr><td><a href="https://www.archlinux.org/packages/?sort=&repo=Community&q=wiimms+iso+tools&maintainer=&flagged=" target="_blank">wit</a></td>
               <td>05. September 2014</td>
               <td>Seit August in [community]</td></tr>
      </table>
      </div>
      </div>
      </div>
        </div>

    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4>Was bedeutet das für mich?</h4>
    </div>
     <div class="panel-body">
      <p>Das bedeutet, dass du diese Pakete deinstallieren solltest, wenn du sie installierst hast. Ich bedauere diesen Scrhitt wirklich sehr, aber mit der Zeit werden manche Pakete unwartbar oder die Lizenz ist nicht eindeutig festgelegt. Informiert wirst du über Entfernungen auf Twitter: <a href="https://twitter.com/ChromeAndLinux" target="_blank">@ChromeAndLinux</a>.</p>
        </div>
      </div>
        </div>

    <div class="col-md-6 col-sm-6">
    <div class="well">
      <h4>Alternativen</h4>
      <ul>
        <li>Installiere die Pakete aus dem AUR, mit z.B. yaourt!</li>
      </ul>
    </div>
    </div>
    </div><!--/row-->

    <!-- Footer -->
<?php include("templates/footer.php");
      include("templates/htmlEnd.php");?>
