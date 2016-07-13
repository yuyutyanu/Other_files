<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>mikakanelesson</title>
	<link href="./gps.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<style>
	#map{
		margin-top:25px;
		margin-left:2.5%;
		width:95%;
		height:500px;
		box-shadow: 10px 10px 10px ;
	}
	</style>

</head>

<body>
	<div class="controls">
		<a id="logout" href="#">Logout</a>
	</div>

	<div id="Container" class="container">
		<form  action="#" method="post">
			<input class="button"type="file" name="name" value="">
			<input class="button" type="submit"value="gpsget">
			<input type="text" id="address" value="">
			<input class="button" type="submit"  value="go" onclick="codeAddress()">
		</form>
<div id="gps">
			<?php
			//exifdataを取り出す
		if(!empty($_POST["name"])){
		$img = './photos/'.$_POST["name"];
		$exif = @exif_read_data($img);

		//exifdataからgpsに関係のあるものだけを取り出す
		if(isset($exif['GPSLatitudeRef'])||isset($exif['GPSLatitude'])||isset($exif['GPSLongitudeRef'])||isset($exif['GPSLongitude'])){
		$gps_n_or_s = $exif['GPSLatitudeRef'];
		$gps_lati = $exif['GPSLatitude'];
		$gps_e_or_w = $exif['GPSLongitudeRef'];
		$gps_longi = $exif['GPSLongitude'];

//緯度
		$i=0;
		$latitude_data="";
		while($i<3){
			//gps情報を　○○/△△　から　小数点の値に変更
			$latitude = explode("/",$gps_lati[$i]);
			$data1 = $latitude[0] / $latitude[1]."&nbsp";
			$latitude_data=$latitude_data.$data1;
			$i+=1;
		}
			//方角が南なら緯度をマイナスに
			if($gps_n_or_s=='S'){
				$data1=$data1*-1;
			}
//経度
$j=0;
$longitude_data="";
while($j<3){
	//gps情報を　○○/△△　から　小数点の値に変更
	$longitude = explode("/",$gps_longi[$j]);
	$data2 = $longitude[0] / $longitude[1]."&nbsp";
	$longitude_data = $longitude_data.$data2;
	$j+=1;
}
	//方角が西なら経度をマイナスに
	if($gps_e_or_w=='W'){
		$data2 = $data2*-1;
	}
}
	else{
		echo '<h2>この画像にはgps情報が入っていません</h2>';
	}
}
//　echo N　or S + 緯度  + W or E + 経度
if(isset($gps_n_or_s)||isset($latitude_data)||isset($gps_e_or_w)||isset($longitude_data)){
$gpsposition = "<span style='font-size:20px;'> GPSposition :".$gps_n_or_s."&nbsp".$latitude_data.$gps_e_or_w."&nbsp".$longitude_data."</span>";
echo $gpsposition;
}
?>
</div>
		 <div id="map"></div>
		 <script>
		 var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}
</script>
<script async defer
 	src="http://maps.google.com/maps/api/js?key=AIzaSyCP_uYrL9C5iUgcoNbOuk1U-pCh9PpijbU&language=ja&callback=initMap"></script>
</script>
		<script src="./gps.js" charset="utf-8"></script>
		<link rel="stylesheet" href="./lightbox2-master/dist/css/lightbox.css" media="screen" title="no title" charset="utf-8">
		<script src="./lightbox2-master/dist/js/lightbox.js" charset="utf-8"></script>
</body>
</html>
