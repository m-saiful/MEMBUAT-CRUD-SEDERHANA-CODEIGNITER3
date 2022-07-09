<h4><b>Prodi D3TI</b></h4>

<hr class="solid">

<!-- Sidebar - Brand -->
<ul class="nav nav-pills nav-stacked">
  
  <h4 class="w3-bar-item"><small>Menu</small></h4>

  <!-- Dashboard -->
  <?php if($title == 'Dashboard' ): ?>
  <li class="active">
    <?php else : ?>
  <li class="">
    <?php endif; ?>
    <a href="<?= base_url('dashboard'); ?>">
    <span>Dashboard</span></a>
  </li>

  <!-- Dosen -->
  <?php if($title == 'Dosen' or $title == 'Tambah Dosen' or $title == 'View' or $title == 'Edit Dosen' ): ?>
  <li class="active">
    <?php else : ?>
  <li class="">
    <?php endif; ?>
    <a href="<?= base_url('dosen'); ?>">
    <span>Dosen</span></a>
  </li>

  <hr class="solid">

  <h4 class="w3-bar-item"><small>Profile</small></h4>
  <!-- LogOut -->
  <?php if($title == 'Logout' ): ?>
  <li class="active">
    <?php else : ?>
  <li class="">
    <?php endif; ?>
    <a href="#">
    <span>Log Out</span></a>
  </li>

</ul><br>



