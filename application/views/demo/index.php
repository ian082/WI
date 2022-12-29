<?php
error_reporting(0);
if (rawurldecode($nama) != null) {
    $namatamu = str_replace("+", " ", $nama);
} else {
    $namatamu = "Tamu Undangan";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>

    <title><?= $show->inisial ?></title>

    <!-- REQUIRED META AREA	 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta property="og:title" content="<?= $show->inisial ?>">
    <meta property="og:description" content="Yth <?= rawurldecode($namatamu) ?> Kamu di Undangan Ke Pernikahan <?= $show->inisial ?>">
    <meta property="og:image" content="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:title" content="Undangan Pernikahan " />
    <meta class="meta-description" property="twitter:description" content="Yth <?= rawurldecode($namatamu) ?> Kamu di Undangan Ke Pernikahan <?= $show->inisial ?>" />
    <meta property="twitter:image" content="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>" />
    <meta name="author" content="KoFiDev" />

    <!-- CSS STYLE AREA	 -->
    <link itemprop="thumbnailUrl" href="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>">
    <link itemprop="url" href="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>">
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png?<?= date("Y-m-d"); ?>">
    <link href="<?= base_url() ?>assets/themes/<?= $themes ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/themes/<?= $themes ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/<?= $themes ?>/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/themes/<?= $themes ?>/css/style.css">

    <style>
        .style4 {
            text-align: center;
        }

        .style4 .box,
        .style4 .box2 {
            padding: 20px 0;
            color: #000;
        }

        .style4 .box .name,
        .style4 .box2 .name,
        .style4 .box2 .name2 {
            margin-top: 20px;
            font-size: 13px;
            color: black;
        }

        .style4 .box:before,
        .style4 .box2:before,
        .style4 .box:after,
        .style4 .box2:after {
            content: "";
            position: absolute;
            background: #999;
            width: 20%;
            height: 1px;
            left: 40%;
        }

        .style4 .box:before,
        .style4 .box2:before {
            top: -1px;
        }

        .style4 .box:after,
        .style4 .box2:after {
            bottom: -1px;
        }

        .style4 .box2 {
            color: #2D1E2F;
            transition: 0.6s ease-in-out;
        }

        .style4 .box2 .name2 {
            color: #e71d36;
        }

        .style4 .box2:before,
        .style4 .box2:after {
            background: #1C1F33;
            transition: 0.6s ease-in-out;
        }

        .style4 .box2:hover:before,
        .style4 .box2:hover:after {
            width: 60%;
            left: 20%;
        }
    </style>
</head>

<body>

    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"></span>
    <!-- ============== HALAMAN AWAL =============== -->
    <div class="thebegining">
        <!--<div class="thebegining">-->
        <div class="content-thebegining">
            <!--<img src="<?= base_url() ?>assets/img/logo2.png" style="width:100px;height: 100px;"> <br>-->
        </div>

        <div class="salam">
            <a style="font-weight: bold;font-size: 30px;color: #fff; font-family:'Kaushan';text-decoration: none;"><?= $show->inisial ?></a><br>
            <a style="font-weight: normal;font-size:12px; color:#fff;text-decoration: none;">Yth.</a><br>
            <a style="font-weight: bold;font-size:14px;color:#fff;text-decoration: none;"><?= rawurldecode($namatamu) ?></a><br>
            <?php if ($show->agama == "Islam") { ?>

                <a style="font-weight: normal;font-size:10px;color: #fff;text-decoration: none;">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri Resepsi Pernikahan kami. </a>
            <?php } else { ?>
                <p class="mempelai-intermezzo">Tanpa Mengurangi Rasa Hormat, Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami. </p>
            <?php } ?><br>

        </div>
        <a style="font-weight: bold;font-size: 16px;color: #fff;position: absolute;bottom: 20px;right: 0;left: 0;">klik untuk membuka undangan</a>
    </div>

    <div class="dekorasi-all">
        <?php if ($themes == "radiantyellow") { ?>
            <!-- GAMBAR DEKORASI TENGAH -->
            <img id="" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/top_flower.png" class="imgatas">
        <?php } else { ?>
            <!-- GAMBAR DEKORASI KIRI -->
            <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kiri-atas.png" class="imgatas-kiri">
        <?php } ?>
        <!-- GAMBAR DEKORASI KANAN -->
        <!-- <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kanan-atas.png" class="imgatas-kanan">  -->
    </div>

    <div class="dekorasi-sampul">
        <!-- GAMBAR DEKORASI TENGAH -->
        <!-- <img id="" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/top_flower.png" class="imgatas">  -->

        <!-- GAMBAR DEKORASI KIRI -->
        <!-- <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kiri-atas.png" class="imgatas-kiri"> -->
        <!-- GAMBAR DEKORASI KANAN -->
        <!-- <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kanan-atas.png" class="imgatas-kanan"> -->
    </div>

    <div id="konten" style="z-index: 1;">



        <!-- ============== MUSIK =============== -->
        <audio loop src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->musik ?>" id="audio"></audio>

        <!-- ============== SAMPUL =============== -->
        <div id="sampul-konten" class="konten">
            <table style="width: 100%;margin-top:-50px">
                <!-- tambahkan margin-top:-XX jika kurang ketas -->
                <tbody>
                    <tr>
                        <th style="text-align: center;">
                            <span class="the-wedding">- THE WEDDING OF -</span>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: center;margin-bottom:-15px;display: block;">
                            <span class="nama-mempelai"><?= $show->inisial ?></span>
                        </th>
                    </tr>
                    <tr>
                        <th style="text-align: center;">
                            <span class="tanggal-weddingnya"></span>
                        </th>
                    </tr>

                    <tr>
                        <th style="position: relative;text-align: center;display:block;margin-top:40px">
                            <?php if ($themes == "radiantyellow") { ?>
                                <!-- image border cover -->
                                <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/bg-flower.png" class="cover-border" /><br>
                                <!-- image border cover -->
                                <img src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>" class="cover-foto" />

                            <?php } else { ?>

                                <!-- image border cover -->
                                <img src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_cover ?>" class="cover-foto" />
                                <!-- image border cover -->
                                <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/bg-flower.png" class="cover-border" /><br>

                            <?php } ?>




                        </th>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- ============== MEMPELAI =============== -->
        <div id="mempelai-konten" class="konten" style="display: none;">
            <?php if ($show->agama == "Islam") { ?>
                <img src="<?= base_url() ?>assets/img/bismillah.png" class="mempelai-salam-pembuka" /><br>
                <p class="mempelai-intermezzo">Assalamu'alaikum warahmatullahi wabarakatuh Dengan memohon rahmat dan ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri kami. </p>
            <?php } else { ?>
                <p class="mempelai-intermezzo">Mohon do'a restu Bapak/Ibu/Saudara dalam rangka melangsungkan pernikahan putra putri kami : </p>
            <?php } ?><br>
            <img src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_pria ?>" class="mempelai-img" style="object-fit: cover;" />

            <h1 class="mempelai-pria-nama"><?= $show->mempelai_pria ?></h1>
            <p class="mempelai-pria-ortu">Anak <?= $show->ke_pria ?> Dari Keluarga</p>
            <p class="mempelai-pria-ortu">Bpk. <?= $show->otl_mempelai_pria ?> dan <?= $show->otp_mempelai_pria ?></p>
            <h1 class="dengan">dengan</h1>

            <img src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $show->gambar_wanita ?>" class="mempelai-img" style="object-fit: cover;" />

            <h1 class="mempelai-wanita-nama"><?= $show->mempelai_wanita ?></h1>
            <p class="mempelai-pria-ortu">Anak <?= $show->ke_wanita ?> Dari Keluarga</p>
            <p class="mempelai-wanita-ortu">Bpk. <?= $show->otl_mempelai_wanita ?> dan Ibu <?= $show->otp_mempelai_wanita ?></p>
            <br>
            <?php if ($show->agama == "Islam") { ?>
                <div class="section style4">
                    <div class="container">
                        <div class="col-xs-12 col-sm-12">
                            <div class="box">
                                "Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah."
                                <div class="name">
                                    (QS. Az-Zariyat: 49)
                                </div><!-- /name -->
                            </div><!-- /box -->
                        </div><!-- /col-sm-6 -->
                    </div>
                </div>
            <?php } else { ?>
                <div class="section style4">
                    <div class="container">
                        <div class="col-xs-12 col-sm-12">
                            <div class="box">
                                "Dan firman-Nya: Sebab itu laki-laki akan meninggalkan ayah dan ibunya dan bersatu dengan isterinya, sehingga keduanya itu menjadi satu daging.Demikianlah mereka bukan lagi dua, melainkan satu. Karena itu, apa yang telah dipersatukan Allah, tidak boleh diceraikan manusia"
                                <div class="name">
                                    (Matius 19 : 5-6)
                                </div><!-- /name -->
                            </div><!-- /box -->
                        </div><!-- /col-sm-6 -->
                    </div>
                </div>
            <?php } ?><br>
        </div>


        <!-- ============== ACARA =============== -->
        <div id="acara-konten" style="display: none;" class="konten">

            <div class="section-title">
                <h2> Acara </h2>
            </div>

            <div class="acaranya">
                <table class="tb-acara">
                    <thead>
                        <th colspan="4" class="acara-title">
                            <!-- <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/akad-badge.png"> -->
                            <?php if ($show->agama == "Islam") { ?>
                                - AKAD NIKAH -
                            <?php } else { ?>
                                - PEMBERKATAN -
                            <?php } ?><br>

                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara" id="tanggal-acara-akad"></th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara"><?= $show->jam_akad ?></th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></th>
                            <th class="tb-ket-acara"> Tempat</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara"><?= $show->tempat_akad ?></th>
                        </tr>


                    </tbody>
                </table>

                <table class="tb-acara">
                    <thead>
                        <th colspan="4" class="acara-title">

                            <!-- <img src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/resepsi-badge.png"> -->

                            - RESEPSI -
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-calendar icon-acara"></th>
                            <th class="tb-ket-acara"> Tanggal</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara " id="tanggal-acara-resepsi">2022/11/13</th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-timer icon-acara"></th>
                            <th class="tb-ket-acara"> Jam</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara"><?= $show->jam_resepsi ?></th>
                        </tr>

                        <tr>
                            <th class="tb-ic-acara"><i class="mdi mdi-map-marker icon-acara"></th>
                            <th class="tb-ket-acara"> Tempat</th>
                            <th class="tb-anu-acara">:</th>
                            <th class="tb-isi-acara"><?= $show->tempat_resepsi ?></th>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>


        <!-- ============== ALBUM =============== -->
        <div id="album-konten" style="display: none;">
            <section class="gallery-section section-padding" id="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="section-title">
                                <h2>Gallery Foto Kami</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="gallery-grids">

                                <?php foreach ($album as $album) : ?>
                                    <div class="grid">
                                        <a href="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $album->gambar ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?= base_url() ?>assets/users/<?= $show->username ?>/<?= $album->gambar ?>" alt>
                                        </a>
                                    </div>
                                <?php endforeach; ?>


                            </div>

                        </div>



                    </div>
                </div>
            </section>
        </div>

        <!-- ============== UACAPAN/KOMENTAR =============== -->
        <div id="ucapan-konten" style="display: none;" class="konten">

            <div class="col-12 ucapan-field">
                <div class="section-title">
                    <h2>Beri Ucapan</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input id="id" type="hidden" readonly="true" value="<?= $show->id_user ?>" required>
                            <input id="nama" type="text" class="form-control mt-2" placeholder="Nama Anda" value="<?= $invite ?>" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea id="komentar" class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan anda.." rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button id="submitKomen" class="btn btn-primary btn-block">Kirim</button>
                        <!-- <img src="<?= base_url() ?>assets/base/img/loadinga.svg" height="30px" style="display:none;" id="loading_"> -->
                    </div>
                </div>
            </div>
            <div class="komen-netizen">

                <div class="layout-komen">
                    <?php foreach ($ucapan as $list) : ?>
                        <div class="komen">
                            <div class="col-12 komen-nama">
                                <?= $list->nama_tamu ?>
                            </div>
                            <div class="col-12 komen-isi">
                                <?= $list->isi_ucapan ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <a href="#" id="loadMore" class="btn btn-primary btn-block" role="button">Lebih Banyak.</a>
            </div>


        </div>

        <!-- ============== HADIAH =============== -->
        <div id="hadiah-konten" style="display: none;" class="konten">
            <div class="section-title">
                <h2>Berikan Hadiah</h2>
            </div>
            <div class="d-flex justify-content-center text-center">
                <div class="col-md-4 col-sm-12 col-md-offset-4">
                    <p class="description">Bagi yang ingin memberikan hadiah untuk pernikahan kami, silahkan transfer ke rekening berikut :</p>

                    <div class="card">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item"><b><?= $show->nama_bank ?></b><br>
                                <span id="norek2"><?= $show->no_rek ?></span><br>
                                <?= $show->atas_nama ?>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

        <!-- ============== LOKASI =============== -->
        <div id="lokasi-konten" style="display: none;" class="konten">

            <div class="section-title">
                <h2>Denah Lokasi</h2>
            </div>
            <div class="col-12 maps">
                <iframe src="<?= $show->link_map ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>

    <!-- ============== Protokol Kesehatan =============== -->
    <div id="prokes-konten" class="konten" style="display: none;">
        <div class="container">
            <div class="section-title">
                <h2>Protokol Kesehatan</h2>
            </div>
            <p class="description">Cegah Penyebaran Virus Corona dengan Menerapkan Protokol Kesehatan 3M :</p>
            <div class="row">
                <img src="<?= base_url() ?>assets/img/prokes/masker.svg" class="mempelai-img" />

                <h4 class="description">Memakai Masker</h4>
                <p style="font-size: 10px; padding:0 10px">Selalu gunakan masker dengan benar dan tepat saat berinteraksi dengan orang lain.</p>

                <img src="<?= base_url() ?>assets/img/prokes/cuci-tangan.svg" class="mempelai-img" />

                <h4 class="description">Mencuci Tangan</h4>
                <p style="font-size: 10px; padding:0 10px"> Cuci tangan setelah menyentuh benda dan sebelum menyentuh bagian mata, hidung, dan mulut.</p>
                <img src="<?= base_url() ?>assets/img/prokes/jaga-jarak.png" class="mempelai-img" />

                <h4 class="description">Menjaga Jarak</h4>
                <p style="font-size: 10px; padding:0 10px">Selalu menjaga jarak fisik lebih dari 1-2 meter dengan orang lain.</p>
            </div>
        </div>
    </div>

    <!-- ============== BOTTOM NAVIGATION =============== -->
    <nav class="mobile-bottom-nav2" id="nav">

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;" id="hehe">

                    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon mdi mdi-home"></i>
                            Sampul
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="mempelai">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon mdi mdi-heart"></i>
                            Mempelai
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="acara">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon mdi mdi-calendar-text"></i>
                            Acara
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="prokes">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon mdi mdi-alert-decagram"></i>
                            Prokes
                        </div>
                    </div>
                    <div class="mobile-bottom-nav__item" id="lain">
                        <div class="mobile-bottom-nav__item-content">
                            <i class="navbar-icon mdi mdi-more" id="lain"></i>
                            Lain
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>
    <nav class="mobile-bottom-nav2" id="nav2" style="display: none;">

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px; " id="hehe">
                    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active" id="sampul">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-home"></i>
                            Sampul
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="mempelai">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-heart"></i>
                            Mempelai
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="acara">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-calendar-text"></i>
                            Acara
                        </div>
                    </div>


                    <div class="mobile-bottom-nav__item" id="ucapan">

                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-message-bulleted"></i>
                            Ucapan
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12" style="display: flex;margin-bottom: 5px;margin-top: 5px;">
                    <div class="mobile-bottom-nav__item" id="album">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-image"></i>
                            Album
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="hadiah">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-credit-card"></i>
                            Hadiah
                        </div>
                    </div>

                    <div class="mobile-bottom-nav__item" id="lokasi">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-map-marker"></i>
                            Lokasi
                        </div>
                    </div>


                    <div class="mobile-bottom-nav__item">
                        <div class="mobile-bottom-nav__item-content icons">
                            <i class="navbar-icon mdi mdi-close-circle" style="color:red;" id="tutup"></i>
                            Tutup
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </nav>


</body>

<div class="dekorasi-all dekorasi-all-bawah">
    <?php if ($themes == "radiantyellow") { ?>
        <!-- GAMBAR DEKORASI TENGAH -->
        <img class="imgbawah" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/bottom_flower.png">
    <?php } else { ?>
        <!-- GAMBAR DEKORASI KIRI -->
        <img class="imgbawah-kanan" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kanan-bawah.png">
    <?php } ?>
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kiri" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kiri-bawah.png" >  -->
</div>

<div class="dekorasi-sampul dekorasi-sampul-bawah">
    <!-- GAMBAR DEKORASI TENGAH -->
    <!-- <img class="imgbawah" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/bottom_flower.png" >  -->
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kanan" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kanan-bawah.png" >  -->
    <!-- GAMBAR DEKORASI KIRI -->
    <!-- <img class="imgbawah-kiri" src="<?= base_url() ?>assets/themes/<?= $themes ?>/img/kiri-bawah.png" > -->
</div>


<a id="hadiah" style="cursor:pointer; top:auto !important; bottom: 12% !important;" class="box-hadiah">
    <i class="mdi mdi-gift my-hadiah"> BERI HADIAH</i></a> <a id="music-button" style="cursor:pointer;" class="musik">
    <i class="mdi mdi-music my-musik"></i></a>
<!-- mengirimkan data php ke javascript -->
<script>
    var base_url = '<?= base_url() ?>';
</script>
<script>
    var tanggal_akad = '<?= $show->tgl_akad ?>';
</script>
<script>
    var tanggal_resepsi = '<?= $show->tgl_akad ?>';
</script>
<!-- mengirimkan data php ke javascript -->

<!-- JS AREA -->
<script src="<?= base_url() ?>assets/themes/<?= $themes ?>/js/moment-with-locales.js"></script>
<script src="<?= base_url() ?>assets/themes/<?= $themes ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/themes/<?= $themes ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/themes/<?= $themes ?>/js/jquery-plugin-collection.js"></script>
<script src="<?= base_url() ?>assets/themes/<?= $themes ?>/js/script.js"></script>

</html>