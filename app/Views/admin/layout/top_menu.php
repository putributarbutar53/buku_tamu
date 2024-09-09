<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
  <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
    <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
  </button>
  <a class="navbar-brand mr-1 mr-sm-3" href="<?php echo site_url('admin0503/dashboard') ?>">
    <div class="d-flex align-items-center">
      <img class="mr-2" src="<?= base_url() ?>assets/img/logos/logo.svg" alt="" height="40" />
    </div>
  </a>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="navbarDropdownHome" href="<?= site_url() ?>admin0503/dashboard">Home</a>
      </li>
      <?php if (session()->get('admin_role') == 'superadmin') : ?>
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdownHome" href="<?= site_url() ?>admin0503/ormas">Permohonan Pendaftaran Ormas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdownHome" href="<?= site_url() ?>admin0503/skt">Permohonan SKT</a>
        </li>
      <?php endif; ?>
      <?php if (session()->get('admin_role') == 'user') : ?>
        <li class="nav-item">
          <?php if (session()->get('admin_validasi') != 1) : ?>
            <a class="nav-link" href="#">Permohonan SKT</a>
          <?php else : ?>
            <a class="nav-link" id="navbarDropdownSKT" href="<?= site_url() ?>admin0503/skt/add">Permohonan SKT</a>
          <?php endif; ?>
        </li>
      <?php endif; ?>
      <?php if (session()->get('admin_role') == 'superadmin') : ?>
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdownHome" href="<?= site_url() ?>admin0503/ormas/cekdata">Cek Data Ormas</a>
        </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" id="navbarDropdownHome" href="<?= site_url() ?>admin0503/profile">Pengaturan Akun</a>
      </li>
    </ul> -->

    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
      <li class="nav-item dropdown dropdown-on-hover">
        <a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-xl">
            <img class="rounded-circle" src="<?php if (session()->get('admin_picture')) {
                                                echo base_url() . getenv('dir.upload.profile') . session()->get('admin_picture') ?><?php } else {
                                                                                                                                    echo base_url() ?>assets/img/team/avatar.png<?php } ?>" alt="Image" id="photo_profile_in_top_menu" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
          <div class="bg-white rounded-soft py-2">
            <?php
            $displayText = session()->get('admin_name');
            ?>

            <a class="dropdown-item font-weight-bold text-warning" href="<?php echo site_url('admin0503/dashboard') ?>">
              <span class="fas fa-user mr-1"></span>
              <span><?php echo $displayText ?></span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin0503/profile') ?>">Setting Profile</a>
            <a class="dropdown-item" href="<?php echo site_url('admin0503/logout') ?>">Logout</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>