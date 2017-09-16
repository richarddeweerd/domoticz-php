<?php
if($status=='Off'){
    apcu_store('s'.$device,'Off');
}
else {
    apcu_store('s'.$device,$status);
}
@include '/opt/jarvis/php/devices/_check_buitenlamp.php';
?>