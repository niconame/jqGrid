<?php
	require_once('dbconfig.php');
	$oper =$_REQUEST['oper'];
	$id =readPOST('id');

	switch ($oper) {
		case 'add':
			$date = readPOST('date');
			$apply = readPOST('apply');
			$revenue = readPOST('revenue');
			$expense = readPOST('expense');
			$sql ="insert into tablee (date,apply,revenue,expense)values('".$date."','".$apply."','".$revenue."','".$expense."')";
			$res =mysql_query($sql);
			if($res){
				$id = mysql_insert_id();
				exit(json_encode(array('success'=>true,'errors'=>'add sucess!', 'id'=> $id)));
			}else{
				exit(json_encode(array('success'=>false,'errors'=>'add failed!')));
			}
			break;
		case 'edit':
			$date = readPOST('date');
			$apply = readPOST('apply');
			$revenue = readPOST('revenue');
			$expense = readPOST('expense');
			$sql ="update tablee set date='$date', apply='$apply', revenue='$revenue' ,expense='$expense' where ID=$id";
			if(mysql_query($sql)){
				exit(json_encode(array('success'=>true,'errors'=>'edit sucess!')));
			}else{
				exit(json_encode(array('success'=>false,'errors'=>'edit false!')));
			}
			break;
		case 'del':
			$sql ="delete from tablee where ID =$id ";
			if(mysql_query($sql)){
		    	exit(json_encode(array('success'=>true,'errors'=>'del sucess!')));
			}else{
				exit(json_encode(array('success'=>false,'errors'=>'del false!')));
			}
			break;
		default:
	}
?>
