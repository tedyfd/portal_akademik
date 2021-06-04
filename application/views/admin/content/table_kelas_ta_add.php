<?php
$kelas = $this->db->get('kelas')->result_array();
$th = $this->db->get('th_ajaran')->result_array();
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"> Kelas Tahun Ajaran </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/kelas_ta_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Kelas Berdasarkan Tahun Ajaran</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Tahun Ajaran</label>
                                    <select name="ta" id="ta" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($th as $l) : ?>
                                        <option value="<?= $l['id_th'] ?>"><?= $l['th_ajaran'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('ta', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php foreach ($kelas as $l) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kelas" name="kelas[]"
                                        value="<?= $l['id_kelas'] ?>">
                                    <label class="form-check-label" for="exampleCheck1"><?= $l['kelas'] ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?= form_error('kelas[]', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="col btn btn-lg btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                </form>
            </div>
        </div>
    </div>
</div>