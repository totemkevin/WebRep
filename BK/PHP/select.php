
<?php
		include '../SQL/db_conn.php';
		include '../SQL/db_func.php';
		
		
		function getItemClass()
		{
			$mcsql='SELECT * FROM `menuList_itemClass`';
			$mcres=db_query($mcsql);
			$mcnum=db_num_rows($mcres);
			$arr =array();
			for($i=0;$i<$mcnum;$i++)
			{
				$tmp =db_fetch_array($mcres);
				$input =$tmp['className'];
				array_push($arr,$input);
			}
			return $arr;
		}
		function getItemName($className)
		{
			$isql='SELECT `itemName` FROM `menuList_item` where `itemClass`= "'.$className.'"';
			$ires=db_query($isql);
			$inum=db_num_rows($ires);
			$arr =array();
			for($i=0;$i<$inum;$i++)
			{
				$tmp =db_fetch_array($ires);
				$iN =$tmp['itemName'];
				array_push($arr,$iN);
			}
			return $arr;
		}
		function getItemPrice($itemName)
		{
			$isql='SELECT `price` FROM `menuList_item` where `itemName`= "'.$itemName.'"';
			$ires=db_query($isql);
			$tmp =db_fetch_array($ires);
			return $tmp['price'];
		}
		
?>
