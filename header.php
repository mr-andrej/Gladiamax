<!-- Header Section Begin -->
<header class="header-section">
    <div class="ht-options">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="ht-widget">
                        <ul>
                          <li><i class="fa fa-sun-o"></i> <span><?=((int) $response['main']['temp']);?><sup>c</sup></span> <?= $response['name'];?></li>

                            <li><i class="fa fa-clock-o"></i> <?php echo date("D j M, Y"); ?></li> <!-- CORRECT DATE -->
                            <li class="signup-switch signup-open"><i class="fa fa-sign-out">
                                    <?php
                                    if ((isset($_SESSION['email']))) {
                                        echo '<a href="disconnect.php" style="color: inherit;">Disconnect</a>';
                                    }
                                    ?>
                                </i>
                                <?php
                                if (!(isset($_SESSION['email']))) {
                                    echo "Sign up / Login";
                                }
                                ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="ht-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-options">
        <div class="container">
            <div class="humberger-menu humberger-open">
                <i class="fa fa-bars"></i>
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="./index.php"><span>Home </span></a></li>
                    <li><a href="./gladiators_list.php"><span>Gladiators </span></a></li>
                    <li><a href="./category.php"><span>Fighting Styles </span></a></li>
                    <li>
                    <li><a href="admin/index.php">Admin <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="./gladiators_form.php">Gladiators</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
