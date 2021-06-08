<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header border-0">
                <h3><?= $list_pengumuman['title'] ?></h3>
                <small><?= $list_pengumuman['created'] ?><small>
            </div>
            <div class="container mb-md-3">
                <p>
                    <?= $list_pengumuman['pengumuman'] ?>
                </p>
                <p>
                    <?php if ($list_pengumuman['pdf']) : ?>
                    <span class="badge badge-primary">
                        <a class="text-primary"
                            href="<?= base_url('assets/pdf/') . $list_pengumuman['pdf'] ?>"><?= $list_pengumuman['pdf'] ?></a>
                        <i class="far fa-file-pdf"></i>
                    </span>
                    <?php else : ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="card-footer py-4">
            </div>
        </div>
    </div>
</div>