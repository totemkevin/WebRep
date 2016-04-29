<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class = "Lbar" >
			<?php
				$LBList = array("class", 
								"class_constraint",	
								"content",
								"pat_usage",
								"relationship",
								"requirement");

				foreach($LBList as $lbl)
				{
					echo "<div class='LBList'><a href='".$lbl.".php'>".$lbl."</a> </div>";
				}
			?>
				
		</div>
</body>
</html>
