<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | Template</title>

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

<?php include "choose_header.php";?>

<?php
   

    // Traitement des données du formulaire -- Si je clique
    if(isset($_POST['submit']) && $_POST['submit']=='submit'){
        $sql = 'INSERT INTO gladiator VALUES (null, :name, :country, :weight, :height, :sword, :shield, :hand, :winner, :losing, :likes, :dislike, :category)';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        $statement->bindValue(':country', $_POST['country'], PDO::PARAM_STR);
        $statement->bindValue(':weight', $_POST['weight'], PDO::PARAM_INT);
        $statement->bindValue(':height', $_POST['height'], PDO::PARAM_INT);
        $statement->bindValue(':sword', $_POST['sword'], PDO::PARAM_INT);
        $statement->bindValue(':shield', $_POST['shield'], PDO::PARAM_INT);
        $statement->bindValue(':hand', $_POST['hand'], PDO::PARAM_INT);
        $statement->bindValue(':winner', $_POST['winner'], PDO::PARAM_INT);
        $statement->bindValue(':losing', $_POST['losing'], PDO::PARAM_INT);
        $statement->bindValue(':likes', $_POST['likes'], PDO::PARAM_INT);
        $statement->bindValue(':dislike', $_POST['dislike'], PDO::PARAM_INT);
        $statement->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

        $statement->execute();

        echo '<meta http-equiv="refresh" content="0;URL=gladiators_show.php">';
    }
?>

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
    <div class="hs-text" style="padding-top: 0px">
                    <div class="label"><span>Gladiamax</span></div>
                    <h3>Add a new gladiator to your team</h3>
                    
                </div>
       
                              
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
    <video loop muted autoplay class="background-video">
            <source src="img/hero/back-1.mp4" type="video/mp4">
        </video>
    </div>
</section>
<!-- Hero Section End -->

<!-- Update News Section Begin -->
<section class="update-news-section notransition">
    <div class="container">
        <div class="">
            <div class="col-xl-6 offset-2">
                <div class="section-title">
                    <h5><span>New Gladiator</span></h5>
                </div>
                <div class="tab-elem">
                
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                          
                        <div class="row">
            
            <div class="col-xl-10">
                <div class="trending-post">

                <div class="sidebar-option">
                    <div class="insta-media">
                    
                    <div class="subscribe-option">
                        
                        <form method="post">
                            
    <input type="text" name="name" placeholder="Name"><br/>
    <input type="text" name="country" placeholder="Country"><br/>
    <input type="text" name="weight" placeholder="Weight"><br/>
    <input type="text" name="height" placeholder="Height"><br/>
    <input type="text" name="sword" placeholder="Sword"><br/>
    <input type="text" name="shield" placeholder="Shield"><br/>
    <input type="text" name="hand" placeholder="Hand"><br/>
    <input type="text" name="winner" placeholder="Winner"><br/>
    <input type="text" name="losing" placeholder="Losing"><br/>
    <input type="text" name="likes" placeholder="Like"><br/>
    <input type="text" name="dislike" placeholder="Dislike"><br/>
                                                           

        <select class="form-control selectpicker signup-form" style="margin-bottom:15px; background: rgba(0,0,0,0.3);
    color:#D4D4D4; text-shadow:0 1px 0 rgba(0,0,0,0.4);">
            <option value="1" >Retiarious</option>
            <option value="2" >Thraex</option>
            <option value="3" >Samnite</option>
            <option value="4" >Secutor</option>
            <option value="5" >Murmillo</option>
            <option value="6" >Bestiarius</option>
            <option value="7" >Provocator</option>              
        </select>   
      
        
    <input type="submit" name="submit" value="submit">
</form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>                               
                       
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Update News Section End -->



<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/f-logo.png" alt=""></a>
                    </div>
                    <p align="center">Ave Imperator, morituri te salutant!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
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
                </div>
                <div class="col-lg-6">
                    <div class="ca-links">
                        <a href="#">Home</a>
                        <a href="#">Sign up</a>
                        <a href="#">FAQ</a>
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