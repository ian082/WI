<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <form action="<?= base_url("order/simpan_data_awal") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="inisial" class="col-sm-2 col-form-label">Inisial</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inisial" name="inisial" placeholder="Pria & Wanita" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tema" name="tema" value="<?= $theme ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cover" class="col-sm-5 col-form-label">Gambar Cover</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input ml-4" id="cover" name="cover">
                            <label class="custom-file-label" for="image">Pilih File</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <select class="form-control" name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Kristen">Lainnya</option>
                        </select>
                    </div>
            </div>
        </div>
        <div class="form-group row justify-content-end mt-4">
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