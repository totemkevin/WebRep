<?php

include('../connDB/mysql.php');
include('../connDB/menulist_item.php');
include('../connDB/menulist_itemclass.php');
$menulist_item =new menulist_item(new Mysql());
$menulist_itemclass =new menulist_itemclass(new Mysql());
$menulist_itemclass->Select();

	

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>
			Mr.Sun
		</title>
		<link rel="stylesheet"  type="text/css" href="../CSS/style.css">
		<link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.css">
  		<script src="../jquery-2.1.3.min.js"></script>
  		<script src="../jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
		
		<script>
		
			$(function() {
			    $( "#accordion" ).accordion({
			      heightStyle: "fill"
			    });
			  });
			  
			  var order_itemName=[];
			  var order_itemPrice=[];
			  var length;
			  function b(id,name,price){
			  	var x=document.getElementById(id).style.background;
			  	if(x != "rgb(221, 221, 221)" )
			  	{
					document.getElementById(id).style.background="#DDDDDD";
					document.getElementById(id).style.color="#AAAAAA";
					document.getElementById(id).style.borderColor="#AAAAAA";
					
					$("#order_itemPrice").append("<div id='"+name+"price' class='addClass'>"+price+"元</div>");
					$("#order_itemName").append("<div 'id'="+name+" class='addClass'>"+name+"</div>");
					$("#order_itemNum").append("<div class='addClass'><input id='input"+name+"' name='"+name+"' onchange='change(this.value,this.name,"+price+")' type='number' min='1' value='1'></input></div>");
					$("#order_itemDel").append("<div class='delClass'><img class='cimg' src='../img/cross.png'></div>");
					
					
				}
			  	length=order_itemName.push(name);
			  	order_itemPrice.push(price);  	
			  }
			
			  function change(v,n,p)
			  {
			  	document.getElementById(n+"price").innerHTML=v*p+"元";
			  }	
		</script>
	</head>

	 
	<body>
		<div id="header">
			<div id="headimg"><img src="../img/header.jpg"></div>
			
			
		</div>
		<div id="Hbar"></div>
		<div id="con">
			<div id="fi" >
				<div id="accordion">
					 <?php
						while($menulist_itemclass->HasNext())
						{
							echo "<h3>".$menulist_itemclass->className."</h3>";
							$x=0;
							echo "<div class='list'>";
							$menulist_item->Select();
							while($menulist_item->HasNextInClass($menulist_itemclass->className))
							{
								if($menulist_itemclass->className==$menulist_item->itemClass)
								{
									echo "<li id='".$menulist_item->itemName.$x."' onclick=b('".$menulist_item->itemName.$x."','".$menulist_item->itemName."','".$menulist_item->price."')>".$menulist_item->itemName."   ".$menulist_item->price."</li>";
									$x=$x+1;
								}
								
							}
							echo "</div>";
						}	
					?>
				</div>
		 
				
			</div>
			<div id="shoppingCar" class="ui-widget-content">
			
				<div>shoppingcar</div>
				<div id="order_itemName" ><div class="addClass">餐點</div></div>
				<div id="order_itemNum"><div class="addClass">數量</div></div>
				<div id="order_itemPrice"><div class="addClass">價錢</div></div>
				<div id="order_itemDel"><div class="addClass">取消</div></div>
			<form action="">
			
			</form>
					<button onclick="javascript:location.href='checkorder.php'">送出</button>
			</div>
		</div>
	</body>
</html>