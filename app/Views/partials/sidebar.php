<li class="menu-header">Dashboard</li>

<li class="active"><a class="nav-link" href="<?= site_url('/') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

<li class="menu-header">Starter</li>
<?php if (hakAkses()->role == 2) { ?>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Bendahara</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('/bendahara/tagihan') ?>">Tagihan</a></li>
        </ul>
    </li>

<?php } ?>
<?php if (hakAkses()->role == 3) { ?>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Mahasiswa</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('mahasiswa/cek-tagihan') ?>">Cek Tagihan</a></li>
        </ul>
    </li>
<?php } ?>
<?php if (hakAkses()->role == 1) { ?>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pemimpin</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?= site_url('/pemimpin/tagihan') ?>">Lihat Tagian</a></li>
        </ul>
    </li>
<?php } ?>