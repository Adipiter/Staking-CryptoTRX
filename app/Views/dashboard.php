<?= $this->extend('includes/main') ?>

<?= $this->section('userarea') ?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="white-box">
                <div class="user-bg">
                    <div class="overlay-box">
                        <div class="container text-center user-content">
                            <h1 class="text-white mt-2 pb-5">Earn: 3 TRX</h1>
                            <div class="user-btm-box text-center">
                                <button class="btn btn-danger text-white">Claim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
                <div class="white-box text-center">
                    <h3 class="box-title">Reward</h3>
                    <div class="list-inline">
                        <span class="counter text-success">659 TRX</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="white-box text-center">
                    <h3 class="box-title">Total Stake</h3>
                    <div class="list-inline">
                        <span class="counter text-success">659 TRX</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="white-box text-center">
                    <h3 class="box-title">My Referall</h3>
                    <div class="list-inline">
                        <span class="counter text-success">32</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">My stake</h3>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">No.</th>
                                <th class="border-top-0">Amount</th>
                                <th class="border-top-0">Date registration</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>10 TRX</td>
                                <td>23-4-222</td>
                                <td>
                                    <span class="text-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>23 TRX</td>
                                <td>02-7-2022</td>
                                <td>
                                    <span class="text-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>17 TRX</td>
                                <td>17-2-2022</td>
                                <td>
                                    <span class="text-danger">Unactive</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>93 TRX</td>
                                <td>12-2-2022</td>
                                <td>
                                    <span class="text-danger">Unactive</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>