<?php
include "tools.php";
if( !isset($_GET['id']) || empty($_GET['id']) ){
	redirect('./login.php');
	}else{
		$url = $_GET['id'];
		//echo $id;
		
	if( file_exists("db/$url.txt") ){
		$urlasli = file_get_contents("db/$url.txt");
		
		$parts = explode("|",$urlasli);
		

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title><?= $parts[0] ?></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<link rel="stylesheet" href="css/<?= $parts[1] ?>.css">
 </head>
 <body>
 	<div class="container mt-5">
 	     <center><h1 class="p-2">~ <?= $parts[2] ?> ~
</h1>
         <center><p1 class="p-2"><?= $parts[3] ?>
</p1>

 			<div style="text-align: center;"><br /><img src="https://brojuven.com/wp-content/uploads/2018/06/panah-order.gif" alt="" width="100" height="100" /><br /><br />
<a href=<?= $parts[4] ?>><div class="button-63">KLIK DI SINI</div></a>
        </div>
 	</div>
 	
 </body>
 </html>



<?php

}else{
		redirect('./login.php');
	}
   
}
?>