<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"> <?= $page ?></h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <input type="hidden" name="id" id="id" value="<?= $siswa['id'] ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta_matpel">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn"
                                        value="<?= $siswa['nisn'] ?>" placeholder="NISN">
                                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nis">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis"
                                        value="<?= $siswa['nis'] ?>" placeholder="NIS">
                                    <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                        value="<?= $siswa['password'] ?>" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="<?= $siswa['nama'] ?>" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="col btn btn-lg btn-primary ">Edit</button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                </form>
            </div>
        </div>
    </div>
</div>