<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah Mahasiswa</h2>

<form method="post" action="<?= site_url('mahasiswa/simpan'); ?>">

<div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" required>
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
</div>

<div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" required>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"></textarea>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>

</form>
</div>