<?php
if($status=="Open"){
  sethue("sBed_RGBW",220,40);
  notify("Alarm","Armed Home");
}

if($status=="Closed"){
  sethue("sBed_RGBW",128,40);
}
