<?php
include "./db/db.php";
	if($_POST['id'] != NULL){
	$id_check = mq("select * from member where id='{$_POST['id']}'");
	$id_check = $id_check->fetch_array();
	

	if($id_check >= 1){

		echo "<div style='color:#FF0000;  font-size:15px;'>(X)이미 사용중인 아이디 입니다!</div>";
	
	} else {
		
		echo "<div style='color:#0100FF;  font-size:15px;'>(O)사용 가능한 아이디 입니다!</div>";
		
	}
} 

	if($_POST['id'] == ""){
		echo "아이디를 입력해주세요";
	}
?>