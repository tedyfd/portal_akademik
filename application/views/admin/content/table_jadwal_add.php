<?php
$matpel_ta_q = "SELECT th_matpel.id_th_matpel, th_ajaran.th_ajaran, kelas.kelas, matpel.matpel FROM th_matpel
INNER JOIN th_kelas on th_matpel.id_th_kelas = th_kelas.id_th_kelas
INNER JOIN matpel on th_matpel.id_matpel = matpel.id_matpel
INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
$matpel_ta = $this->db->query($matpel_ta_q)->result_array();

$hari = $this->db->get('hari')->result_array();

// $th = $this->db->get('th_ajaran')->result_array();
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Jadwal Matapelajaran </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/jadwal_matpel_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Matapelajaran berdasarkan kelas dan tahun ajaran</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Tahun Ajaran</label>
                                    <select name="matpel_ta" id="matpel_ta" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($matpel_ta as $l) : ?>
                                        <option value="<?= $l['id_th_matpel'] ?>">
                                            <?php echo ($l['th_ajaran'] . ' - ' . $l['kelas'] . ' - ' . $l['matpel']) ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('ta', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($hari as $l) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="hari" name="hari[]"
                                        value="<?= $l['id_hari'] ?>">
                                    <label class="form-check-label" for="exampleCheck1"><?= $l['hari'] ?></label>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="row mt-2">
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