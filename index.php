<?php
	require_once('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="js/jquery-ui.css" />
	<link rel="stylesheet" media="screen" href="js/ui.jqgrid.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/grid.locale-tw.js"></script>
	<script src="js/jquery.jqGrid.js"></script>
	<script src="jqGridHelper.src.js"></script>
	<script>
		function initPage() {
			cNames=['ID','日期','用途', '收入','花費', '--'];
			cModel=[
				{name:'ID',index:'ID', width:60, editable: false},
				{name:'date',index:'date', width:100, editable: true, editrules:{required:true}},
				{name:'apply',index:'apply', width:90, editable: true, editrules:{required:true}},
				{name:'revenue',index:'revenue', width:60, editable: true},
				{name:'expense',index:'expense', width:60, editable: true},
				{name:'act',index:'act', width:100, editable: false, sortable: false}
			];
			caption= "資料表";
			bts='testxxxVCSE';
			div='mainDiv';
			URL='getJSON.php';
			editURL='update.php';
			navOptions={search:false};
			initGrid(div, URL, editURL, cNames, cModel, caption, bts, navOptions);
		}

		function testxxx(id) {
			alert(id);
		}
	</script>
</head>
<body style="margin:0pt; height:100%; padding:0;z-index:0;"  onload="initPage();">
	<div id='mainDiv'></div>
</body>
</html>
