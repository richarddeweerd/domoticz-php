<?php
if($status=='Open'){
	$deurbadkamer='Open';
	if($zon<100){
		if(time>strtotime('5:00')&&time<strtotime('10:00')){
			if(apcu_fetch('slichtbadkamer1')=='Off')sw('lichtbadkamer1','On');
			if(apcu_fetch('slichtbadkamer2')=='On')sw('lichtbadkamer2','Off');
		}else{
			if(apcu_fetch('slichtbadkamer2')=='Off')sw('lichtbadkamer2','On');
			if(apcu_fetch('slichtbadkamer1')=='On')sw('lichtbadkamer1','Off');
		}
	}
}else{
	$deurbadkamer='Closed';
}