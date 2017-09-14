<?php
//Storing all user variables to APCU

$domoticz=json_decode(file_get_contents('http://192.168.1.200:8080/json.htm?type=command&param=getuservariables'),true);

if($domoticz){
	foreach($domoticz['result'] as $dom){
		$name=$dom['Name'];
		apcu_store('vt'.$name,strtotime($dom['LastUpdate']));
		apcu_store('vi'.$name,$dom['idx']);
		apcu_store('vv'.$name,$dom['Value']);    
  }
}