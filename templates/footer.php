    <div id="footer">
      <div class="container">
        <p class="text-muted credit">&copy; 2013-2014 iCON - <a href="https://github.com/Brawl345/andibi.tk" target="_blank">Code auf GitHub</a>
        <?php echo "$zusatz";
        exec('git rev-parse --verify HEAD 2> /dev/null', $output);
	$hash = $output[0];
	echo ' - <a href="https://github.com/Brawl345/andibi.tk/commit/'.$hash.'" target="_blank">'.$hash.'</a>'; ?></p>
      </div>
    </div>
