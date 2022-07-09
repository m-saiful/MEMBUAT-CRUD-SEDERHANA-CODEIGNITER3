<div class="col-sm-10">
  <div class="container">

    <!-- Start Content -->
    <h1><i class="far fa-newspaper"></i> <?= $title; ?></h1>

    <hr>
    <h4><small>Data Dosen</small></h4>

    <div class="container-fluid">
      <?= form_error('image', '<div class="error">', '</div>'); ?>    
      <?= $this->session->flashdata('message'); ?>
    </div><br>

    <div class="container">
    <a href="<?= base_url('dosen/tambah');?>" class="btn btn-primary" role="button">
      Tambah Dosen
    </a>
    </div><br>

    <div class="panel panel-default">
      <div class="panel-body">

        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Bidang</th>
              <th>Jumlah Bimbingan</th>
              <th>Action</th>                              
            </tr>
          </thead>

          <tbody>
            <?php $i=1; ?>
            <?php foreach($dosen as $dsn) : ?>

            <tr>
              <td><?= $i++; ?></td>
              <td><?= $dsn['id']; ?></td>
              <td><?= character_limiter($dsn['nama'],25 );  ?></td>
              <td><?= $dsn['bidang']; ?></td>
              <td><?= $dsn['jumlah_bimbingan']; ?></td>
                                              
              <td>
                <div>
                  <a href="<?= base_url('dosen/view/'); ?><?= $dsn['id'];?>" class="btn btn-primary" role="button">view</a>
                  <a href="<?= base_url('dosen/edit/'); ?><?= $dsn['id'];?>" class="btn btn-success" role="button">Edit</a>
                  <a href="<?= base_url('dosen/delete/'); ?><?= $dsn['id'];?>/<?= $dsn['dokumen'];?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Dosen?');">Delete</a>
                </div>
              </td>
            </tr>

            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </div>
    
  <!-- End Content -->
  </div>
</div>

