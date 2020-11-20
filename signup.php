<!-- Sign Up Section Begin -->

<?php
// Traitement des données du formulaire -- Si je clique

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
    $sql = 'INSERT INTO user (name, email, password) VALUES(:name, :email, :password)';
    $_SESSION['OUTPUT'] = "HOW THE SHIT";

    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
    $statement->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
    $statement->bindValue(':password', md5($_GET['password']), PDO::PARAM_STR);

    $statement->execute();

    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = 'SELECT count(*) FROM user WHERE email=:email AND password=:password';

    $statement = $pdo->prepare($sql);
    $statement->bindValue(':email', $_POST['email'], \PDO::PARAM_STR);
    $statement->bindValue(':password', md5($_POST['password']), \PDO::PARAM_STR);

    if ($statement->execute()) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['disconnect'] == false;
    } else {
        $_SESSION['email'] = "";
    }

    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
?>

<div class="signup-section">
    <div class="signup-close"><i class="fa fa-close"></i></div>
    <div class="signup-text">
        <div class="container">
            <div class="signup-title">
                <h2>Sign up</h2>
                <p>Fill out the form below to recieve a free and confidential</p>
            </div>
            <form class="signup-form" method="get">
                <div class="sf-input-list">
                    <input type="text" name="name" class="input-value" placeholder="Name">
                    <input type="text" name="email" class="input-value" placeholder="Email Address">
                    <input type="password" name="password" class="input-value" placeholder="Password">
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
        <div class="container">
            <div class="signup-title">
                <h2>Log In</h2>
                <p>Fill out the form below to receive a free and confidential</p>
            </div>

            <form class="signup-form" method="post">
                <div class="sf-input-list">
                    <input type="text" name="email" class="input-value" placeholder="Email Address">
                    <input type="password" name="password" class="input-value" placeholder="Password">
                </div>
                <button type="submit"><span>LOG IN</span></button>
            </form>


        </div>
    </div>
    <!-- Sign Up Section End -->
