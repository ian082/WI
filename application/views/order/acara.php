<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <form action="<?= base_url("order/acara") ?>" method="post" enctype="multipart/form-data">
                    <h3 class="mt-2 mb-3">Acara</h3>
                    <div class="form-group row">
                        <label for="tanggal_akad" class="col-sm-5 col-form-label">Tanggal Akad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_akad" name="tanggal_akad" placeholder="Tanggal Akad" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jam_akad" class="col-sm-5 col-form-label">Jam Akad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jam_akad" name="jam_akad" placeholder="Jam Akad" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_akad" class="col-sm-5 col-form-label">Tempat Akad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_akad" name="tempat_akad" placeholder="Tempat Akad" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jam_resepsi" class="col-sm-5 col-form-label">Jam Resepsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jam_resepsi" name="jam_resepsi" placeholder="Jam Resepsi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_resepsi" class="col-sm-5 col-form-label">Tempat Resepsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_resepsi" name="tempat_resepsi" placeholder="Tempat Resepsi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link_map" class="col-sm-5 col-form-label">Link Map</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link_map" name="link_map" placeholder="Link Map" required>
                        </div>
                    </div>
            </div>
        </div>
        <div class="form-group row justify-content-end mt-4 mb-5">
            <div class="col">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>


    </form>

</div>
</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->