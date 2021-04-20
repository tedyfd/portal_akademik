<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Kelas Berdasarkan Tahun Ajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/kelas_ta_add') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Kelas TA</a>
                    </div>
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/kelas_ta_batch') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Kelas TA (Batch)</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="sort">No</th>
                            <th class="sort">Tahun Ajaran</th>
                            <th class="sort">Kelas</th>
                            <th colspan="2" class="sort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_kelas_ta as $l) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $l['th_ajaran'] ?></td>
                            <td><?= $l['kelas'] ?></td>
                            <td><a href="<?= base_url('admin/kelas_ta_edit/') . $l['id_th_kelas'] ?>"
                                    class="btn btn-primary">Edit</a></td>
                            <td><a href="<?= base_url('admin/kelas_ta_del/') . $l['id_th_kelas'] ?>"
                                    class="btn btn-danger delete-btn-conf">Delete</a></td>
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