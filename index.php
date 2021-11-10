
<?php
if(isset($_POST["submit"])){
$data=$_POST["data"];
if($_POST["width"]!=""){
	$width=$_POST["width"];
}else{
	$width="250";
}	
if($_POST["height"]!=""){
	$height=$_POST["height"];
}else{
	$height="250";
}	
$url="https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";	
$qr["img"]= $url;
}

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
<meta charset="UTF-8">
<title>QR Code generator with PHP</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>



<div class="bg-light">
<div class="container py-5">
<div class="row">
<div class="col-mid-5 col-8 shadow bg-white border mx-auto p-4">
<center>
<h1>
QR Code generator with PHP
</h1>
</center>
<form action="" method="POST">

<div class="form-group mb-3">
<label for="" class="form-label">Data </label>
<input type="text" class="form-control" name="data" id="data" placeholder="Ex: Monirul Islam Prince" required> </input>
</div>

<div class="form-group row">
<div class="col-4">
<label for="" class="form-label">Width </label>
<input type="number" class="form-control" name="width" id="width" placeholder="Ex: 250px" > </input>
</div>
<div class="col-4">
<label for="" class="form-label">Hight </label>
<input type="number" class="form-control"  name="height" id="height" placeholder="Ex: 250px" > </input>
</div>
<?php if(isset($qr)){ ?>
	<div class="col-3">
<img src="<?php echo $qr["img"] ?>" alt ="QR Code" width=100% height=100%>
</div>
<?php } ?>

</div>
<div class="col-3">
<button type="submit" name="submit" class="btn btn-primary">Generate</bitton>
</div>
</form>
</div>
</div>

</div>



</div>
</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

