<?php session_start();
require "connec.php";
?>
<!-- Hamburger Menu Begin -->


<div class="humberger-menu-overlay"></div>
<div class="humberger-menu-wrapper">
    <div class="hw-logo">
        <a href="#"><img src="img/f-logo.png" alt=""></a>
    </div>
    <div class="hw-menu mobile-menu">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./gladiators.php"><span>Gladiators </span></a></li>
            <li><a href="./arenas.php"><span>Arenas </span></a></li>
            <li><a href="./types.php"><span>Fighting Styles </span></a></li>
            <li><a href="./statistics.php"><span>Statistics </span></a></li>


            <li><a href="#">Admin <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown">
                    <li><a href="./users_crud.php">Users</a></li>
                    <li><a href="./gladiators_crud.php">Gladiators</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="hw-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="hw-insta-media">
        <div class="section-title">
            <h5>Instagram</h5>
        </div>
        <div class="insta-pic">
            <img src="img/instagram/ip-1.jpg" alt="">
            <img src="img/instagram/ip-2.jpg" alt="">
            <img src="img/instagram/ip-3.jpg" alt="">
            <img src="img/instagram/ip-4.jpg" alt="">
        </div>
    </div>
</div>
<!-- Hamburger Menu End -->