<!-- Begin Page Content -->
<div class="container-fluid">

    <section class="fdb-block team-1" id="tema">
        <div class="container">
            <div class="row">

                <?php foreach ($tema as $row) { ?>
                    <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
                        <div class="fdb-box p-0">
                            <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/themes/<?= $row['nama_theme']; ?>/preview.png">

                            <div class="content p-2 d-flex justify-content-center">
                                <h3><?= $row['nama_theme']; ?></h3>
                            </div>

                            <div class="d-flex justify-content-center">
                                <p class="mt-2 mr-2"><a href="<?= base_url('demo/') . $row['nama_theme']; ?>/rozzy-eha" class="btn btn-primary btn-sm">Demo</a></p>
                                <p class="mt-2"><a href="<?= base_url('themes/delete/') . $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->