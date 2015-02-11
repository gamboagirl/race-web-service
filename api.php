<?php
//api.php

if(isset($_REQUEST['cat']))
{
	switch($_REQUEST['cat'])
	{
        case "races2run":
			include('data/races2run.js');
			break;
		case "fiction":
			include('data/fiction.js');
			break;
		default:
			include('data/non-fiction.js');
	}
}else{

	echo "No parameter sent";

}
