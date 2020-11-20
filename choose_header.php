<?php
session_start();
if ((isset($_SESSION['email']))) {
    include "burgermenu.php";
    include "header.php";
}
if (!(isset($_SESSION['email']))) {
    include "burgermenu_public.php";
    include "header_public.php";
}
?>