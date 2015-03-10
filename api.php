<?php
//api.php

if(isset($_REQUEST['cat']))
{
	switch($_REQUEST['cat'])
	{
        case "state":
			include('data/races2runbystate.json');
			break;
		case "distance":
			include('data/races2runbydistance.json');
			break;
		default:
			include('data/races2run.json');
	}
}else{

	echo "No parameter sent";

}