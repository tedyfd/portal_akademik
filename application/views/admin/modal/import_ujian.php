<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">


                <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form action="<?= base_url('admin/import_') ?><?= $modal ?>" method="post" id="import_csv_<?= $modal ?>"
                    enctype="multipart/form-data">
                    <label>Select CSV File</label>
                    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                    <button name="import_csv_<?= $modal ?>" id="import_<?= $modal ?>_btn"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm modalbtn"><i
                            class="fas fa-upload fa-sm "></i> Import CSV</button>
                </form>

                <p>Contoh file excel untuk mid (xlsx)<a href="<?= base_url('excel') ?>/templates_mid.xlsx">klik</a>
                </p>
                <p>Contoh file excel untuk mid (csv)<a href="<?= base_url('excel') ?>/templates_mid.csv">klik</a>
                </p>
                <p>Contoh file excel untuk SEMESTER 1 (xlsx)<a
                        href="<?= base_url('excel') ?>/templates_semester1.xlsx">klik</a></p>
                <p>Contoh file excel untuk SEMESTER 1 (csv)<a
                        href="<?= base_url('excel') ?>/templates_semester1.csv">klik</a></p>
                <p>Contoh file excel untuk list siswa (xlsx)<a
                        href="<?= base_url('excel') ?>/templates_siswa.xlsx">klik</a></p>
                <p>Contoh file excel untuk list siswa (csv)<a
                        href="<?= base_url('excel') ?>/templates_siswa.csv">klik</a></p>
            </div>
        </div>
    </div>
</div>