<?php
	include('../connDB/mysql.php');
	include('../connDB/shoplist_shopinfo.php');
	$shoplist_shopinfo =new shoplist_shopinfo(new Mysql());
	
	$shoplist_shopinfo->Select();
	
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
			document.getElementById("self").style.visibility="hidden";
			document.getElementById("createshopping").style.visibility="hidden";
		}
	});
	
</script>
<body>
	<div id="content">
		<?php include("head.php");?>
		<div id="leftField" class="field">
		<?php while($shoplist_shopinfo->HasNext()){?>
			Shop Class:	<?php echo $shoplist_shopinfo->shopclass; ?><br>
			Shop Name:	<?php echo $shoplist_shopinfo->shopname; ?><br>
			Shop Address:	<?php echo $shoplist_shopinfo->address; ?><br>
			Shop Opentime:	<?php echo $shoplist_shopinfo->opentime; ?><br>
			Shop Info:	<?php echo $shoplist_shopinfo->info; ?><br>
			<button id="self" onclick="location.href='<?php echo $_GET['shopname'];?>_menu.php?ac=<?php echo $_GET['ac'];?>'">個人訂購</button>
			<button id="createshopping" onclick="location.href='createshopping.php?id=<?php echo $_GET['id'];?>'">發起團購</button>
		<?php }?>
			
		</div>
		<div id="rightField" class="field">
			Shop menu</br>
			<img src="../img/menu_image.jpg" height="460px" width="450px"/>
				
		</div>
	</div>
	
</body>