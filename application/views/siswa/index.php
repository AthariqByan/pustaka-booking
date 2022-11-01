<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="siswa/tambah" type="submit" class="btn btn-primary mb-3"><i class="fas fa-file-alt"></i> Siswa Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($siswa as $sis) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $sis['nama']; ?></td>
                        <td><?= $sis['nis']; ?></td>
                        <td><?= $sis['kelas']; ?></td>
                        <td><?= $sis['tgllahir']; ?></td>
                        <td><?= $sis['tmplahir']; ?></td>
                        <td><?= $sis['alamat']; ?></td>
                        <td><?= $sis['jnskel']; ?></td>
                        <td><?= $sis['agama']; ?></td>  
                        <td>
                            <a href="<?= base_url('siswa/edit/').$sis['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('siswa/hapus/').$sis['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $sis['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah siswa baru-->

