<?php
	include("../SQL/SQL_mysql.php");
	include("../SQL/SQL_class.php");
	include("../SQL/SQL_content.php");
	
	$content = new content(new Mysql());
	
	$class = new addclass(new Mysql());
	
	if(isset($_GET['content']))
	{
		$content->Select($_GET['content']);
		
	}
	
	if(isset($_POST['sub']) && $_POST['sub']!="")
	{
		$array=array($_POST['c1'],$_POST['c2'],$_POST['c3'],$_POST['c4'],$_POST['c5'],$_POST['c6'],$_POST['c7'],$_POST['c8'],$_POST['c9']);
		for($i=0;$i<count($array);$i++)
		{
			if(isset($array[$i])&& $array[$i]!="")
			{
				$class->Insert($_POST['content'],$array[$i],"");
			}
		}
		header("Location: subw_SC.php?search=".$_POST['content']); 
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  type="text/css" href="../CSS/style.css">
	<link rel="stylesheet"  type="text/css" href="../CSS/subwindow.css">
</head>
<body>
	<div id="header">分析模式導入工具</div>	
	<div id="content">
		<?php include('head.php'); ?>
		<div id="window">
			<div id="subwindow">
				<div id="showL">
					<?php while($content->HasNext()){ ?>
				
						Content</br>
						Name : <input type="text" disabled="disabled" value="<?php echo $content->name ; ?>"></input></br>
						Problem :</br>
						<textarea class="text" disabled="disabled" ><?php echo $content->problem ; ?></textarea></br>
						Solution :</br>
						<textarea class="text" disabled="disabled" ><?php echo $content->solution ; ?></textarea></br>
						Consequences :</br>
						<textarea class="text" disabled="disabled" ><?php echo $content->consequences ; ?></textarea>
						
					<?php } ?>
				</div>
				<div id="showR">
					Add Class</br>
					</br>
					<form action="addclass.php" method="POST" target="_self">
						Class1 : <input type="text" name="c1"/></br>
						Class2 : <input type="text" name="c2"/></br>
						Class3 : <input type="text" name="c3"/></br>
						Class4 : <input type="text" name="c4"/></br>
						Class5 : <input type="text" name="c5"/></br>
						Class6 : <input type="text" name="c6"/></br>
						Class7 : <input type="text" name="c7"/></br>
						Class8 : <input type="text" name="c8"/></br>
						Class9 : <input type="text" name="c9"/></br>
						<input type="hidden" value="<?php echo $_GET['content']; ?>" name="content"/>
						<input type="hidden" value="sub" name="sub"/>
						</br>
						<input type="submit" value="送出"/>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>