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
<?php session_start(); 
if( isset($_SESSION['create']) ){
    ?>
    <script>
    alert("Create Account Successful");
    </script>
    <?php
    // die(var_dump($_SESSION));
}
?>
</head>

<body>



<div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                        <h3 class="uk-card-title uk-text-center">Contact System</h3>
                        <form action="function/login.php" method="POST">
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                    <input class="uk-input uk-form-large" type="text" placeholder="E-Mail" name="mail" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" type="password" placeholder="Password" name="pass" required>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                            </div>
                            <div class="uk-text-small uk-text-center">
                                Not registered? <a href="/new-account.php">Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once('templates/footer.php'); ?>