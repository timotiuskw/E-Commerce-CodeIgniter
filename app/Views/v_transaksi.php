<?= $this->extend('components/transaksi'); ?>
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

<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Alamat</th>
            <th scope="col">Ongkir</th>
            <th scope="col">Status</th>
            <th scope="col">Created By</th>
            <th scope="col">Created Date</th>
            <?php
                if($_SESSION['role'] == "admin") :
            ?>
            <th scope="col">Aksi</th>
            <?php
                endif;
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($items)) :
            foreach ($items as $index => $item) :
                if ($_SESSION['role'] == "admin") :
        ?>
                <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['username'] ?></td>
                        <td><?php echo number_to_currency($item['total_harga'], 'IDR') ?></td>
                        <td><?php echo $item['alamat'] ?></td>
                        <td><?php echo $item['ongkir'] ?></td>
                        <td><?php echo $item['status'] ?></td>
                        <td><?php echo $item['created_by'] ?></td>
                        <td><?php echo $item['created_date'] ?></td>

                        <?php
                            if($item['status'] == 0 && $_SESSION['role'] == "admin"){
                        ?>

                        <td>
                            <a href="<?php echo base_url('transaksi/update/' . $item['id'] . '') ?>" class="btn btn-success"><i class="bi bi-check"></i></a> <!-- Ganti Logo -->
                        </td>

                        <?php
                            }
                        ?>
                </tr>
        <?php
                endif;
            endforeach;
        endif;
        ?>
    </tbody>
</table>


<?= $this->endSection() ?>