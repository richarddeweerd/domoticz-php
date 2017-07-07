<?php
$domoticz=json_decode(file_get_contents('http://192.168.1.200:8080/json.htm?type=devices&used=true'),true);

if($domoticz){
	foreach($domoticz['result'] as $dom){
		$name=$dom['Name'];
		if(isset($dom['SwitchType'])){
      $switchtype=$dom['SwitchType'];
    }
    else {
      $switchtype='none';
    }
		apcu_store('t'.$name,strtotime($dom['LastUpdate']));
		apcu_store('i'.$name,$dom['idx']);
		if($dom['Type']=='Temp'){
      apcu_store('s'.$name,str_replace(' C','',$dom['Data']));
    }
    elseif($dom['TypeImg']=='current'){
      //apcu_store('s'.$name,str_replace(' Watt','',$dom['Usage']));
    }
		elseif($switchtype=='Dimmer') {
			if($dom['Data']=='Off'){
        apcu_store('s'.$name,'Off');
      }
			else {
        apcu_store('s'.$name,filter_var($dom['Data'],FILTER_SANITIZE_NUMBER_INT));
      }
		}
		else {
      apcu_store('s'.$name,$dom['Data']);
    }
  }
}
