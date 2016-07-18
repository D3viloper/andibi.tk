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
