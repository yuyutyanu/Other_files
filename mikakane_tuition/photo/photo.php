<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>mikakanelesson</title>
	<link href="./photo.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCP_uYrL9C5iUgcoNbOuk1U-pCh9PpijbUAIzaSyCP_uYrL9C5iUgcoNbOuk1U-pCh9PpijbU&sensor=true&language=ja" charset="utf-8"></script>
	<style>
	#map{
		width:100%;
		height:100%;
	}
	</style>
<script>
lightbox.option({
	'resizeDuration': 200,
	'wrapAround': true
})
</script>
</head>

<body>
	<div class="controls">
		<a id="logout" href="#">Logout</a>
	</div>

	<div id="Container" class="container">
		<form class="" action="#" method="post">
			<input type="file" name="name" value="">
			<input type="submit">
		</form>

		<?php
		if(!empty($_POST["name"])){
		$img = './photos/'.$_POST["name"];
		$exif = @exif_read_data($img);

		if(isset($exif['GPSLatitudeRef'])||isset($exif['GPSLatitude'])||isset($exif['GPSLongitudeRef'])||isset($exif['GPSLongitude'])){
		$gps_n_or_s = $exif['GPSLatitudeRef'];
		$gps_lati = $exif['GPSLatitude'];
		$gps_e_or_w = $exif['GPSLongitudeRef'];
		$gps_longi = $exif['GPSLongitude'];

		//N or S
		print $gps_n_or_s."&nbsp";
		$i=0;
		while($i<3){
			//gps情報を　○○/△△　から　小数点の値に変更
			$latitude = explode("/",$gps_lati[$i]);
			$data1 = $latitude[0] / $latitude[1]."&nbsp";
			$i+=1;
			//方角が南なら緯度をマイナスに
			if($gps_n_or_s=='S'){
				$data1=$data1*-1;
			}
			echo $data1;
}
// E or W
print $gps_e_or_w."&nbsp";
$j=0;
while($j<3){
	//gps情報を　○○/△△　から　小数点の値に変更
	$longitude = explode("/",$gps_longi[$j]);
	$data2 = $longitude[0] / $longitude[1]."&nbsp";
	$j+=1;
	//方角が西なら経度をマイナスに
	if($gps_e_or_w=='W'){
		$data2 = $data2*-1;
	}
echo $data2;
}
	}
	else{
		echo 'この画像にはgps情報が入っていません';
	}
}
		 ?>

		 <div id="map"></div>
		 <script>
		 var latlng = new google.maps.LatLng(35.66, 139.69);
		 var options = {
			 zoom: 15,
			 center: latlng,
			 mapTypeId: google.maps.MapTypeId.ROADMAP
		 };
		 var map = new google.maps.Map(document.getElementById('map'),options);
		 </script>
		<br>
		<a href="./photos/1.jpg" data-lightbox="image" data-title="test"><img src="./photos/1.jpg"/></a>
		<a href="./photos/p1.jpg" data-lightbox="image" data-title="test"><img src="./photos/p1.jpg"/></a>
		<a href="./photos/3.jpg" data-lightbox="image" data-title="test"><img src="./photos/3.jpg"></a>
		<a href="./photos/p3.jpg" data-lightbox="image" data-title="test"><img src="./photos/p3.jpg"></a>
		<a href="./photos/2.jpg" data-lightbox="image" data-title="test"><img src="./photos/2.jpg"></a>
		<a href="./photos/p2.jpg" data-lightbox="image" data-title="test"><img src="./photos/p2.jpg"></a>
		<a href="./photos/4.jpg" data-lightbox="image" data-title="test"><img src="./photos/4.jpg"></a>
		<a href="./photos/p4.jpg" data-lightbox="image" data-title="test"><img src="./photos/p4.jpg"></a>
		</div>



		<script src="./photo.js" charset="utf-8"></script>
		<link rel="stylesheet" href="./lightbox2-master/dist/css/lightbox.css" media="screen" title="no title" charset="utf-8">
		<script src="./lightbox2-master/dist/js/lightbox.js" charset="utf-8"></script>
</body>

</html>
