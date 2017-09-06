<?php
if($status=="Open"){
  sethue("Bed_RGBW",220,40,false);
  notify("Alarm","Armed Home");
} else if ($status=="Closed"){
  sethue("Bed_RGBW",128,40,false);
}
