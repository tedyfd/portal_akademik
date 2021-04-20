<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Kelas</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button id="kelas_add_btn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Kelas</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">ID</th>
                            <th scope="col" class="sort" data-sort="status">Nama Kelas</th>
                            <th scope="col" class="sort" data-sort="status">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_kelas as $row) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td class="budget">
                                <?= $row['id_kelas'] ?>
                            </td>
                            <td class="budget">
                                <?= $row['kelas'] ?>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?= base_url('admin/kelas_edit/') . $row['id_kelas'] ?>">Ubah</a>
                                <a href="<?= base_url('admin/kelas_del/') . $row['id_kelas'] ?>"
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