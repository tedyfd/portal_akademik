<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Tahun Ajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button id="ta_add_btn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Tahun Ajaran</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="sort">No</th>
                            <th class="sort">ID</th>
                            <th class="sort">Tahun Ajaran</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_ta as $l) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td class="budget">
                                <?= $l['id_th'] ?>
                            </td>
                            <td class="budget">
                                <?= $l['th_ajaran'] ?>
                            </td>
                            <td><a class="btn btn-primary"
                                    href="<?= base_url('admin/ta_edit/') . $l['id_th'] ?>">Edit</a></td>
                            <td><a class="btn btn-danger delete-btn-conf"
                                    href="<?= base_url('admin/ta_del/') . $l['id_th'] ?>">Delete</a></td>
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