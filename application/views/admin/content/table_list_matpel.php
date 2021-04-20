<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Matapelajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm matpel_add_btn"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Matpel</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="sort">No</th>
                            <th class="sort">ID</th>
                            <th class="sort">Nama Matpel</th>
                            <th colspan="2" class="sort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_matpel as $row) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td class="budget">
                                <?= $row['id_matpel'] ?>
                            </td>
                            <td class="budget">
                                <?= $row['matpel'] ?>
                            </td>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?= base_url('admin/matpel_edit/') . $row['id_matpel'] ?>">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger delete-btn-conf"
                                    href="<?= base_url('admin/matpel_del/') . $row['id_matpel'] ?>">Delete</a>
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

<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle">Edit <?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/matpel_edit') ?>" method="post">

                    <input type="hidden" class="form-control" id="id_edit" name="id" placeholder="ID">

                    <div class="form-row">
                        <div class="col">
                            <label for="matpel">MataPelajaran</label>
                            <input type="text" class="form-control" id="matpel_edit" name="matpel"
                                placeholder="Matapelajaran">
                        </div>
                    </div>
                    <button id="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm submit-btn"><i
                            class="fas fa-upload fa-sm "></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>