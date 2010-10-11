	<script>
		var globals ={}
		globals.commonUrl = '<?php echo base_url(); ?>common/';
		globals.baseUrl = '<?php echo base_url(); ?>';
		
		<?php
			
			if(isset($flash_message) && $flash_message){
				echo "var flashMessage = " . json_encode($flash_message) . ";";
			}else{
				echo "var flashMessage = false;";
			}
		?>
		
		console.log(flashMessage);
	</script>

	<!-- Javascript -->
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>/*<![CDATA[*/!window.jQuery && document.write('<script src="<?php echo base_url(); ?>common/js/jquery-1.4.2.min.js"><\/script>')/*]]>*/</script>
	
	<!-- jQuery UI -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<!-- SWFObject -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<!-- simpleStorage -->
	<script type="text/javascript" src="<?php echo base_url(); ?>common/js/storage.min.js"></script>
	<!-- homebrew -->
	<script src="<?php echo base_url(); ?>common/js/plugins.js?v=1"></script>
	<script src="<?php echo base_url(); ?>common/js/main.js?v=1"></script>
	
	<?php
    if(isset($js)){
    	if(is_array($js)){
    		foreach($js as $key => $value){
    			echo "<script src='" . base_url() . "common/js/" . $value . "'></script>";
    		}
    	}
    }
    ?>
	
	<!--[if lt IE 7 ]>
		<script type="text/javascript" src="<?php echo base_url(); ?>common/js.iepngfix_tilebg.js"></script>
		<style>
			/* Add comma-separated CSS selectors */
		 	img, div { behavior: url("iepngfix.htc") }
		</style>
	<![endif]-->
	<!--[if lt IE 8 ]>
		<script src="<?php echo base_url(); ?>common/js/ie-css3.js?v=1"></script>
	<![endif]-->
</body>
</html>