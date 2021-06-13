<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Siswa</h3>
            </div>
            <!-- modal button -->
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <a href="<?= base_url('admin/siswa_kelas_add') ?>"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Tahun Ajaran</th>
                            <th>Kelas</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($siswa_kelas as $row) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td>
                                <?= $row['nis'] ?>
                            </td>
                            <td>
                                <?= $row['nama'] ?>
                            </td>
                            <td>
                                <?= $row['th_ajaran'] ?>
                            </td>
                            <td>
                                <?= $row['kelas'] ?>
                            </td>
                            <td><a class="btn btn-primary"
                                    href="<?= base_url('admin/siswa_kelas_edit/') . $row['id_th_kelas_siswa'] ?>">Edit</a>
                            </td>
                            <td><a class="btn btn-danger delete-btn-conf"
                                    href="<?= base_url('admin/siswa_kelas_del/') . $row['id_th_kelas_siswa'] ?>">Delete</a>
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