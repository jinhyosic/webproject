<?php
if (!session_id()) {
		session_start();
	}

    $login_id =$_SESSION['login_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>메인 페이지</title>
</head>
<body>
  <nav>
    <a class = main-page-logo href = "main.php">
      <img src = "img/logo.png" />
    </a>
    <ul>
      <li class = top-nav1><a href = "">홈</a></li>
      <li class = top-nav1><a href = "">나의 맛집</a></li>
      <li class = top-nav1><a href = "">맛집 등록</a></li>
      <li class = top-nav1><a href = "">스토리</a></li>
      <li class = top-nav1><img src = </li>
    </ul>
  </nav>
</body>
</html>