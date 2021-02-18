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
                        <a href="<?= base_url('admin/matpel_ta_add') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Matpel TA</a>
                    </div>
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/matpel_ta_batch') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Matpel TA (Batch)</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Tahun Ajaran</th>
                            <th scope="col" class="sort" data-sort="status">Kelas</th>
                            <th scope="col" class="sort" data-sort="status">Mata Pelajaran</th>
                            <th scope="col" class="sort" data-sort="completion">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_matpel_ta as $l) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $l['th_ajaran'] ?></td>
                            <td><?= $l['kelas'] ?></td>
                            <td><?= $l['matpel'] ?></td>
                            <td><a href="<?= base_url('admin/kelas_ta_del/') . $l['id_th_matpel'] ?>"
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