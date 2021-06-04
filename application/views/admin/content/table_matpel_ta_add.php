<?php
$ta_kelas_q = "SELECT th_kelas.id_th_kelas, th_ajaran.th_ajaran, kelas.kelas FROM th_kelas
INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
$ta_kelas = $this->db->query($ta_kelas_q)->result_array();
$matpel = $this->db->get('matpel')->result_array();
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
                <form method="POST" action="<?= base_url('admin/matpel_ta_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Mata Pelajaran Berdasarkan Tahun Ajaran</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta_kelas">Kelas Berdasarkan Tahun
                                        Ajaran</label>
                                    <select name="ta_kelas" id="ta_kelas" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($ta_kelas as $l) : ?>
                                        <option value="<?= $l['id_th_kelas'] ?>">
                                            <?= $l['kelas'] ?> <div class="font-weight-bold">(<?= $l['th_ajaran'] ?>)
                                            </div>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('ta_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-md-12">
                                <label class="form-control-label" for="matpel">Matapelajaran</label>
                            </div>
                            <?php foreach ($matpel as $l) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="matpel<?= $l['id_matpel'] ?>"
                                        name="matpel[]" value="<?= $l['id_matpel'] ?>">
                                    <label class="form-check-label"
                                        for="matpel<?= $l['id_matpel'] ?>"><?= $l['matpel'] ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
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