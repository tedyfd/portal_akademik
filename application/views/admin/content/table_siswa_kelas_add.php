<?php
$kelas_ta_q = "SELECT th_kelas.id_th_kelas, th_ajaran.th_ajaran, kelas.kelas FROM th_kelas
INNER JOIN th_ajaran ON th_kelas.id_th = th_ajaran.id_th
INNER JOIN kelas ON th_kelas.id_kelas = kelas.id_kelas";
$kelas_ta = $this->db->query($kelas_ta_q)->result_array();

$siswa = $this->db->get('siswa')->result_array();

?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><?= $title ?> </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/siswa_kelas_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Siswa Kelas</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="ta">Kelas Tahun Ajaran</label>
                                    <select name="kelas_ta" id="kelas_ta" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($kelas_ta as $row) : ?>
                                        <option value="<?= $row['id_th_kelas'] ?>">
                                            <?php echo ($row['th_ajaran'] . ' - ' . $row['kelas']) ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelas_ta', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($siswa as $row) : ?>
                            <div class="col col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="siswa" name="siswa[]"
                                        value="<?= $row['nis'] ?>">
                                    <label class="form-check-label"
                                        for="exampleCheck1"><?= $row['nis'] . ' - ' . $row['nama'] ?></label>
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