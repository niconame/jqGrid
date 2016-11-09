<?php
	require_once('dbconfig.php');
	$id =readPOST('id');
	$oper =$_REQUEST['oper']; //edit, add, del
	$zip =readPOST('zip');
	$city =readPOST('city');
	$area =readPOST('area');
	if ($oper=='edit') {
		$sql ="update zipdb set zip='$zip',city='".$city."',area='".$area."' where zID =$id";
		mysql_query($sql);
	}

	//若不知此頁傳過來的參數是什麼，可以如下列印出來：
	/*foreach($_REQUEST as $key=>$vv){
	   $str_test .=' key:'.$key.' value:'.$vv . "\n";
	}
	   $f =fopen("a.txt","a");
	    fwrite($f,"$str_test\r\n");
	    fwrite($f,$sql);
	    fclose($f);
	*/
?>
