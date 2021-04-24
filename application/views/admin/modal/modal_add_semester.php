<div class="modal fade" id="semester_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/raport_semester_insert') ?>" method="post">
                    <div class="form-group">
                        <label for="nis">nis:</label>
                        <select class="form-control" id="nis" name="nis">
                            <option value="" selected disabled>NIS (Nomor Induk Sekolah)</option>
                            <?php foreach ($nis as $row) : ?>
                            <option value="<?= $row['nis'] ?>"><?= $row['nis'] ?> - <?= $row['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <select class="form-control" id="semester" name="semester">
                            <option value="" selected disabled>Semester</option>
                            <?php foreach ($list_semester as $row) : ?>
                            <option value="<?= $row['id_semester'] ?>"><?= $row['semester'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matpel">matpel:</label>
                        <select class="form-control" id="matpel" name="matpel">
                            <option value="" selected disabled>Matapelajaran</option>
                            <?php foreach ($matpel as $row) : ?>
                            <option value="<?= $row['id_th_matpel'] ?>"><?= $row['th_ajaran'] ?> - <?= $row['kelas'] ?>
                                - <?= $row['matpel'] ?>
                            </option>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="number" class="form-control" id="nilai_p" name="nilai_p"
                                placeholder="Nilai Pengetahuan">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="nilai_k" name="nilai_k"
                                placeholder="Nilai Keterampilan">
                        </div>
                        <div class="col">
                            <select class="form-control" id="nilai_sikap" name="nilai_sikap">
                                <option value="" selected disabled>Nilai Sikap</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <button id="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "><i
                            class="fas fa-upload fa-sm "></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>