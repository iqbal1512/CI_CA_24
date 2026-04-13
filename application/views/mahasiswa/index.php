<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Data Mahasiswa</h2>

<a href="<?= site_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<table class="table table-bordered">
<thead>
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php $no=1; foreach($mahasiswa as $m): ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $m->nim; ?></td>
    <td><?= $m->nama; ?></td>
    <td><?= $m->jurusan; ?></td>
    <td><?= $m->alamat; ?></td>
    <td>
        <a href="<?= site_url('mahasiswa/hapus/'.$m->id); ?>" 
           onclick="return confirm('Yakin?')" 
           class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>