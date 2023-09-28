<?= $this->extend('components/tambahuser') ?>
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
?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tambah User</h5>

        <form class="row g-3" action="<?php echo base_url('manajemenuser/tambahUser')?>" method="post" enctype="multipart/form-data">
            <div class="col-12">
                <label for="tusername" class="form-label">Username</label>
                <input type="text" class="form-control" id="tusername" name="tusername" value="" required>
            </div>
            <div class="col-12">
                <label for="tpassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="tpassword" name="tpassword" value="" required>
            </div>
            <div class="col-12">
                <label for="trole" class="form-label">Role</label>
                <input type="text" class="form-control" id="trole" name="trole" value="" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>