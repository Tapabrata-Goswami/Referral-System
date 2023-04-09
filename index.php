<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/09cca66df7.js" crossorigin="anonymous"></script>
    <title>Babymelon | Referral </title>
</head>
<body onload="preloader()">
    <div id="loading"></div>

    <section>
        <div class="referral-system">
            <div>
                <div style="display:flex; justify-content:center;">
            <img  class="bm-logo" src="./img/Babymelon-Logo-01-1-2-300x192.png" width="250">
            </div>

<?php
include ('db_access.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $referral_username = $_POST['username'];
    $referral_password = $_POST['password'];

    if($referral_username and $referral_password == !NULL){
        $sql_referral_query = "SELECT user, password FROM `referral_system_user`;";
        // $log_data = "SELECT name, email, password FROM `bm_user`;";
        $query_sending = mysqli_query($database_connect, $sql_referral_query);
        if (mysqli_num_rows($query_sending) > 0) {
          // output data of each row
          while ($referral_user_data = mysqli_fetch_assoc($query_sending)) {

            if (($referral_username === $referral_user_data['user']) and ($referral_password === $referral_user_data['password'])) {
            //   $_SESSION['user_name'] = $row['name'];
            //   echo '<script>window.open("http://localhost/babymelon/account.php", "_self"); </script>';
            echo "login done";
            }
          }
        }
    }

}

?>

            <div class="login-container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="username-referral">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="password-referral">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="submit-referral">
                        <input type="submit" value="Log in">
                    </div>
                    <div class="second-panle-referral">
                        <div class="second-panle back-to-bm"></div>
                        <div class="second-panle forget-password"><a href="forgotten-password.php">Forgotten password?</a></div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>

<script>
    var loader = document.getElementById('loading');
    function preloader(){
        loader.style.display = 'none';
    }

</script>
</html>