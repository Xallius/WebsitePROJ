</body>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script>
	// Javascript to enable link to tab
	var hash = document.location.hash;
	var prefix = "tab_";
	if (hash) {
		$('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
	}
	// Change hash for page-reload
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
		window.location.hash = e.target.hash.replace("#", "#" + prefix);
	});
</script>
</html>