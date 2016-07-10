<?php
$json = file_get_contents('http://vibrantingpixels.co.nf/details.php');
$obj = json_decode($json);
foreach ($obj as $key => $value) {
	print_r($value[0]);
}
?>
