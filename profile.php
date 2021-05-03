<?php include_once('templates/header.php');
include_once('function/connect_db.php');
?>
<?php if (!isset($_SESSION['user_id'])) {
    header("Location: http://$host/");
} ?>

<div class="uk-container">
    <div class="uk-flex uk-flex-center" style="padding-top:25px">

        <div class="uk-card uk-card-large uk-card-default uk-width-1-1 ">
            <div class="uk-card-header uk-text-center">

                <!-- FotoProfile -->
                <div class="circle-img">
                    <div class="thumbnail" style="background-image: url('/images/uploads/<?php echo $_SESSION['user_photo'] ?>')"></div>
                </div>

                <!-- ProfileName -->
                <div class="name-profile uk-padding">
                    <span class="uk-text-bold uk-text-large uk-text-uppercase "><?php echo $_SESSION['user_name'] ?></span>
                    </br>
                    <span class="uk-text-small">ID: <?php echo $_SESSION['user_id'] ?></span>

                </div>

            </div>

            <div class="uk-card-body">

                <div class="uk-grid">
                    <div class="uk-width-1-1">

                        <table class="uk-table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>: <?php echo $_SESSION['user_name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: <?php echo $_SESSION['user_birth'] ?></td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>: <?php echo $_SESSION['user_mail'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>: <?php echo $_SESSION['user_address'] ?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: <?php echo $_SESSION['user_phone'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>: <?php echo $_SESSION['user_status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Company Address</td>
                                    <td>: <?php echo $_SESSION['user_work'] ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="uk-container uk-margin-large-top">
                            <div class="uk-grid">



                                <!-- <div class="uk-width-1-3">
                                    <div uk-form-custom>
                                        <input type="file">
                                        <button class="uk-button uk-button-default" type="button" tabindex="-1">UPDATE PHOTO</button>
                                    </div>

                                </div> -->

                                <div class="uk-width-1-3">
                                    <a href="/update-profile.php">
                                        <button class="uk-button uk-button-secondary">UPDATE PROFILE</button>
                                    </a>
                                </div>

                                <!-- <div class="uk-width-1-3">
                                    <button class="uk-button uk-button-danger">CHANGE PASSWORD</button>

                                </div> -->
                            </div>
                        </div>

                    </div>
                    <!-- <div class="uk-width-1-2">

                        <table class="uk-table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>: Jin Mori</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: 10 Januari 2015</td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>: Jin@Mori.com</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: 085858585</td>
                                </tr>
                            </tbody>
                        </table>

                    </div> -->
                </div>


            </div>

        </div>

    </div>
</div>

<?php include_once('templates/footer.php'); ?>