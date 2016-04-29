<?php
	include('../connDB/mysql.php');
	include('../connDB/shoplist_class.php');
	include('../connDB/shoplist_shopname.php');
	$shoplist_class =new shoplist_class(new Mysql());
	$shoplist_shopname=new shoplist_shopname(new Mysql());
	
	$shoplist_class->Select();
	$shoplist_shopname->Select();
	
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
<body>
	<div id="content">
		<?php include("head.php");?>
		<div id="leftField" class="field">
			<form action="subw_CC.php" method="POST"  target="_self">
			Shop Class</br>
			<ul>
			<?php 
			while($shoplist_class->HasNext())
			{
			?>
				<a href="shopList.php?ID=<?php echo $shoplist_class->className; ?>&ac=<?php echo $_GET['ac']; ?>" ><li>
			  		<?php echo $shoplist_class->className;?>
			  	</li></a>
			<?php 
			}
			?>
			  
			</ul>
			
		</form>
		</div>
		<div id="rightField" class="field">
			Shop Name</br>
				<ul>
				<?php 
					if(isset($_GET['ID']))
					{
						$shoplist_shopname->SelectByClassName($_GET['ID']) ;
						if($shoplist_shopname->HasNext())
						{
				?>	
				<a href="<?php echo 'shop_info.php?shopname=mrsun&id=1&ac='.$_GET['ac']; ?>">
						<li>
					  		<?php echo $shoplist_shopname->shopname;?>
					  	</li></a>
				<?php 
						}
					}
				?>
				<ul>
		</div>
	</div>
	
</body>