<?php
if (apcu_fetch('cron60') < time - 60){
	notify("Aquarium","Updates missed!");
}