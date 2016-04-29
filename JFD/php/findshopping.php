<?php
include('../connDB/mysql.php');
	include('../connDB/shoppinglist.php');
	$shoppinglist=new shoppinglist(new Mysql());
	$shoppinglist->Select();
	if(isset($_POST['name']))
	{
		$shoppinglist->Insert($_POST['name'],$_POST['depart'],$_POST['shopclass'],$_POST['shopname'],$_POST['deadline']);
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>
			Just for delicious
		</title>
  		<link rel="stylesheet"  type="text/css" href="../css/usepage.css">
  		<script src="../jquery-2.1.3.min.js"></script>	
</head>
<script>
	$(function()
	{
		if("<?php echo $_GET['ac']?>"=="visit")
		{
			var a=document.getElementsByClassName("add");
			for(i=0;i<a.length;i++)
			{
				a[i].style.visibility="hidden";
				
			}
		}
	});
</script>

<body>
	<div id="content">
		<?php include("head.php");?>
		<div id="leftField" class="longfield">
		目前已發起的團購
		<HR color="#000000" size="2" ></HR>
		<div>編號	發起人 系級 店種 店名 截止時間</div>
		<HR color="#000000" size="2" ></HR>
		<?php while($shoppinglist->HasNext())
		{
		?>
		
			<div><?php echo $shoppinglist->id."	" .$shoppinglist->name."	"  .$shoppinglist->depart."	"  .$shoppinglist->shopclass."	" . $shoppinglist->shopname."	" . $shoppinglist->deadline;?><button class="add" onclick="javascript:location.href='mrsun_menu.php?order=shopping&id=<?php echo $shoppinglist->id;?>'" >加入</button><button   onclick="javascript:location.href='checkorder.php?id=<?php echo $shoppinglist->id;?>'">查看</button></div>
		<?php 
		}
		?>
		</div>
	</div>
	
</body>