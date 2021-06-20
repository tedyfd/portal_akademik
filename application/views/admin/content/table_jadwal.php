<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Jadwal Matapelajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/jadwal_matpel_add') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Jadwal</a>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Tahun Ajaran</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Hari</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_jadwal as $l) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $l['th_ajaran'] ?></td>
                            <td><?= $l['kelas'] ?></td>
                            <td><?= $l['matpel'] ?></td>
                            <td><?= $l['hari'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/jadwal_matpel_edit/') . $l['id_jadwal'] ?>"
                                    class="btn btn-primary ">Edit</a>
                                <a href="<?= base_url('admin/jadwal_del/') . $l['id_jadwal'] ?>"
                                    class="btn btn-danger delete-btn-conf">Delete</a>
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