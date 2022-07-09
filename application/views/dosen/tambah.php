<div class="col-sm-10">
  <div class="container">

    <!-- Start Content -->

    <h1><i class="far fa-newspaper"></i> <?= $title; ?></h1>
    <hr>
    <h4><a href="<?= base_url('dosen/index'); ?>" class="previous">&laquo; Kembali</a></h4>
    <h4><small>Tambah Dosen Baru</small></h4><br>

    <form action="<?php base_url('dosen/tambah'); ?>" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading">Identitas Dosen</div>
        <div class="panel-body">
            <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id">NIK :</label>
                        <input type="text" class="form-control" name="id" id="id" value="<?= set_value('id'); ?>">
                        <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
 
                        <br>
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                        <br>
                        <label for="jenis_kelamin">Jenis Kelamin :</label><br>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="" selected>Select :</option>                           
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>                            
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        
                        <br>
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                        <br>
                        <label for="file1">CV :</label>
                            <div class="form-control">
                                <input type="file" name="file1" class="custom-file-input" id="file1">
                            </div>
                            <small>*File berupa PDF</small>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                        <br>
                        <label for="no_hp">Nomor Hp :</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= set_value('no_hp'); ?>">
                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

                        <br>
                        <label for="bidang">Bidang :</label><br>
                        <select name="bidang" class="form-control">
                            <option value="" selected>Select :</option>                           
                            <option value="Multimedia">Multimedia</option>
                            <option value="Perancangan Web">Perancangan Web</option>
                            <option value="Struktur Data">Struktur Data</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Succes Skill">Succes Skill</option>
                            <option value="Pengolahan Basisdata">Pengolahan Basisdata</option>  
                            <option value="E-Commerce">E-Commerce</option>  
                            <option value="Metode Penelitian">Metode Penelitian</option>                        
                        </select>
                        <?= form_error('bidang', '<small class="text-danger pl-3">', '</small>'); ?>  
                                                             
                        <br>          
                        <label for="jumlah_bimbingan">Jumlah Bimbingan :</label><br>
                        <select name="jumlah_bimbingan" class="form-control">
                            <option value="" selected>Select :</option>                           
                            <option value="1">1</option>
                            <option value="2">2</option>    
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>     
                            <option value="9">9</option>
                            <option value="10">10</option>                   
                        </select>
                        <?= form_error('jumlah_bimbingan', '<small class="text-danger pl-3">', '</small>'); ?>

                        <br>
                        <label for="file2">Pengalaman :</label>
                            <div class="form-control">
                                <input type="file" name="file2" id="file2">
                            </div>
                            <small>*File berupa PDF</small>

                    </div>
                </div>
            </div>
        </div>
    </div>

    &emsp;&emsp;&emsp;
    <button type="reset"  value="Reset" class="btn btn-danger">Reset</button>  
    <button type="submit" class="btn btn-success" name="upload">Submit</button>

    </form>

    <!-- End Content -->
  </div>
</div>

<!-- panggil jquery -->
<script src="<?= base_url('assets/ckeditor/jquery/jquery-3.1.1.min.js'); ?>"></script>

<!-- panggil ckeditor.js -->
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>

<!-- panggil adapter jquery ckeditor -->
<script src="<?= base_url('assets/ckeditor/adapters/jquery.js'); ?>"></script>

<!-- setup selector -->
<script>
    $('textarea.texteditor').ckeditor();
</script>

<!-- Pengubah Nama File -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script> 

