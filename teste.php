<?php
require 'src/Instagram.php';
use src\Instagram\Instagram;
// initialize class
$instagram = new Instagram(array(
    'apiKey' => '40bf09b53b6b4af89959f23cfa9af6c9',
    'apiSecret' => ' aa616a25633143d9826e0e5053dce01c',
    'apiCallback' => 'http://instagranclient.yesh.com.br/token/index.php' // must point to success.php
));
// create login URL
$loginUrl = $instagram->getLoginUrl();
//array(1) { ["code"]=> string(32) "7a9e1b91174f4b3e9fd108c5df6fd5bc" } array(0) { }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - OAuth Login</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <style>
        .login {
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="clearfix">
        <h1>Instagram <span>display your photo stream</span></h1>
    </header>
    <div class="main">
        <ul class="grid">
            <li><img src="assets/instagram-big.png" alt="Instagram logo"></li>
            <li>
                <a class="login" href="<?php echo $loginUrl ?>">» Login with Instagram</a>
                <h4>Use your Instagram account to login.</h4>
            </li>
        </ul>
        <!-- GitHub project -->
        <footer>
            <p>created by <a href="https://github.com/cosenary/Instagram-PHP-API">cosenary's Instagram class</a>,
                available on GitHub</p>
        </footer>
    </div>
</div>
</body>
</html>
