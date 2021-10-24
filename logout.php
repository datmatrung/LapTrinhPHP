<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng xuất</title>
</head>
<body>
    <?php
        session_unset();
        session_destroy();
        header("location:index.php");
    ?>
</body>
</html>