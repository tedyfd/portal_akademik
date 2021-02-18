<?php
$kelas_ta_q = "SELECT th_kelas.id_th_kelas, th_ajaran.th_ajaran, kelas.kelas FROM th_kelas
INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
$kelas_ta = $this->db->query($kelas_ta_q)->result_array();
$matpel_ta_q = "select conf_matpel_th.id, conf_matpel_th.nama ,GROUP_CONCAT(matpel.matpel ORDER BY FIND_IN_SET(matpel.id_matpel, conf_matpel_th.matpel)) as matpel
from matpel
inner join conf_matpel_th on find_in_set(matpel.id_matpel, conf_matpel_th.matpel) > 0
group by conf_matpel_th.nama";
$matpel_ta = $this->db->query($matpel_ta_q)->result_array();
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
                <form method="POST" action="<?= base_url('admin/matpel_ta_batch') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Kelas Berdasarkan Tahun Ajaran</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelas">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($kelas_ta as $l) : ?>
                                        <option value="<?= $l['id_th_kelas'] ?>">
                                            (<?= $l['th_ajaran'] ?>)<?= $l['kelas'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="matpel">Mata Pelajaran</label>
                                    <select name="matpel" id="matpel" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($matpel_ta as $l) : ?>
                                        <option value="<?= $l['id'] ?>">(<?= $l['nama'] ?>)<?= $l['matpel'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('matpel', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
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