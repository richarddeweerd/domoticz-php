<?php
if($status=='Off')apcu_store('s'.$device,'Off');
//else apcu_store('s'.$device,filter_var($status,FILTER_SANITIZE_NUMBER_INT));
else apcu_store('s'.$device,$status);
@include '/opt/jarvis/php/devices/_check_keukendimmer.php';
?>