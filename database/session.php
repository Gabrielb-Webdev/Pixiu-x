<?php
session_start();

function check_session() {
    if (!isset($_SESSION['username'])) {
        header("Location: https://pixiux.com");
        exit();
    }
}
?>
