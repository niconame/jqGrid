<?php
require_once('dbconfig.php');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<html xmlns="http://www.w3.org/1999/xhtml"  style="height: 100%;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="js/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="screen" href="js/ui.jqgrid.css" />
<!-- <link rel="stylesheet" type="text/css" href="js/jquery.editable-select.css"> -->

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="js/jquery.editable-select.pack.js"></script> -->
<!-- and at end the jqGrid Java Script file -->
<script src="js/grid.locale-tw.js" type="text/javascript"></script><!-- 設定為中文 -->
<script src="js/jquery.jqGrid.js" type="text/javascript"></script>
<script src="js/gridDef.js" type="text/javascript"></script>
<script language="javascript">
setupGrid('gridTable','gridPager');
</script>
</head>
    <body style="margin:0pt; height:100%; padding:0;z-index:0;"  >
	<table id='gridTable'></table><div id='gridPager'></div>
</body>
</html>
