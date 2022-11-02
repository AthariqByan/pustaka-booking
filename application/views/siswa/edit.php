<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
              <form action="<?= base_url('siswa/editDataSiswa')?>" method="post"  enctype="multipart/form-data">
                  <input type="hidden" value="<?= $siswa['id']?>" name="id">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                  <input value="<?= $siswa['nama']?>" type="text" class="form-control"  id="nama" name="nama" require>
                    <div id="nama" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                  <input value="<?= $siswa['nis']?>" type="text" class="form-control" id="nis" name="nis" require>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                  <input type="text" value="<?= $siswa['kelas']?>" class="form-control" id="kelas" name="kelas" require>
              </div>
              <div class="mb-3">
                <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                  <input value="<?= $siswa['tgllahir']?>" type="date" class="form-control" id="tgllahir" name="tgllahir" require>
              </div>
              <div class="mb-3">
                <label for="tmplahir" class="form-label">Tempat Lahir</label>
                  <input value="<?= $siswa['tmplahir']?>" type="text" class="form-control" id="tmplahir" name="tmplahir" require>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                  <textarea class="form-control" id="alamat" rows="3" name="alamat" require><?= $siswa['alamat']?></textarea>
              </div>
              <div class="mb-3">
                <label for="jnskel" class="form-label">Jenis Kelamin</label>
                  <select  class="form-control form-control-user" aria-label=".form-select-lg example" name="jnskel" require>
                    <option value="<?= $siswa['jnskel']?>">Data Tidak Dirubah</option>
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="mb-3">
                <label  for="agama" class="form-label">Agama</label>
                  <select class="form-control form-control-user" aria-label=".form-select-lg example" name="agama" require>
                    <option value="<?= $siswa['agama']?>">Data Tidak Dirubah</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                  </select>
              </div>
              <div class="form-group">
                <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
              </div>
              </form> 
        </div>
    </div>
</div>