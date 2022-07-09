<div class="col-sm-10">
  <div class="container">

    <!-- Start Content -->

    <h1><i class="far fa-newspaper"></i> <?= $title; ?> Dosen</h1>
    <hr>
    <h4><a href="<?= base_url('dosen/index'); ?>" class="previous">&laquo; Kembali</a></h4>
    <h4><small>Data Dosen / Detail Dosen</small></h4><br>

    <div class="panel panel-default">
      <div class="panel-heading">Identitas Dosen</div>
               
         <div class="panel-body">
            <table height="350px">
                  <tr>
                     <th width="180px">Nama</th>
                     <th width="25px">:</th>
                     <td><?= $dosen['nama']; ?></td>
                  </tr>
                  
                  <tr>
                     <th>NIK</th>
                     <th>:</th>
                     <td><?= $dosen['id']; ?></td>
                  </tr>

                  <tr>
                     <th>Jenis Kelamin</th>
                     <th>:</th>
                     <td><?= $dosen['jenis_kelamin']; ?></td>
                  </tr>

                  <tr>
                     <th>Alamat</th>
                     <th>:</th>
                     <td><?= $dosen['alamat']; ?><td>
                  </tr>

                  <tr>
                     <th>Email</th>
                     <th>:</th>
                     <td><?= $dosen['email']; ?></td>
                  </tr>

                  <tr>
                     <th>No Hp</th>
                     <th>:</th>
                     <td><?= $dosen['no_hp']; ?></td>
                  </tr>

                  <tr>
                     <th>Bidang</th>
                     <th>:</th>
                     <td><?= $dosen['bidang']; ?></td>
                  </tr>

                  <tr>
                     <th>Jumlah Bimbingan</th>
                     <th>:</th>
                     <td><?= $dosen['jumlah_bimbingan']; ?></td>
                  </tr>

                  <tr>
                     <th>CV</th>
                     <th>:</th>
                     <td><?php echo anchor('assets/cv/dosen/'.$dosen['dokumen'],'Lihat di sini', array('target' => '_blank'));?></td>
                  </tr>

                  <tr>
                     <th>Pengalaman</th>
                     <th>:</th>
                     <td><?php echo anchor('assets/cv/dosen/'.$dosen['pengalaman'],'Lihat di sini', array('target' => '_blank')); ?></td>
                  </tr>     
               </table>
         </div>
    </div>

   <div class="container">
      <a href="<?= base_url('dosen/edit/'); ?><?= $dosen['id'];?>" class="btn btn-default" role="button">
        Edit data
      </a>
   </div>

    <!-- End Content -->
  </div>
</div>