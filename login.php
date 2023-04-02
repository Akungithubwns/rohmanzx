<?php
date_default_timezone_set("Asia/Makassar");
include "tools.php";
	$RandKey = file_get_contents("Irul.txt");
if(isset($_POST['RandKey']))
{
    
        if($RandKey == $_POST['RandKey'])
        {
            $hasil = TRUE;
            $RandKey = $_POST['RandKey'];
        }else{
        	$hasil = FALSE;
        	}
    
    
    if($hasil){ 	
    redirect('./add.php?RandKey='.$RandKey.'');
    	}
    	}
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Shortlink V e n n ×</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>
<br>
<div class="login">

<form method="POST" action="" autocomplete="off">
<br>
	<br>
		<br>
		<br>
	<br>
		<br>
<input type="text" autofocus name="RandKey" placeholder="WhatsApp Pembuat:0882006892060" required="required" />

<button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>

</form>

</div>

</body>

</html>