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
                    <input type="hidden" name="id" id="id" value="<?= $matpel_ta['id_th_matpel'] ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta_kelas">Kelas Berdasarkan Tahun
                                        Ajaran</label>
                                    <select name="ta_kelas" id="ta_kelas" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($list_kelas_ta as $row) : ?>
                                        <?php if ($row['id_th_kelas'] == $matpel_ta['id_th_kelas']) : ?>
                                        <option value="<?= $row['id_th_kelas'] ?>" selected>
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_th_kelas'] ?>">
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('ta_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="matpel">Matapelajaran</label>
                                    <select name="matpel" id="matpel" class="form-control">
                                        <?php foreach ($list_matpel as $row) : ?>
                                        <?php if ($row['id_matpel'] == $matpel_ta['id_matpel']) : ?>
                                        <option value="<?= $row['id_matpel'] ?>" selected>
                                            <?= $row['matpel'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_matpel'] ?>"><?= $row['matpel'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('matpel', '<small class="text-danger pl-3">', '</small>'); ?>
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