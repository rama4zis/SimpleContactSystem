<?php include_once('templates/header.php');
include_once('function/connect_db.php');
?><?php if (!isset($_SESSION['user_id'])) {
        header("Location: http://$host/");
    } ?>

<div class="uk-container">

    <div class="uk-flex uk-flex-center" style="padding-top:25px">

        <div class="uk-card uk-card-large uk-card-default uk-width-1-1 ">
            <div class="uk-card-header uk-text-center">




                <!-- ProfileName -->
                <div class="name-profile uk-padding">
                    <span class="uk-text-bold uk-text-large uk-text-uppercase ">Contact Person</span>
                </div>

                <!-- options  -->
                <div class="uk-grid">

                    <!-- search  -->
                    <form id="lets_search" class="uk-search uk-search-default">
                        <span uk-search-icon></span>
                        <input class="uk-search-input" type="text" placeholder="Search" name="search_text" id="search_text">
                        <!-- <input type="search" placeholder="Search" hidden> -->
                    </form>

                    <!-- Add new  -->
                    <p uk-margin>
                        <a href="new-contact.php"><button class="uk-button uk-button-secondary">ADD NEW CONTACT</button></a>
                    </p>

                </div>

            </div>

            
            <div class="uk-card-body">
                <div class="uk-grid-small">
                    <div class="uk-width-1-1">
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>E-Mail</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody id="result">
                                <!-- <div id="result"> -->
                                    <!-- Data person contact -->
                                    <?php
                                    $owner = $_SESSION['user_id'];
                                    $query = "SELECT * FROM contacts WHERE user_id = '$owner'";
                                    $result = mysqli_query($conn, $query);

                                    // die(var_dump(mysqli_fetch_assoc($datas)));
                                    while ($datas = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="mini-circle-img">
                                                    <div class="mini-thumbnail" style="background-image: url('/images/uploads/<?php echo $owner ?>/<?php echo $datas['contact_id'] ?>.jpeg')"></div>
                                                </div>
                                            </td>
                                            <td><?php echo $datas['contact_name'] ?></td>
                                            <td><?php echo $datas['contact_address'] ?></td>
                                            <td><?php echo $datas['contact_phone'] ?></td>
                                            <td><?php echo $datas['contact_mail'] ?></td>
                                            <td>
                                                <!-- <p uk-margin> -->
                                                <div class="uk-grid">
                                                    <div class="uk-width-1-2">
                                                        <form action="update-contact.php" method="post">
                                                            <input type="text" value="<?php echo $datas['contact_id'] ?>" name="contact_id" hidden>
                                                            <button class="uk-button uk-button-primary">UPDATE</button>
                                                        </form>
                                                    </div>
                                                    <div class="uk-width-1-2">
                                                        <form action="function/delete-contact.php" method="post">
                                                            <input type="text" value="<?php echo $datas['contact_id'] ?>" name="contact_id" hidden>
                                                            <button class="uk-button uk-button-danger">DELETE</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
                                    <!-- <tr>
                                        <td>
                                            <div class="mini-circle-img">
                                                <div class="mini-thumbnail" style="background-image: url('/images/user1.jpg')"></div>
                                            </div>
                                        </td>
                                        <td>Alex</td>
                                        <td>Table Data</td>
                                        <td>Table Data</td>
                                        <td>Table Data</td>
                                        <td>
                                            <p uk-margin>
                                                <button class="uk-button uk-button-primary">UPDATE</button>
                                                <button class="uk-button uk-button-danger">DELETE</button>
                                            </p>
                                        </td>
                                    </tr> -->
                                <!-- </div> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="uk-width-1-2">

                    </div>
                </div>
            </div>

            <!-- <div class="uk-card-footer ">
                <div class="uk-container uk-align-center">
                    <ul class="uk-pagination" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </div>

            </div> -->
        </div>


    </div>

</div>

<?php include_once('templates/footer.php'); ?>

<script>
    $(document).ready(function(e) {
        $('#search_text').keyup(function() {

            // clear all data 
            // $("div").remove("#result");

            var x = $(this).val();

            $('#result').html('');
            $.ajax({
                url: "function/search-contact.php",
                method: "post",
                data: {
                    search: x
                },
                dataType: "text",
                success: function(data) {
                    $("#result").html(data);
                }
            });
        });
        if ($('#search_text').val().length == 0) {
            // $("#result").html('');
            console.log("hola");
        }
    });
</script>