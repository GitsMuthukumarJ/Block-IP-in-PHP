Block List:

<?php $blacklist = array("123.456.789", "456.789.123", "789.123.456");

if(in_array($_SERVER['REMOTE_ADDR'], $blacklist)) {

	header("Location: http://domain.tld/path/custom.php");

	exit();

} ?>
