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
            <h5 class="card-title">Edit Profile</h5>

            <form class="row g-3" action="<?php echo base_url('profile/edit/' . $item['id'] . '')?>" method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="tid" class="form-label">ID</label>
                    <input type="text" class="form-control" id="tnama" name="tid" value="<?= $item['id'];?>" readonly style="background-color:lightgray">
                </div>
                <div class="col-12">
                    <label for="tusername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="tnama" name="tusername" value="<?= $item['username'];?>" readonly style="background-color:lightgray">
                </div>
                <div class="col-12">
                    <label for="tpassword" class="form-label">Password</label>
                    <input type="text" class="form-control" id="tpassword" name="tpassword" value="" required>
                </div>
                <div class="col-12">
                    <label for="talamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="talamat" name="talamat" value="<?= $item['alamat'];?>" required>
                </div>
                <div class="col-12">
                    <label for="ttgllahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="ttgllahir" name="ttgllahir" value="<?= $item['tgllahir'];?>" required>
                </div>
                <div class="col-12">
                    <label for="tnotelp" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="tnotelp" name="tnotelp" value="<?= $item['notelp'];?>" required>
                </div>
                <div class="col-12">
                    <label for="temail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="temail" name="temail" value="<?= $item['email'];?>" required>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>

<?php
endforeach;
?>
<?= $this->endSection() ?>