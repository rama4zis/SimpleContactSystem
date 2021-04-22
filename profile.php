<?php include_once('templates/header.php'); ?>

<div class="uk-container">
    <div class="uk-flex uk-flex-center" style="padding-top:25px">

        <div class="uk-card uk-card-large uk-card-default uk-width-1-1 ">
            <div class="uk-card-header uk-text-center">

                <!-- FotoProfile -->
                <div class="circle-img">
                    <div class="thumbnail" style="background-image: url('/images/user1.jpg')"></div>
                </div>

                <!-- ProfileName -->
                <div class="name-profile uk-padding">
                    <span class="uk-text-bold uk-text-large uk-text-uppercase ">Jin Mori</span>
                    </br>
                    <span class="uk-text-small">ID: 0001</span>

                </div>

            </div>

            <div class="uk-card-body">

                <div class="uk-grid">
                    <div class="uk-width-1-1">

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
                                    <td>Address</td>
                                    <td>: Jl. Sukarno no. 88</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: 085858585</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>: Bekerja</td>
                                </tr>
                                <tr>
                                    <td>Company Address</td>
                                    <td>: Jl. Insinyur no. 15</td>
                                </tr>
                                <tr>
                                    <td>E-Mail</td>
                                    <td>: Jin@Mori.com</td>
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

                                <div class="uk-width-1-3">
                                    <button class="uk-button uk-button-danger">CHANGE PASSWORD</button>

                                </div>
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