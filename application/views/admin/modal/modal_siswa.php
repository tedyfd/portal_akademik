<div class="modal fade" id="siswa_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/siswa_add') ?>" method="post">
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <input type="number" class="form-control" id="nisn" name="nisn" placeholder="NISN">
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="number" class="form-control" id="nis" name="nis" placeholder="NIS">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <button id="siswa_submmit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-upload fa-sm "></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>