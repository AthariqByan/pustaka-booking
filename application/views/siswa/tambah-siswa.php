<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            TAMBAH SISWA
          </div>
          <div class="card-body">
            <form action="<?php echo base_url() ?>index.php/siswa/simpan" method="POST">

              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nis" placeholder="Masukkan NISN Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label for="kelas">kelas</label>
                <select class="form-control" id="kelas" name="kelas"></select>
              </div>

              <div class="form-group">
                <label for="tgllahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgllahir" name="tgllahir">
              </div>

              <div class="form-group">
                <label for="tmplahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tmplahir" name="tmplahir">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
              </div>

              <!-- Membuat input agama dengan combo-box -->
              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>

              <!-- Membuat input jenis kelamin dengan radio button  -->
              <div class="form-group">
                    <input type="radio" name="jnskel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="jnskel" value="Perempuan"> Perempuan
              </div>
            <div>
              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>