<?php
    $con = mysqli_connect("localhost", "root", "qwer", "wepproject");
    mysqli_query($con,'SET NAMES utf8');
	//세션 시작
	session_start();

    $id = $_POST['id'];
    $pw = $_POST['pw'];
	$loginCheck=false;       
    $query = "select * from member where id = '".$id."' and pw='".$pw."'";
    $result = $con->query($query);
    while($row = $result->fetch_assoc())
     {
        $loginCheck=true; 
		

		//세션 변수 등록
		$_SESSION['login_check'] = "true";		
        $_SESSION['login_id'] = $row['id'];
        $login_id =$_SESSION['login_id']; //$_SESSION['login_id'] 은 스테틱변수 처럼 모든 페이지에 사용가능
     }

     if($loginCheck == true)
     {
		
        echo "<script>alert('$login_id'님 환영합니다.);</script>"; 
		echo("<script>location.href='page1.php';</script>"); 
       
     }
     else{
        echo "<script>alert('아이디/비번이 틀립니다.!');</script>"; 
        echo("<script>history.back();</script>"); 
     }

?> 