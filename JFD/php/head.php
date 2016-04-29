<?php

?>
<div id="head">
</div>
<div id="navbar">
	<a href="shopList.php?ac=<?php echo $_GET['ac'];?>"><div id="shopList" class="navitem">商家列表</div></a>
	<a href="findshopping.php?ac=<?php echo $_GET['ac'];?>"><div id="findshopping" class="navitem">尋找訂購</div></a>
</div>
	
<script>
	var url = window.location.toString(); //取得當前網址
    var str = ""; //參數中等號左邊的值
    var ary = url.split("/");
    for (var i in ary) 
    {
        str = ary[i];
    }
	$(function()
	{
		if(str=="shopList.php")
		{
			document.getElementById("shopList").style.background="#444444"
		}
		else if(str=="findshopping.php")
		{
			document.getElementById("findshopping").style.background="#444444"
		}
	});
</script>
