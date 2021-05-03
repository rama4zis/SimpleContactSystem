<?php 
while ($data = $datas) {
    
    ?>
    <tr>
      <td>
        <div class="mini-circle-img">
          <div class="mini-thumbnail" style="background-image: url('/images/uploads/<?php echo $owner ?>/<?php echo $data['contact_id'] ?>.jpeg')"></div>
        </div>
      </td>
      <td> <?php echo $data['contact_name'] ?> </td>
      <td> <?php echo $data['contact_address'] ?> </td>
      <td> <?php echo $data['contact_phone'] ?> </td>
      <td> <?php echo $data['contact_mail'] ?> </td>
      <td>
        <!-- <p uk-margin> -->
        <div class="uk-grid">
          <div class="uk-width-1-2">
            <form action="update-contact.php" method="post">
              <input type="text" value=" <?php echo $data['contact_id'] ?> " name="contact_id" hidden>
              <button class="uk-button uk-button-primary">UPDATE</button>
            </form>
          </div>
          <div class="uk-width-1-2">
            <form action="function/delete-contact.php" method="post">
              <input type="text" value=" <?php echo $data['contact_id'] ?> " name="contact_id" hidden>
              <button class="uk-button uk-button-danger">DELETE</button>
            </form>
          </div>

        </div>
      </td>
    </tr>`;
  <?php
}