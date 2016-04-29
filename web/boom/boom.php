<html>

<head>
	<link rel="stylesheet" type="text/css" href="boom.css">
</head>
<script type="text/javascript">
	var setX=10;
	var setY=10;
	var boomNum=10;
	var boomArray=[11,30,45,55,62,89,90,91,92,95];

	function changecolor(x,y)
	{
		//createBoom();
		var s = document.getElementsByClassName("base");
		var po=pos(x,y);
		if(efind(x,y)==-1)
		{
			alert("booom~~");
		}
		else if(efind(x,y)==0)
		{
			s[po].innerHTML=efind(x,y);
			s[po].style.backgroundColor="green";
			if(x==0&y==0)//00
			{
				changecolor(x,(y+1));
				changecolor((x+1),y);
				changecolor((x+1),(y+1));
			}
			else if(x==0 & y!=0 & y!=setY-1)//top
			{
				changecolor(x,(y-1));
				changecolor(x,(y+1));
				changecolor((x+1),(y-1));
				changecolor((x+1),y);
				changecolor((x+1),(y+1));
			}
			else if(x==0 & y==setY-1)//010
			{
				changecolor(x,(y-1));
				changecolor((x+1),(y-1));
				changecolor((x+1),y);
			}
			else if(y==setY-1 & x!=0 & x!=setX-1)//R
			{
				changecolor((x-1),(y-1));
				changecolor((x-1),y);
				changecolor(x,(y-1));
				changecolor((x+1),(y-1));
				changecolor((x+1),y);
			}
			else if(x==setX-1 & y==setY-1)//1010
			{
				changecolor((x-1),(y-1));
				changecolor((x-1),y);
				changecolor(x,(y-1));
			}
			else if(y==setY-1 & x!=setX-1 & x!=setX-1)//B
			{
				changecolor((x-1),(y-1));
				changecolor((x-1),y);
				changecolor(x,(y-1));
				changecolor((x-1),(y+1));
				changecolor(x,(y+1));
			}
			else if(x==setX-1&y==0)//100
			{
				changecolor((x-1),y);
				changecolor((x-1),(y+1));
				changecolor(x,(y+1));
			}
			else if(y==0 & x!=0 & x!=setX-1)//L
			{
				changecolor((x-1),y);
				changecolor((x-1),(y+1));
				changecolor(x,(y+1));
				changecolor((x+1),y);
				changecolor((x+1),(y+1));
			}
			else
			{
				changecolor((x-1),(y-1));
				changecolor((x-1),y);
				changecolor((x-1),(y+1));
				changecolor(x,(y-1));
				changecolor(x,(y+1));
				changecolor((x+1),(y-1));
				changecolor((x+1),y);
				changecolor((x+1),(y+1));
			}
		}
		else if(efind(x,y)!=0)
		{
			s[po].style.backgroundColor="green";
			s[po].innerHTML=efind(x,y);
		}
	}

	function efind(x,y)
	{
		var count=0;
		for(i=0;i<10;i++)
		{
			if(boomArray[i]==pos(x,y))
			{
				return -1;
			}
			else
			{
				if(boomArray[i]==pos((x-1),(y-1)))
					count+=1;
				if(boomArray[i]==pos((x-1),y))
					count+=1;
				if(boomArray[i]==pos((x-1),(y+1)))
					count+=1;
				if(boomArray[i]==pos(x,(y-1)))
					count+=1;
				if(boomArray[i]==pos(x,(y+1)))
					count+=1;
				if(boomArray[i]==pos((x+1),(y-1)))
					count+=1;
				if(boomArray[i]==pos((x+1),y))
					count+=1;
				if(boomArray[i]==pos((x+1),(y+1)))
					count+=1;
			}
				

		
		}
		return count;
		
	}
	
	function createBoom()
	{
		for(i=0;i<boomNum;i++)
		{
			boomArray.push();
		}
	}
	function pos(x,y)
	{
		return x*10+y;
	}

</script>
<body>
	<div class="outer">
	<?php 

		for($x = 0; $x < 10; $x++)
		{
			for($y = 0; $y < 10; $y++)
			{
				echo "<div class='base' onclick='changecolor($x,$y)'>$x,$y</div>";//changecolor($x,$y)
			}
		}
	?>
	</div>
	

</body>

</html>