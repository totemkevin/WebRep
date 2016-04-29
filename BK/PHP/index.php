<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
						include 'select.php';
						$ItemClass=getItemClass();
						foreach($ItemClass as $class)
						{
							echo "<h3>".$class."</h3>";
							$ItemName=getItemName($class);
							$x=0;
							echo "<div class='list'>";
							foreach($ItemName as $name)
							{
								echo "<li id='".$class.$x."' 
								onclick=b('".$class.$x."','".$name."','".getItemPrice($name)."')>".$name."   ".getItemPrice($name)."</li>";
								$x=$x+1;
							}
							echo "</div>";
						}	
					?>
				</div>
		 
				
			</div>
			<div id="shoppingCar" class="ui-widget-content">
			<form>
				<div>shoppingcar</div>
				<div id="order_itemName" ><div class="addClass">餐點</div></div>
				<div id="order_itemNum"><div class="addClass">數量</div></div>
				<div id="order_itemPrice"><div class="addClass">價錢</div></div>
				<div id="order_itemDel"><div class="addClass">取消</div></div>
				
			</form>
					
			</div>
		</div>
	</body>
</html>