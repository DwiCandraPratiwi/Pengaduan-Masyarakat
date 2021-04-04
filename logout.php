<?php
    session_start();
    unset($_SESSION["nama"]);
    //menghilangkan session
    session_destroy();
    header("Location: index.php");
?>