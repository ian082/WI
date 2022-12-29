<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <form action="<?= base_url("order/norek") ?>" method="post" enctype="multipart/form-data">
                    <h3 class="mt-2 mb-3">Rekening</h3>
                    <div class="form-group row">
                        <label for="nama_bank" class="col-sm-5 col-form-label">Nama Bank</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Nama Bank" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_rek" class="col-sm-5 col-form-label">Nomor Rekening</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="Nomor Rekening" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="atas_nama" class="col-sm-5 col-form-label">Atas Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="atas_nama" name="atas_nama" placeholder="Atas Nama" required>
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