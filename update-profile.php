<?php include_once('templates/header.php');
include_once('function/connect_db.php');
?>
<?php if (!isset($_SESSION['user_id'])) {
    header("Location: http://$host/");
} ?>
<style>
    .create-account {
        padding-top: 50px;
    }
</style>

<div class="uk-flex uk-flex-center" style="padding-top:25px">
    <h1 class="uk-heading-small">UPDATE PROFILE</h1>
</div>

<div class="uk-container create-account">
    <form class="uk-form-horizontal uk-margin-large" method="POST" action="function/update-account.php" enctype="multipart/form-data">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Nama</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Nama" name="nama" value="<?php echo $_SESSION['user_name'] ?>">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Alamat</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Alamat Rumah" name="alamat" value="<?php echo $_SESSION['user_address'] ?>"> 
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Nomor Telepon</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="nomorTelepon" name="nomor-telepon" value="<?php echo $_SESSION['user_phone'] ?>">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="email" placeholder="your@email" name="email" value="<?php echo $_SESSION['user_mail'] ?>">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['user_password']?>">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="tanggal-lahir">Tanggal Lahir</label>
            <div class="uk-form-controls">
                <input type="date" name="tanggal-lahir" id="tanggal-lahir" value="<?php echo $_SESSION['user_birth'] ?>">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="status-kontak">Status</div>
            <div class="uk-form-controls">
                <select class="uk-select" id="status-kontak" name="status">
                    <option value="mahasiswa" <?php if($_SESSION['user_status'] == "mahasiswa") echo "selected" ?>>Mahasiswa</option>
                    <option value="bekerja" <?php if($_SESSION['user_status'] == "bekerja") echo "selected" ?>>Bekerja</option>
                </select>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="alamat-kantor">Alamat Kantor (Jika Bekerja)</div>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Alamat Kantor" name="alamat-kantor" value="<?php echo $_SESSION['user_work'] ?>">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="foto-kontak">Foto</div>
            <div class="uk-margin" uk-margin>
                <div class="uk-padding-small uk-padding-remove-top" uk-form-custom="target: true">
                    <input type="file" name="photo">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                </div>
            </div>
        </div>

        <div class="uk-flex uk-flex-center" style="padding-top:25px">
            <button class="uk-button uk-button-secondary uk-button-large">UPDATE</button>
        </div>



    </form>
</div>




<?php include_once('templates/footer.php'); ?>