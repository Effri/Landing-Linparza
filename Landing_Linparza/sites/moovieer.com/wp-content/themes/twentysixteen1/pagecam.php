<?php
/*
 Template name: LandingCamera
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Landing Linparza</title>
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <?php wp_head(); ?>
</head>
<div id="my_camera" style="width:640px; height:480px;"></div>

<div id="my_result"></div>

<script language="JavaScript">
Webcam.set({
width: 640,
height: 480,
image_format: 'jpeg',
jpeg_quality: 90
});
Webcam.attach( '#my_camera' );

function take_snapshot() {
// take snapshot and acquire image data
Webcam.snap( function(data_uri) {
// snap complete, image data is in 'data_uri'

Webcam.on( 'uploadProgress', function(progress) {
// Upload in progress
// 'progress' will be between 0.0 and 1.0
} );

Webcam.on( 'uploadComplete', function(code, text) {

location.reload();

// Upload complete!
// 'code' will be the HTTP response code from the server, e.g. 200
// 'text' will be the raw response content
} );

var postid = '<?php echo $postid ?>';
var url = '<?php echo get_stylesheet_directory_uri() . 'myscript.php?postid='; ?>' + postid;

Webcam.upload( data_uri, url, function(code, text) {
// Upload complete!
// 'code' will be the HTTP response code from the server, e.g. 200
// 'text' will be the raw response content
} );
} );
}
</script>


<form>

    <input type="button" value="Take Snapshot" onclick="take_snapshot()">

</form>
</html>