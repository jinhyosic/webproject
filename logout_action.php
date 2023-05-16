<?php
session_start();
session_destroy();
?>

<script>
        alert("로그아웃 됨");
        location.replace("login.php");
</script>