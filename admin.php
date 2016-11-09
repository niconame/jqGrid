<?php
  require_once('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
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
<body style="margin:0pt; height:100%; padding:0;z-index:0;">
	<table id='gridTable'></table><div id='gridPager'></div>
</body>
</html>
