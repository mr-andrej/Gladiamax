<?php
session_start();
include "call_api.php";


if ((isset($_SESSION['email']))) {
    include "burgermenu.php";
    include "header.php";
}
if (!(isset($_SESSION['email']))) {
    include "burgermenu_public.php";
    include "header_public.php";
}
?>