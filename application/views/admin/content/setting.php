<div class="row">
    <div class="col-lg-8">
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
                <?= $this->session->flashdata('err') ?>
                <form method="POST" action="<?= base_url('admin/setting') ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="old_psswd">Password Lama:</label>
                                    <input type="password" class="form-control" name="old_psswd" id="old_psswd">
                                    <?= form_error('old_psswd', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="psswd1">Password Baru:</label>
                                    <input type="password" class="form-control" name="psswd1" id="psswd1">
                                    <?= form_error('psswd1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="psswd2">Ulangi:</label>
                                    <input type="password" class="form-control" name="psswd2" id="psswd2">
                                    <?= form_error('psswd2', '<small class="text-danger pl-3">', '</small>'); ?>
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