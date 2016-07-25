    <?php if($shownpage_page['page_idf'] == "discover"): ?>
    </div><!-- /.container -->
    <?php endif; ?>
	<?php if($shownpage_page['page_idf'] == "news-sufu"): ?>
	<script>
      (function() {
		var cx = '008420319407095105531:gjduwpudcja';
		var gcse = document.createElement('script');
		gcse.type = 'text/javascript';
		gcse.async = true;
		gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(gcse, s);
	  })();
	  
      function startDictation() {
        if (window.hasOwnProperty('webkitSpeechRecognition')) { 
		  var site_root = "<?php echo $root; ?>";
		  document.getElementById("microphone").src = site_root + 'img/assets/listening.png';
          var recognition = new webkitSpeechRecognition();
     
          recognition.continuous = false;
          recognition.interimResults = false;
     
          recognition.lang = "de-DE";
          recognition.start();
     
          recognition.onresult = function(e) {
            document.getElementById('search_bar').value
                                     = e.results[0][0].transcript;
            recognition.stop();
			document.getElementById("search_label").style.top = '-32px';
			document.getElementById("search_label").style.fontSize = '14px';
            document.getElementById('search').submit();
          };
     
          recognition.onerror = function(e) {
            recognition.stop();
          }
     
        }
      }
	</script>
	<?php endif; ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo $root; ?>static/js/bootstrap.min.js"></script>
	<script src="<?php echo $root; ?>static/js/ripples.min.js"></script>
	<script src="<?php echo $root; ?>static/js/material.min.js"></script>
	<script>
	  $.material.init();
	</script>
</body>
</html>
