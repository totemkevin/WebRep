<?php
	if(isset($_GET['name']))
	{
		for ($i=0; $i < 5; $i++) { 
			echo $_GET['name'][$i];
		}
		
	}
?>