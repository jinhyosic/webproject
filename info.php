<?php

if (!session_id()) {
  session_start();
}

$loginid=$_SESSION['login_id'];
$con = mysqli_connect("localhost", "root", "qwer", "wepproject");
mysqli_query($con,'SET NAMES utf8');

$query = "select * from member where id = '".$loginid."'";
$result = $con->query($query);
$id;
$hp;
while($row = $result->fetch_assoc())
 {
    $id = $row['id'];
	$hp = $row['hp'];
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>맛집</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="Css/button.css" />
    <link rel="stylesheet" href="Css/map.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>

<body>

<div class="p-3 mb-2 bg-warning text-dark">

    <a class="navbar-brand" href="page1.php">
        <img src="img/logo.png" alt="Logo" width="120" height="100" class="d-inline-block align-text-top">
    </a>

    <ul class="nav justify-content-center">
        <h3 class="articleTitle"></h3>
    
        <a href="" title="Button push orange" class="button btnPush btnBlueGreen">맛집 검색</a>
        <a href="" title="Button push orange" class="button btnPush btnLightBlue">사용자 등록 맛집</a>
        <a href="" title="Button push orange" class="button btnPush btnOrange">맛집 등록</a>
        <a href="" title="Button push orange" class="button btnPush btnPurple">맛집 이야기</a>
        <div class="clear"></div>
    
    </ul>

    <div style = "text-align:right">
        <div style="display: inline-block">
            <p style = "text-align:right"> <?= $loginid ?> 님 환영합니다.</p>
        </div>
        <div style="display: inline-block">
        <div class="btn-group">
    <button type="button" class="btn btn-success">계정</button>
    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="info.php">내 정보</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout_action.php">로그아웃</a></li>
    </ul>
        </div>
        </div>
    </div>   

    </div>

    <div>
    <div class="info-box">
        <div style="text-align : center;">
        <img src="img/logo.png" alt="Logo" width="200" height="190" class="d-inline-block align-text-top">
        </div>
      <h1>내 정보 수정</h1>
      <form action="edit_action.php" method="post">
        <p> <?= $id ?> 님 수정 할 정보를 입력해 주세요.</p>
        <label>Password</label>
        <input type="password" name="pw" placeholder="수정할 비밀번호" />
        <label>Password_Check</label>
        <input type="password" name="pw_r" placeholder="수정할 비밀번호 확인" />
        <label>HP</label>
        <input type="text" name="hp" value="<?= $hp ?>" placeholder="변경된 연락처 입력" />
        
        <input type="submit" value="수정완료" />
      <closeform></closeform></form>
    </div>
</body>