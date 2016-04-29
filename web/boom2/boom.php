<html>

<head>
	<link rel="stylesheet" type="text/css" href="boom.css">
</head>
<script type="text/javascript">
	var setX=10;
	var setY=10;
	var boomNum=10;
	var boomArray=[11,30,45,55,62,89,90,91,92,95];

	function changecolor(pos,bool)
	{
		var s = document.getElementsByClassName("base");
		if(bool==0)
			s[pos].style.backgroundColor="green";
		else
			s[pos].style.backgroundColor="red";
	}
	function pos(x,y)
	{
		return 10*x+y;
	}
	function checkboom(x,y)
	{
		for(i=0;i<10;i++)
		{
			if(pos(x,y)==boomArray[i])
			{
				return false;
			}
		}
		return true;
	}

	function boom(x,y)
	{
		if(checkboom(x,y))
		{
			changecolor(pos(x,y),0);
		}
		else
		{
			for(i=0;i<10;i++)
			{
				changecolor(boomArray[i],1);
			}
			alert("boom");
		}
	}

	function searchSafePlace(x,y)
	{
		var set=set9p(x,y);
		switch(set)
		{
			case 1:
				
			case 2:

			case 3:

			case 4:

			case 5:

			case 6:

			case 7:

			case 8:

			case 9:

		}

	}
	function set9p(x,y)
	{
		if(x==0&y==0)//00
		{
			return 1;
		}
		else if(x==0 & y!=0 & y!=setY-1)//top
		{
			return 2;
		}
		else if(x==0 & y==setY-1)//010
		{
			return 3;
		}
		else if(y==setY-1 & x!=0 & x!=setX-1)//R
		{
			return 4;
		}
		else if(x==setX-1 & y==setY-1)//1010
		{
			return 5;
		}
		else if(y==setY-1 & x!=setX-1 & x!=setX-1)//B
		{
			return 6;
		}
		else if(x==setX-1&y==0)//100
		{
			return 7;
		}
		else if(y==0 & x!=0 & x!=setX-1)//L
		{
			return 8;
		}
		else
		{
			return 9;
		}
	}
</script>
<body>
	<div class="outer">
	<?php 

		for($x = 0; $x < 10; $x++)
		{
			for($y = 0; $y < 10; $y++)
			{
				echo "<div class='base' onclick='boom($x,$y)'>$x,$y</div>";//changecolor($x,$y)
			}
		}
	?>
	</div>
	

</body>

</html>