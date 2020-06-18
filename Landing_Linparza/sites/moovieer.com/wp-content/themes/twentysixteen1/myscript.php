<?php
require_once('../../../../../wp-load.php');

$name = date('YmdHis');
$upload_dir = wp_upload_dir();
$imagename = $upload_dir['basedir'] . 'bas' . $name . '.jpg';

move_uploaded_file($_FILES['webcam']['tmp_name'], $imagename);

$home_url = home_url();
$member_pic_url = $home_url . '/wp-content/uploads/bas/' . $name . '.jpg';

$postid = $_GET['postid'];
update_field('foto', $member_pic_url, $postid);
?>