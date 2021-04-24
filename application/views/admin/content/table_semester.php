<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0"><?= $page ?></h3>
            </div>
            <!-- modal button -->
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button id="semester_add_btn"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Add</button>

                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nis</th>
                            <th>Id Semester</th>
                            <th>Id Matapelajaran Tahun Ajaran</th>
                            <th>Nilai Pengetahuan</th>
                            <th>Nilai Keterampilan</th>
                            <th>Nilai Sikap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($semester as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['nis'] ?></td>
                            <td><?= $row['id_semester'] ?></td>
                            <td><?= $row['id_th_matpel'] ?></td>
                            <td><?= $row['nilai_p'] ?></td>
                            <td><?= $row['nilai_k'] ?></td>
                            <td><?= $row['nilai_s'] ?></td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item"
                                            href="<?= base_url('admin/raport_s_edit/') . $row['id'] ?>">Edit</a>
                                        <a class="dropdown-item delete-btn-conf"
                                            href="<?= base_url('admin/raport_semester_del/') . $row['id'] ?>">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle">Edit <?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/raport_semester_edit') ?>" method="post">

                    <input type="number" class="form-control" id="id_edit" name="id" placeholder="ID">
                    <div class="form-group">
                        <label for="nis">nis:</label>
                        <select class="form-control" id="nis_edit" name="nis" required>
                            <option value="" selected disabled>NIS (Nomor Induk Sekolah)</option>
                            <?php foreach ($nis as $row) : ?>
                            <option value="<?= $row['nis'] ?>"><?= $row['nis'] ?> - <?= $row['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <select class="form-control" id="semester_edit" name="semester" required>
                            <option value="" selected disabled>Semester</option>
                            <?php foreach ($list_semester as $row) : ?>
                            <option value="<?= $row['id_semester'] ?>"><?= $row['semester'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matpel">matpel:</label>
                        <select class="form-control" id="matpel_edit" name="matpel" required>
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
                            <input type="number" class="form-control" id="nilai_p_edit" name="nilai_p"
                                placeholder="Nilai Pengetahuan">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="nilai_k_edit" name="nilai_k"
                                placeholder="Nilai Keterampilan">
                        </div>
                        <div class="col">
                            <select class="form-control" id="nilai_s_edit" name="nilai_s" required>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <button id="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm submit-btn"><i
                            class="fas fa-upload fa-sm "></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div> -->