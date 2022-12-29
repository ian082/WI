<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <form action="<?= base_url("order/data_mempelai") ?>" method="post" enctype="multipart/form-data">
                    <h3 class="mt-2 mb-3">Mempelai Pria</h3>
                    <div class="form-group row">
                        <label for="mempelai_pria" class="col-sm-5 col-form-label">Nama Mempelai Pria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mempelai_pria" name="mempelai_pria" placeholder="Nama Mempelai Pria" required>
                            <label for="foto_pria" class="col-form-label mt-2">Foto Mempelai Pria</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input ml-4" id="foto_pria" name="foto_pria">
                                <label class="custom-file-label" for="image">Pilih File</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ayah_pria" class="col-sm-5 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ayah_pria" name="nama_ayah_pria" placeholder="Nama Ayah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ibu_pria" class="col-sm-5 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibu_pria" name="nama_ibu_pria" placeholder="Nama Ibu" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke_pria" class="col-sm-5 col-form-label">Anak Ke - </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="anak_ke_pria" name="anak_ke_pria" placeholder="Anak Ke - " required>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3 class="mt-1 mb-3">Mempelai Wanita</h3>
                    <div class="form-group row">
                        <label for="mempelai_wanita" class="col-sm-5 col-form-label">Nama Mempelai Wanita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mempelai_wanita" name="mempelai_wanita" placeholder="Nama Mempelai Wanita" required>
                            <label for="foto_wanita" class="col-form-label mt-2">Foto Mempelai Wanita</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input ml-4" id="foto_wanita" name="foto_wanita">
                                <label class="custom-file-label" for="image">Pilih File</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ayah_wanita" class="col-sm-5 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ayah_wanita" name="nama_ayah_wanita" placeholder="Nama Ayah" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ibu_wanita" class="col-sm-5 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibu_wanita" name="nama_ibu_wanita" placeholder="Nama Ibu" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke_wanita" class="col-sm-5 col-form-label">Anak Ke - </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="anak_ke_wanita" name="anak_ke_wanita" placeholder="Anak Ke - " required>
                        </div>
                    </div>
            </div>
        </div>
        <br>
        <div class="form-group row justify-content-end mb-5">
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