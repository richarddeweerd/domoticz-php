<?php
if($status=="Open"){
  sethue("sBed_RGBW",1,100,false);
  notify("Alarm","Inbraak Alarm");
}

if($status=="Closed"){
  sethue("sBed_RGBW",128,40,false);
}
