<?php include_once('templates/header.php'); ?>

<style>
    .create-account {
        padding-top: 50px;
    }
</style>

<div class="uk-flex uk-flex-center" style="padding-top:25px">
    <h1 class="uk-heading-small">Create New Account</h1>
</div>

<div class="uk-container create-account">
    <form class="uk-form-horizontal uk-margin-large">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Nama</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Nama" name="nama">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Alamat</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Alamat Rumah" name="alamat">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Nomor Telepon</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="nomorTelepon" name="nomor-telepon">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="email" placeholder="your@email" name="email">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-horizontal-text">Password</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="password" placeholder="Password" name="password">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="tanggal-lahir">Tanggal Lahir</label>
            <div class="uk-form-controls">
                <input type="date" name="tanggal-lahir" id="tanggal-lahir">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="status-kontak">Status</div>
            <div class="uk-form-controls">
                <select class="uk-select" id="status-kontak">
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="bekerja">Bekerja</option>
                </select>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="alamat-kantor">Alamat Kantor (Jika Bekerja)</div>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Alamat Kantor" name="alamat-kantor">
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-form-label" for="foto-kontak">Foto</div>
            <div class="uk-margin" uk-margin>
                <div class="uk-padding-small uk-padding-remove-top" uk-form-custom="target: true">
                    <input type="file">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                </div>
            </div>
        </div>

        <div class="uk-flex uk-flex-center" style="padding-top:25px">
            <button class="uk-button uk-button-secondary uk-button-large">Create</button>
        </div>



    </form>
</div>




<?php include_once('templates/footer.php'); ?>