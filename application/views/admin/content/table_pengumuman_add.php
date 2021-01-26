<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"> Pengumuman </h3>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/pengumuman_add') ?>" id="form">
                    <h6 class="heading-small text-muted mb-4">Pengumuman</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="title">Judul</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Username">
                                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="content">Isi Pengumuman</label>
                                    <textarea rows="4" id="content" name="content" class="form-control"
                                        placeholder="Isi pengumuman."></textarea>
                                    <?= form_error('content', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="col btn btn-lg btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                </form>
            </div>
        </div>
    </div>
</div>