<?= $this->extend('components/manajemenuser'); ?>

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

<a href="<?php echo base_url('manajemenuser/tambah') ?>">Tambah User</a><br><br>

<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($manajemenuser)) :
            foreach ($manajemenuser as $index => $item) :
        ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['username'] ?></td>
                    <td><?php echo $item['password'] ?></td>
                    <td>
                        <a href="<?php echo base_url('manajemenuser/edit/' . $item['id'] . '') ?>" class="btn btn-success">Edit</a>
                        <a href="<?php echo base_url('manajemenuser/deleteUser/' . $item['id'] . '') ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table>


<?= $this->endSection() ?>