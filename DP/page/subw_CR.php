<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet"  type="text/css" href="../CSS/style.css">
	<link rel="stylesheet"  type="text/css" href="../CSS/subwindow.css">
	<script src="../javascript/jquery.js"></script>
</head>
<body>
	
	<div id="header">分析模式導入工具</div>	
	<div id="content">
		<?php include('head.php'); ?>
		
		<div id="window">
			<div id="subwindow">
			<div class="mask"></div>
				<div class="container">
					<div class="tool_bar">
						<input type="button" id="new" value="+ new UseCase"></div>
				</div>
				
				<div id="zoomIn">
					<input type="file" id="files" name="file" accept=".xmi"/>
					<div id="progress_bar"><div class="percent">0%</div></div>
					<input type="button" id="close" value="close">
				</div>
				<div class="results">
					<div class="list_item">
						<span class="uc_id">usecase_A</span>
						<span class="description">a_description</span>
					</div>
					<div class="list_item">
						<span class="uc_id">usecase_B</span>
						<span class="description">b_description</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../javascript/active.js"></script>
	<script src="../javascript/upload.js"></script>
	<script src="../javascript/analysis.js"></script>
</body>
</html>