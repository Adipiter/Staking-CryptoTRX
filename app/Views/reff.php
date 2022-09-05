<?= $this->extend('includes/main') ?>

<?= $this->section('userarea') ?>
<div class="page-wrapper" style="min-height: 250px">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">My referalls</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Referall list</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Join date</th>
                                    <th class="border-top-0">Reward</th>
                                    <th class="border-top-0">Downline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2022</td>
                                    <td>2 TRX</td>
                                    <td>Anthonie</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>15-10-2022</td>
                                    <td>65 TRX</td>
                                    <td>Yazhut</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>