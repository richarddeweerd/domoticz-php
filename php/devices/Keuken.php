<?php
if($status!="Off"){
  //notify("Help","Overloop");
  //sethue("Bed_RGBW",220,40);
  if(apcu_exists('sKeuken')){
    setdimmer("AppLamp_Keuken",$status);
  } else {}


}else{
  sw("AppLamp_Keuken","Off");
}
