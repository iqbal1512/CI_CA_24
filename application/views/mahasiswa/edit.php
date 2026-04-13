<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit Mahasiswa</h2>

<form method="post" action="<?= site_url('mahasiswa/update/'.$mahasiswa->id); ?>">

<div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" 
           value="<?= $mahasiswa->nim; ?>" required>
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" 
           value="<?= $mahasiswa->nama; ?>" required>
</div>

<div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" 
           value="<?= $mahasiswa->jurusan; ?>" required>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control"><?= $mahasiswa->alamat; ?></textarea>
</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>

</form>
</div>