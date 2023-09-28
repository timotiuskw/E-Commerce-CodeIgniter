<?= $this->extend('components/profile') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}

foreach ($profile as $index => $item) :
?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Profile Anda</h5>
            <a href="<?php echo base_url('profile/edit_view/' . $_SESSION['username'] . '')?>">Edit Profile</a><br><br>

            <form class="row g-3">
                <div class="col-12">
                    <label for="tid" class="form-label">ID</label>
                    <input type="text" class="form-control" id="tnama" name="tid" value="<?= $item['id'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="tusername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="tnama" name="tusername" value="<?= $item['username'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="tpassword" class="form-label">Password</label>
                    <input type="text" class="form-control" id="tpassword" name="tpassword" value="<?= $item['password'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="talamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="thrg" name="talamat" value="<?= $item['alamat'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="ttgllahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tjml" name="ttgllahir" value="<?= $item['tgllahir'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="tnotelp" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="tket" name="tnotelp" value="<?= $item['notelp'];?>" readonly>
                </div>
                <div class="col-12">
                    <label for="temail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="tket" name="temail" value="<?= $item['email'];?>" readonly>
                </div>
            </form>
        </div>
    </div>

<?php
endforeach;
?>
<?= $this->endSection() ?>