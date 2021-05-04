<div class="row justify-content-md-center">
    <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
            <img src="<?= base_url() ?>assets/img/brand/2.jpg?>" alt=" Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                            <img src="<?= base_url() ?>assets/img/theme/team-4.jpg?>" class="rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">

                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center">

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="h3">
                        <?= $profile['nama'] ?><span class="font-weight-light"></span>
                    </h5>
                    <div class="h5 font-weight-300">
                        <!-- <i class="ni location_pin mr-2"></i> -->
                    </div>
                    <div class="h5 mt-4">
                        NIS: <?= $profile['nis'] ?>
                    </div>
                    <div class="h5 mt-4">
                        NISN: <?= $profile['nisn'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>