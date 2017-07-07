<?PHP
if(isset($_REQUEST['text'])){
	$appledevice='eOZ+tErAIlY56vlNrv2IYqByL/pysQhnHdABF+bTbllONkYVKppJReHYVNSUzmWV';
	$appleid='richard@deweerd.biz';
	$applepass='###!';
	require_once('findmyiphone.php');
	$fmi=new FindMyiPhone($appleid,$applepass);
	echo $fmi->playSound($appledevice,$_REQUEST['text']);
}
