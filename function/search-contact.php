<?php
require_once("connect_db.php");
session_start();

$name = $_POST["search"];
$owner = $_SESSION['user_id'];
// die(var_dump($owner));

$query = mysqli_query($conn, "SELECT * FROM contacts WHERE contact_name LIKE '%$name%'");
// $datas = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {

  while ($row = mysqli_fetch_assoc($query)) {
    // var_dump()
    // die(var_dump($row));
    // echo $row['contact_name'];
?>
    <tr>
      <td>
        <div class="mini-circle-img">
          <div class="mini-thumbnail" style="background-image: url('/images/uploads/<?php echo $owner ?>/<?php echo $row['contact_id'] ?>.jpeg')"></div>
        </div>
      </td>
      <td><?php echo $row['contact_name'] ?></td>
      <td><?php echo $row['contact_address'] ?></td>
      <td><?php echo $row['contact_phone'] ?></td>
      <td><?php echo $row['contact_mail'] ?></td>
      <td>
        <!-- <p uk-margin> -->
        <div class="uk-grid">
          <div class="uk-width-1-2">
            <form action="update-contact.php" method="post">
              <input type="text" value="<?php echo $row['contact_id'] ?>" name="contact_id" hidden>
              <button class="uk-button uk-button-primary">UPDATE</button>
            </form>
          </div>
          <div class="uk-width-1-2">
            <form action="function/delete-contact.php" method="post">
              <input type="text" value="<?php echo $row['contact_id'] ?>" name="contact_id" hidden>
              <button class="uk-button uk-button-danger">DELETE</button>
            </form>
          </div>

        </div>
      </td>
    </tr>
<?php
  }


  // printf("hola");
  // die(printf($output));
}
