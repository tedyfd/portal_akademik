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
                    <input type="hidden" name="id" id="id" value="<?= $mid['id'] ?>">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nis">NIS</label>
                                    <select name="nis" id="nis" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($nis as $row) : ?>
                                        <?php if ($row['nis'] == $mid['nis']) : ?>
                                        <option value="<?= $row['nis'] ?>" selected>
                                            <?= $row['nis'] . " - " . $row['nama'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['nis'] ?>">
                                            <?= $row['nis'] . " - " . $row['nama'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="semester">Semester</label>
                                    <select name="semester" id="semester" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($semester as $row) : ?>
                                        <?php if ($row['id_semester'] == $mid['id_semester']) : ?>
                                        <option value="<?= $row['id_semester'] ?>" selected>
                                            <?= $row['semester'] ?></option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_semester'] ?>">
                                            <?= $row['semester'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="matpel">Matpel</label>
                                    <select name="matpel" id="matpel" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($matpel as $row) : ?>
                                        <?php if ($row['id_th_matpel'] == $mid['id_th_matpel']) : ?>
                                        <option value="<?= $row['id_th_matpel'] ?>" selected>
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] . " - " . $row['matpel'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $row['id_th_matpel'] ?>">
                                            <?= $row['th_ajaran'] . " - " . $row['kelas'] . " - " . $row['matpel'] ?>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                    </select>
                                    <?= form_error('matpel', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nilai_p">Nilai Pengetahuan</label>
                                    <input type="text" class="form-control" id="nilai_p" name="nilai_p"
                                        value="<?= $mid['nilai_p'] ?>" placeholder="Nilai Pengetahuan">
                                    <?= form_error('nilai_p', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nilai_k">Nilai Keterammpilan</label>
                                    <input type="text" class="form-control" id="nilai_k" name="nilai_k"
                                        value="<?= $mid['nilai_k'] ?>" placeholder="Nilai Keterampilan">
                                    <?= form_error('nilai_k', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nilai_mid">Nilai MID</label>
                                    <input type="text" class="form-control" id="nilai_mid" name="nilai_mid"
                                        value="<?= $mid['nilai_mid'] ?>" placeholder="Nilai Mid">
                                    <?= form_error('nilai_mid', '<small class="text-danger pl-3">', '</small>'); ?>
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