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
                    <input type="hidden" name="id" id="id" value="<?= $kelas_ta['id_th_kelas'] ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Tahun Ajaran</label>
                                    <select class="form-control" name="ta" id="ta">
                                        <?php foreach ($list_ta as $row) : ?>
                                        <?php if ($row['id_th'] == $kelas_ta['id_th']) : ?>
                                        <option value="<?= $row['id_th'] ?>" selected>
                                            <?= $row['th_ajaran'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_th'] ?>">
                                            <?= $row['th_ajaran'] ?></option>

                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelas">Kelas</label>
                                    <select class="form-control" name="kelas" id="kelas">
                                        <?php foreach ($list_kelas as $row) : ?>
                                        <?php if ($row['id_kelas'] == $kelas_ta['id_kelas']) : ?>
                                        <option value="<?= $row['id_kelas'] ?>" selected>
                                            <?= $row['kelas'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_kelas'] ?>"><?= $row['kelas'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
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