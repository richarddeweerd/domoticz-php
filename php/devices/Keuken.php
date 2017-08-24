<?php
if($status!="Off"){
  //notify("Help","Overloop");
  //sethue("Bed_RGBW",220,40);
  sethue("AppLamp_Keuken",128,40,true);
}else{
  sw("AppLamp_Keuken","Off")
}
