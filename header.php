<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age of Wonders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&family=Tsukimi+Rounded:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/mobile.css">
    <script src="js/burger.js" defer></script>
    <script src="js/gallery.js" defer></script>
</head>
<body>
<header class="header">

    <div class="logo_top">
        <img src="images/logotop.png" alt="Logo">

    </div>
    <nav class="navbar_top">
        <ul class="nav_list">
            <li><a href="http://localhost/php10/index.php#Home">Home</a></li>
            <li><a href="http://localhost/php10/index.php#text_about">About</a></li>
            <li><a href="http://localhost/php10/index.php#members_box">Members</a></li>
            <li><a href="http://localhost/php10/index.php#calendar">Calendar</a></li>
            <li><a href="http://localhost/php10/index.php#news_box">News</a></li>
            <li><a href="http://localhost/php10/index.php#contacts">Contacts</a></li>
            <button class="Login"> <a href="login.php">Log in</a></button>
        </ul>
    </nav>
    <nav class="mobile-nav">
                <ul class="flex-container" id="mMenu">
                    <li><a href="http://localhost/php10/index.php#Home">Home</a></li>
                    <li><a href="http://localhost/php10/index.php#text_about">About</a></li>
                     <li><a href="http://localhost/php10/index.php#members_box">Members</a></li>
                    <li><a href="http://localhost/php10/index.php#calendar">Calendar</a></li>
                    <li><a href="http://localhost/php10/index.php#news_box">News</a></li>
                    <li><a href="http://localhost/php10/index.php#contacts">Contacts</a></li>
                    <button class="Login"> <a href="login.php">Log in</a></button>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="bi bi-list"></i>
                </a>
            </nav>


</header>