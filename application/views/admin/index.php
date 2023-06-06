<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- row ux-->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2 ">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-info text-uppercase mb-1">Jumlah Anggota</div>
              <div class="h1 mb-0 font-weight-bold text-dark"><?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-gray-300 "></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Stok Buku Terdaftar</div>
              <div class="h1 mb-0 font-weight-bold text-dark">
                <?php
                $where = ['stok != 0'];
                $totalstok = $this->ModelBuku->total('stok', $where);
                echo $totalstok;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 ">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-success text-uppercase mb-1">Buku yang dipinjam</div>
              <div class="h1 mb-0 font-weight-bold text-dark">
                <?php
                $where = ['dipinjam != 0'];
                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                echo $totaldipinjam;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('pinjam'); ?>"><i class="fas fa-user-tag fa-3x  text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2 ">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Buku yang dibooking</div>
              <div class="h1 mb-0 font-weight-bold text-dark">
                <?php
                $where = ['dibooking !=0'];
                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                echo $totaldibooking;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('pinjam/daftarBooking'); ?>"><i class="fas fa-shopping-cart fa-3x  text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row ux-->

  <!-- Divider -->


  <!-- row table-->
  <div class="row">
    <div class="responsive col-xl-7 col-lg-6 col-sm-auto ml-auto mr-auto mt-auto">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data User</h1>
            <a href="<?php echo base_url('user/anggota'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Tampilkan</a>
        </div>
        <table class="table table-striped table-responsive table-hover">
          <thead>
            <tr class="table-danger">
              <th>#</th>
              <th>Nama Anggota</th>
              <th>Email</th>
              <th>Role ID</th>
              <th>Aktif</th>
              <th>Member Sejak</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($anggota as $a) { ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['role_id']; ?></td>
                <td><?= $a['is_active']; ?></td>
                <td><?= date('Y', $a['tanggal_input']); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- row table 2-->
    <div class="col-sm-auto ml-auto mr-auto mt-2">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h1>
            <a href="<?php echo base_url('siswa'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Tampilkan</a>
        </div>
        <table class="table table-striped table-responsive table-hover">
          <thead class="table-warning">
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
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- row table 3-->
    <div class="responsive col-sm-auto ml-auto mr-auto mt-auto">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Buku</h1>
            <a href="<?php echo base_url('buku'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search fa-sm text-white-50"></i> Tampilkan</a>
        </div>
        <table class="table table-striped table-responsive table-hover" id="table-datatable">
          <thead class="table-success">
            <tr>
              <th>#</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>ISBN</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($buku as $b) {
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['judul_buku']; ?></td>
                <td><?= $b['pengarang']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td><?= $b['isbn']; ?></td>
                <td><?= $b['stok']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->