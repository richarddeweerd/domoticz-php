<?PHP
error_reporting(0);
header("Content-type: text/html; charset=utf-8");
//require_once "settings.php";
//require_once "functions.php";
require_once "findmyiphone.php";
$appledevice='eOZ+tErAIlY56vlNrv2IYqByL/pysQhnHdABF+bTbllONkYVKppJReHYVNSUzmWV';
$appleid='richard@deweerd.biz';
$applepass='###';
try {
	$fmi = new FindMyiPhone($appleid, $applepass);
} catch (Exception $e) {
	print "Error: ".$e->getMessage();
	exit;
}
$fmi->printDevices();
