<?php
if ($_SESSION['status'] != 'login') {
    header('location:' . BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <center>

        <h1 class="green">Welcome " PETUGAS "</h1>
        <br>
        <div id="text" class="sudah"></div><br><br><br>
        <a class="logout" href="<?= BASEURL ?>/home/logout" onclick="return confirm('yakin ingin logout?')">Log out</a>
    </center>
</body>

</html>
