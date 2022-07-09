<div class="container">
  <h1><i class="far fa-newspaper"></i> <?= $title; ?></h1>

  <hr>
  <h4><small>Data Dosenssss</small></h4>
  <br>
</div>

  <div class="container">
    <?= form_error('image', '<div class="error">', '</div>'); ?>    
    <?= $this->session->flashdata('message'); ?>
  </div>

  <a href="<?= base_url('dosen/tambah');?>" class="btn btn-primary" role="button">
    Tambah Dosen p
  </a><br><br>

<div class="panel panel-default">
  <div class="panel-body">

  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Bidang</th>
        <th>Jumlah Bimbingan</th>
        <th>Tanggal</th>
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
        <td><?= $dsn['tanggal']; ?></td>
                                        
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

