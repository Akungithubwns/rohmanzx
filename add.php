<?php
include "tools.php";
$RandKey = file_get_contents("Irul.txt");
if(empty($_GET['RandKey'])){
redirect('./login.php');
}
if($_GET['RandKey'] == $RandKey){

$RandKey = $_GET['RandKey'];

alert('Hay '.$RandKey.'');
$id = bin2hex(random_bytes(4));

if($_POST){
	$warna = $_POST['hitam'];
	$title = $_POST['title'];
	$header = $_POST['header'];
	$paragraf = $_POST['paragraf'];
	$url = $_POST['url'];
	
	if($warna == "hitam")
	{
		$data = $title."|".$header."|".$paragraf."|".$url;
	$db = "db/";
	$bikin = file_put_contents($db.$id.".txt", $data);
	if( $bikin ){
		$website = 'https://'.$_SERVER['SERVER_NAME'].'/?id=';
		$short_link = $website.$id;
		$response = $short_link;
		redirect($response);
	}else{
	
	}
}else{
		
		alert('eror');
		redirect('./add.php');
		exit();
		}
	//edirect($response);
}else{
?>
	

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRATE DEK</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
<form method="POST" action="" autocomplete="off">
<input type="text" autofocus name="title" placeholder="title website" required="required" />
<input type="text" autofocus name="header" placeholder="Nama Web" required="required" />
<input type="text" autofocus name="paragraf" placeholder="Kata kata" required="required" />
<input type="url" autofocus name="url" placeholder="Link Web" required="required" />
<button type="submit" class="btn btn-primary btn-block btn-large">Create</button>
</form>
</div>
</body>
</html>
<?php
}
}else{
	redirect('./login.php');
	}
?>