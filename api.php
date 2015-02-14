<?php
/*
index.php

*/

if(isset($_REQUEST['cat']))
{
	switch($_REQUEST['cat'])
	{
		case "box":
			include('data/bond-box-office.js');
			break;
		default:
			include('data/bond-year.js');
	}
}else{

	echo "No parameter sent";

}
