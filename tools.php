<?php
function alert($msg){
	echo "<script type='text/javascript'>alert('$msg');</script>";
	
	}
	function redirect($url){
	echo '<script>window.location="'.$url.'";</script>';
	
	}