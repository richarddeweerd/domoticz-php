<?php
if(apcu_fetch('sslapen')=='On'){
	if(apcu_fetch('sachterdeur')!='Open'){sw(apcu_fetch('ideurbel'),'On');telegram('Opgelet: Achterdeur open!',false,2);}
	if(apcu_fetch('sraamliving')!='Closed'){sw(apcu_fetch('ideurbel'),'On');telegram('Opgelet: Raam Living open!',false,2);}
	if(apcu_fetch('spoort')!='Closed'){sw(apcu_fetch('ideurbel'),'On');telegram('Opgelet: Poort open!',false,2);}
	$items=array('hall','bureel','denon','tv','tvled','kristal','eettafel','zithoek','garage','terras','tuin','voordeur','keuken','werkblad','wasbak','kookplaat');
	foreach($items as $item)if(apcu_fetch('s'.$item)!='Off')sw(apcu_fetch('i'.$item),'Off',$item);
	$items=array('pirkeuken','pirgarage','pirinkom','pirhall');
	foreach($items as $item)if(apcu_fetch('s'.$item)!='Off')ud(apcu_fetch('i'.$item),0,'Off');
	double(apcu_fetch('iGroheRed'),'Off');
	/*if(apcu_fetch('sluifel')!='Open')sw(apcu_fetch('iluifel'),'Off','zonneluifel dicht');*/
}
if(apcu_fetch('slichten_auto')=='Off')sw(apcu_fetch('ilichten_auto'),'On','lichten auto aan');