<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KontakPerson</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- get ui kit -->
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php session_start();
    $url_now = $_SERVER['REQUEST_URI'];
    // die(var_dump($_SERVER));
    ?>
</head>

<body>

    <div class="uk-grid main-body">
        <?php if (isset($_SESSION['user_id'])) {

        ?>
            <div class="uk-width-1-6 uk-background-secondary">

                <!-- <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-usage">Open</button>
            <div id="offcanvas-usage" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>

                    <h3>Title</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>
            </div> -->

                <!-- Profile Image  -->
                <div class="uk-width-1-1 uk-text-center uk-padding-small">
                    <div class="circle-img">
                        <div class="thumbnail" style="background-image: url('/images/uploads/<?php echo $_SESSION['user_photo'] ?>')"></div>
                    </div>

                    <div class="profile-name">
                        <span class="uk-text-bold uk-text-lead uk-text-contrast name-text">
                            <?php echo $_SESSION['user_name'] ?>
                        </span>
                    </div>

                    <!-- Start nav  -->
                    <ul class="uk-list uk-text-normal side-nav">
                        <li class="<?php
                                    if ($url_now == "/profile.php") {
                                        echo "navbar-active";
                                    }
                                    ?> uk-padding-small"><a href="/profile.php">Profile</a></li>
                        <li class="<?php
                                    if ($url_now == "/contact.php") {
                                        echo "navbar-active";
                                    }
                                    ?> uk-padding-small"><a href="/contact.php">My Contact</a></li>
                        <li class="uk-padding-small"><a href="function/logout.php">Logout</a></li>
                    </ul>

                </div>

            </div>
        <?php } ?>
        <div class="uk-width-5-6">



            <!-- <nav class="uk-navbar-container my-background-secondary" uk-navbar>
        <div class="uk-navbar-right ">

            <ul class="uk-navbar-nav">
                <li class="#"><a href="#">Active</a></li>
                <li><a href="/profile.php">Profile</a></li>
                <li><a href="/login.php">Login</a></li>
            </ul>

        </div>
    </nav> -->