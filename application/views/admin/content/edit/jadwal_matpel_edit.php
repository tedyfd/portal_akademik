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
                    <input type="hidden" name="id" id="id" value="<?= $jadwal['id_jadwal'] ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta_matpel">Matpel Berdasarkan Tahun
                                        Ajaran</label>
                                    <select name="ta_matpel" id="ta_matpel" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($list_matpel_ta as $row) : ?>
                                        <?php if ($row['id_th_matpel'] == $jadwal['id_th_matpel']) : ?>
                                        <option value="<?= $row['id_th_matpel'] ?>" selected>
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] . " - " . $row['matpel'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_th_matpel'] ?>">
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] . " - " . $row['matpel'] ?>
                                        </option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('ta_matpel', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="hari">Hari</label>
                                    <select name="hari" id="hari" class="form-control">
                                        <?php foreach ($list_hari as $row) : ?>
                                        <?php if ($row['id_hari'] == $jadwal['id_hari']) : ?>
                                        <option value="<?= $row['id_hari'] ?>" selected>
                                            <?= $row['hari'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_hari'] ?>"><?= $row['hari'] ?></option>
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