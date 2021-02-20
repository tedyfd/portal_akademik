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
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm modalbtn"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Import CSV</button>

                    </div>
                    <div class="col col-md-3">
                        <button id="siswa_add_btn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i>Tambah Siswa</button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">NISN</th>
                            <th scope="col" class="sort" data-sort="status">NIS (Username)</th>
                            <th scope="col">Passowrd</th>
                            <th scope="col" class="sort" data-sort="completion">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($mid as $m) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td class="budget">
                                <?= $m['nisn'] ?>
                            </td>
                            <td>
                                <?= $m['nis'] ?>
                            </td>
                            <td>
                                <?= $m['password'] ?>
                            </td>
                            <td>
                                <?= $m['nama'] ?>
                            </td>
                            <td><a class="btn btn-danger delete-btn-conf"
                                    href="<?= base_url('admin/delete_siswa/') . $m['id'] ?>">Delete</a>
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