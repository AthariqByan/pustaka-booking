<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
    <div class="row">
        <div class="col-md-20">
            <div class="p-5">
                <form action="<?= base_url('siswa/simpanDataMahasiswa'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama" name="nama">
                        <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control form-control-user" id="nis" placeholder="NIS" name="nis">
                        <?= form_error('nis','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="kelas" placeholder="Kelas" name="kelas">
                        <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control form-control-user" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir">
                        <?= form_error('tgllahir','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="tmplahir" placeholder="Tempat Lahir" name="tmplahir">
                        <?= form_error('tmplahir','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat" name="alamat">
                        <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div>
                    <div class="form-group">
                    <select name="agama" class="form-control form-control-user">
                            <option value="">Pilih Agama</option>
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
                        <input type="radio" name="jnskel" value="Laki-Laki"> Laki - Laki
                        <input type="radio" name="jnskel" value="Perempuan"> Perempuan</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>