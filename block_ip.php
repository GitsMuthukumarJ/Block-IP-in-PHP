Block List:

<?php $blacklist = array("123.456.789", "456.789.123", "789.123.456");

if(in_array($_SERVER['REMOTE_ADDR'], $blacklist)) {

	header("Location: http://domain.tld/path/custom.php");

	exit();

} ?>



-------------------------------------


<?php
if(strpos($_SERVER["HTTP_CF_CONNECTING_IP"], "2405:201:e038:d027") !== 0)
{
    die("<!DOCTYPE html><html><head><title>403</title></head><body>You are forbidden from accessing this resource! Need Admin Permission! Thank You.</body></html>");
}
?>


--------------------------------------


<?php
if(strpos($_SERVER["HTTP_CF_CONNECTING_IP"], "2405:201:e038:") !== 0 || strpos($_SERVER["HTTP_CF_CONNECTING_IP"] == '117.216.45.2') !== 0 || strpos($_SERVER["HTTP_CF_CONNECTING_IP"] == '115.246.248.218') !== 0 || strpos($_SERVER["HTTP_CF_CONNECTING_IP"] == '2409:4072:6480:') !== 0)
{
   die("<!DOCTYPE html><html><head><title>403</title></head><body>You are forbidden from accessing this resource! Need Admin Permission! Thank You.</body></html>");
}
?>
