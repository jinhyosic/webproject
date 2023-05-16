<?php
if (!session_id()) {
	session_start();
  }
    $login_id =$_SESSION['login_id'];

    $con = mysqli_connect("localhost", "root", "qwer", "wepproject");
    mysqli_query($con,'SET NAMES utf8');

    $pw = $_POST['pw'];
	$pw2 = $_POST['pw_r'];
    $hp = $_POST['hp'];

    $query = "select * from member where id = '".$login_id."'";
    $result = $con->query($query);

    if(!$pw){
        echo "<script>alert('변경할 비밀번호를 입력하세요.');</script>";
		echo("<script>history.back();</script>"); 
    }
    if(!$pw2){
        echo "<script>alert('비밀번호 확인을 입력하세요.');</script>";
		echo("<script>history.back();</script>"); 
    }
    if(!$hp){
        echo "<script>alert('변경할 연락처를 입력하세요.');</script>";
		echo("<script>history.back();</script>"); 
    }
	if($pw!=$pw2)
	{
		echo "<script>alert('비밀번호가 일치하는지 확인해주세요.');</script>";
		echo("<script>history.back();</script>");  
	}


	$query  = "UPDATE member SET pw ='".$pw."', hp ='".$hp."' WHERE id ='".$login_id."'";
    $result = $con->query($query);    

	echo "<script>alert('수정완료.');</script>";
	echo("<script>location.href='info.php'</script>");  
    
?> 
