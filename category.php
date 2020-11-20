<?php
include "connec.php";

$sql ='SELECT * FROM category ';
$statement = $pdo->prepare($sql);
$statement->execute();
$result=$statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gladiamax</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<?php include "burgermenu.php" ?>

<?php include "header.php" ?>
<!-- Instagram Post Section Begin -->
<section class="instagram-post-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h5>THE DIFFERENT CATEGORY OF GLADIATOR</h5>
                </div>
            <?php
            $temporaryCounter = 1; // Use $row['id'] when you come back
            foreach( $result as $row ) {
                echo '<div class="ip-item">';
                echo '<div class="ip-pic">';
                echo '<img src="img/instagram/insta-1'. $temporaryCounter++ . '.jpg" alt="">';
                echo '</div>';
                echo '<div class="ip-text">';
                echo '<div class="label"><span>CATEGORY</span></div>';
                echo '<h5><a href="' . $row['name'] . '.php'  . '">' . $row['name'] . '</a></h5>';


                echo '<ul>';
                echo '<li>by <span>Admin</span></li>';
                echo '<li><i class="fa fa-clock-o"></i> NOV 20/220</li>';
                echo '<li><i class="fa fa-comment-o"></i> 150</li>';
                echo '</ul>';
                echo '<p>'. $row['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>

            </div>
            <div class="col-lg-4 col-md-7">
                <div class="sidebar-option">
                    <div class="insta-media">
                        <div class="section-title">
                            <h5>top picture</h5>
                        </div>
                        <div class="insta-pic">
                            <img src="img/instagram/ip-1.jpg" alt="">
                            <img src="img/instagram/ip-2.jpg" alt="">
                            <img src="img/instagram/ip-3.jpg" alt="">
                            <img src="img/instagram/ip-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="best-of-post">
                        <div class="section-title">
                            <h5>TOP 4 Category performance</h5>
                        </div>
                        <div class="bp-item">
                            <div class="bp-loader">
                                <div class="loader-circle-wrap">
                                    <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="95"
                                                  data-cpcolor="#c20000"></span>
                                        <div class="review-point">9.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bp-text">
                                <h6><a href="#">MURMILLO</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 152</li>
                                    <li><i class="fa fa-comment-o"></i> 230</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bp-item">
                            <div class="bp-loader">
                                <div class="loader-circle-wrap">
                                    <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="85"
                                                  data-cpcolor="#c20000"></span>
                                        <div class="review-point">8.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bp-text">
                                <h6><a href="#">PROVOCATOR</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 152</li>
                                    <li><i class="fa fa-comment-o"></i> 120</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bp-item">
                            <div class="bp-loader">
                                <div class="loader-circle-wrap">
                                    <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="80"
                                                  data-cpcolor="#c20000"></span>
                                        <div class="review-point">8.0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bp-text">
                                <h6><a href="#">SAMNITE</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 152</li>
                                    <li><i class="fa fa-comment-o"></i> 25</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bp-item">
                            <div class="bp-loader">
                                <div class="loader-circle-wrap">
                                    <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="75"
                                                  data-cpcolor="#c20000"></span>
                                        <div class="review-point">7.5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bp-text">
                                <h6><a href="#">SECUTOR</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 152</li>
                                    <li><i class="fa fa-comment-o"></i> 74</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Post Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/f-logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua lacus vel facilisis.</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="editor-choice">
                    <div class="section-title">
                        <h5>Editor's Choice</h5>
                    </div>
                    <div class="ec-item">
                        <div class="ec-pic">
                            <img src="img/trending/editor-1.jpg" alt="">
                        </div>
                        <div class="ec-text">
                            <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                            </h6>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                <li><i class="fa fa-comment-o"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ec-item">
                        <div class="ec-pic">
                            <img src="img/trending/editor-2.jpg" alt="">
                        </div>
                        <div class="ec-text">
                            <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a>
                            </h6>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                <li><i class="fa fa-comment-o"></i> 12</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tags-cloud">
                    <div class="section-title">
                        <h5>Tags Cloud</h5>
                    </div>
                    <div class="tag-list">
                        <a href="#"><span>Spartacus</span></a>
                        <a href="#"><span>Flamma</span></a>
                        <a href="#"><span>Murmillo</span></a>
                        <a href="#"><span>Cestus</span></a>
                        <a href="#"><span>Retiarius</span></a>
                        <a href="#"><span>Secutor</span></a>
                        <a href="#"><span>Bestiarius</span></a>
                        <a href="#"><span>Thraex</span></a>
                        <a href="#"><span>Provocator</span></a>
                        <a href="#"><span>Hoplomachus</span></a>
                        <a href="#"><span>Samnite</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ca-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ca-links">
                        <a href="#">About</a>
                        <a href="#">Subscribe</a>
                        <a href="#">Contact</a>
                        <a href="#">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Sign Up Section Begin -->
<div class="signup-section">
    <div class="signup-close"><i class="fa fa-close"></i></div>
    <div class="signup-text">
        <div class="container">
            <div class="signup-title">
                <h2>Sign up</h2>
                <p>Fill out the form below to recieve a free and confidential</p>
            </div>
            <form action="#" class="signup-form">
                <div class="sf-input-list">
                    <input type="text" class="input-value" placeholder="User Name*">
                    <input type="text" class="input-value" placeholder="Password">
                    <input type="text" class="input-value" placeholder="Confirm Password">
                    <input type="text" class="input-value" placeholder="Email Address">
                    <input type="text" class="input-value" placeholder="Full Name">
                </div>
                <div class="radio-check">
                    <label for="rc-agree">I agree with the term & conditions
                        <input type="checkbox" id="rc-agree">
                        <span class="checkbox"></span>
                    </label>
                </div>
                <button type="submit"><span>REGISTER NOW</span></button>
            </form>
        </div>
    </div>
</div>
<!-- Sign Up Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
