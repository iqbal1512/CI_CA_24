<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Data Kategori</h2>

<!-- ALERT -->
<?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">

<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

<tbody>
<?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $k->nama_kategori; ?></td>
        <td>
            <!-- EDIT -->
            <a href="<?= site_url('kategori/edit/'.$k->id); ?>" 
            class="btn btn-warning btn-sm">Edit</a>

            <a href="<?= site_url('kategori/hapus/'.$k->id); ?>" 
            onclick="return confirm('Yakin mau hapus data ini?')" 
            class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>
    
<?php endforeach; ?>
</tbody>

</table>

        </div>
    </div>
</div>
</div>