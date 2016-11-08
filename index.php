<?php
require_once('dbconfig.php');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="js/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/ui.jqgrid.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/grid.locale-tw.js" type="text/javascript"></script>
<script src="js/jquery.jqGrid.js" type="text/javascript"></script>
<script src="jqGridHelper.src.js" type="text/javascript"></script>
<script type="text/javascript">


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
</div>
<div id='mainDiv'></div>
</body>
</html>
