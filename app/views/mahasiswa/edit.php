<div class="container">
<form action="<?= BASEURL;?>/mahasiswa/ubah" method="post">
<input type="hidden" class="form-control" id="id" name="id" value="<?= $data['mhs']['id']; ?>" >
        <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mhs']['nama']; ?>" >
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="number" class="form-control" id="nim" name="nim" value="<?= $data['mhs']['nim']; ?>" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?= $data['mhs']['email']; ?>" >
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Sistem Informasi" <?= $data['mhs']['jurusan']=='Sistem Informasi'?'Selected':''; ?>>Sistem Informasi</option>
      <option value="Sistem Informasi Akuntansi" <?= $data['mhs']['jurusan']=='Sistem Informasi Akuntansi'?'Selected':'';?>>Sistem Informasi Akuntansi</option>
      <option value="Teknik Informatika" <?= $data['mhs']['jurusan']=='Teknik Informatika'?'Selected':'';?>>Teknik Informatika</option>
    </select>
    <br>
       <a href="<?= BASEURL;?>/mahasiswa/"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button></a>
        <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
</div>