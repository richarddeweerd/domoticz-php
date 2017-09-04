<?php
lg($status);

if($status=="Off"){
  #open
  sw("Gordijnen_Openen",'On');
  sw("Gordijnen_Openen",'Off');

}elseif ($status=="On") {
  # Close
  sw("Gordijnen_Sluiten",'On');
  sw("Gordijnen_Sluiten",'Off');

} else{

}
