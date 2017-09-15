<?php
if($status=="Open"){
    //Power lost
    notify("Alarm", "Power Lost");
}
elseif ($status=="Closed"){
    //Power returned
    notify("Alarm", "Power Returned");
}
?>