<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title; ?>
    </title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #120c6e, #4e73df 100%);
        }

        hr {
            background-color: white;
        }
    </style>
</head>

<body>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <a class="sidebar-brand d-flex align-items-center justify-content-center text-primary">
                    <div class="pl-3">
                        <i class="fab fa-fw fa-viadeo"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Wedding Invitation</div>
                </a>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <li class="nav-item">
                        <a class="nav-link text-primary" href="<?= base_url('auth/'); ?>">
                            Login
                        </a>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <div class="card mr-auto ml-auto mt-5 mb-5 col-lg-6">
                <div class="card-body">
                    <h2 class="card-title text-center text-primary mt-3 mb-4">Welcome</h2>
                    <p class="card-text text-primary mb-3">Wedding Digital Invitation adalah platform pembuatan undangan pernikahan digital. Undangan pernikahan anda akan lebih praktis dan kekinian, dengan url yang dapat disebar otomatis ke semua kontak WhatsApp, anda telah memberikan kesan terbaik di momen spesial.</p>
                </div>
            </div>
            <hr>
            <br>
            <div class="container-fluid" id="tema">
                <h2 class="text-center text-white">Themes</h2>
                <section class="fdb-block team-1" id="tema">
                    <div class="container">
                        <div class="row">

                            <?php foreach ($tema as $row) { ?>
                                <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                                    <div class="fdb-box p-0">
                                        <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/themes/<?= $row['nama_theme']; ?>/preview.png">

                                        <div class="content p-2 d-flex justify-content-center">
                                            <h3 class="text-white"><?= $row['nama_theme']; ?></h3>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <p class="mt-2 mr-2"><a href="<?= base_url('auth/'); ?>" class="btn btn-success btn-sm">Order</a></p>
                                            <p class="mt-2"><a href="<?= base_url('demo/') . $row['nama_theme']; ?>/rozzy-eha" class="btn btn-primary btn-sm">Demo</a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </section>

            </div>
            <br>
            <hr>

        </div>
    </div>
    <div class="card mr-auto ml-auto mt-5 mb-5 col-lg-6">
        <div class="card-body">
            <h2 class="card-title text-center text-primary mt-3 mb-4">Contact</h2>
            <hr>
            <h4 class="card-text text-center text-primary mt-3 mb-4">Alamat</h4>
            <p class="card-text text-center text-primary mb-3">Perum Regency, Cikampek, Karawang, Jawa Barat</p>
            <hr>
            <h4 class="card-text text-center text-primary mt-3 mb-4">Email</h4>
            <p class="card-text text-center text-primary mb-3">ikhsanhadiansyah302@gmail.com</p>
            <hr>
            <h4 class="card-text text-center text-primary mt-3 mb-4">Telp (WhatsApp)</h4>
            <p class="card-text text-center text-primary mb-3">08558359732</p>
        </div>
    </div>
    <br>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Wedding Digital <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>
</body>

</html>