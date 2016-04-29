<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
	if(isset($_POST['account']))
	{
		if($_POST['account']!=null)
		{
			if($_POST['password']=="123")
			{
				if($_POST['id']=="user")
				{
					header('Location: php/shopList.php?ac='.$_POST['account']);
				}
				else if($_POST['id']=="manager")
				{
					header('Location: php/shopList.php?ac='.$_POST['account']);
				}
				
			}
			else
			{
				echo "<script>alert('密碼不正確');</script>";
			}
		}
		else
		{
			echo "<script>alert('帳號不存在');</script>";
		}
	}
	
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<title>
			Just for delicious
		</title>
		
		<link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.css">
  		<script src="jquery-2.1.3.min.js"></script>
  		<script src="jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
  		<link rel="stylesheet"  type="text/css" href="css/dist/css/bootstrap.css">
  		<link rel="stylesheet"  type="text/css" href="css/indexCSS.css">
		
</head>
<script>
	var id="user";
	
	
		
	function login()
	{
		var old=document.getElementById("loginField").innerHTML;
		if(id=="user")
		{
			document.getElementById("loginField").innerHTML="使用者登入<br>";
			document.getElementById("loginField").innerHTML+="<form  id='loginform' action='index.php' method='POST'  target='_self'>帳號：<input type='text' name='account' ></input><br/>密碼：<input type='password' name='password'></input><br/><input type='hidden' name='id' value="+id+"></input><br/><input type='submit' name='sub'' value='登入'></input></form>";
			
		}
		else if(id=="manager")
		{
			document.getElementById("loginField").innerHTML="管理員登入<br>";
			document.getElementById("loginField").innerHTML+="<form  id='loginform' action='index.php' method='POST'  target='_self'>帳號：<input type='text' name='account' ></input><br/>密碼：<input type='password' name='password'></input><br/><input type='hidden' name='id' value="+id+"></input><br/><input type='submit' name='sub'' value='登入'></input></form>";
		}
		else if(id=="visit")
		{
			document.location.href='php/shopList.php?ac=visit';
		}
	}
	function changeid(iid)
	{
		id=iid;
		login();
		
	}
</script>
<body>
	<div id="back">
		<div id='loginField' class='container'>
			校園周邊美食地圖<br>
			just for delicious~
		</div>
		<div id="btn1">
			<button type="button" class="btn btn-primary btn-lg btn-block" onclick="changeid('visit')">訪客登入</button>
			<button type="button" class="btn btn-primary btn-lg btn-block" onclick="changeid('user')">使用者登入</button>
			<button type="button" class="btn btn-primary btn-lg btn-block" onclick="changeid('fb')">Facebook登入</button>
			<button type="button" class="btn btn-primary btn-lg btn-block" onclick="changeid('manager')">管理員登入</button>
		</div>
		
	</div>
	
	
</body>
</html>