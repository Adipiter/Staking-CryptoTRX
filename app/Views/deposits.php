<?= $this->extend('includes/main') ?>

<?= $this->section('userarea') ?>
<div class="page-wrapper" style="min-height: 250px">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Deposit</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card white-box p-0">
                    <div class="card-body">
                        <h3 class="box-title mb-0">Charge balance</h3>
                    </div>
                    <div class="comment-widgets">
                        <div class="alert alert-warning" role="alert">
                            Please recharge your amount balance for deposit!,<br/>
                            After recharge you can use all feature like staking and get reward.
                        </div>
                        <div class="d-flex p-3 mt-0">
                            <div class="comment-text ps-2 ps-md-3 w-100">
                                <div class="form-group mb-2">
                                    <label class="col-md-12 p-0">Input amount</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="number" placeholder="Input amount" class="form-control p-0"/>
                                    </div>
                                </div>
                                <div class="comment-footer d-md-flex align-items-center text-center">
                                    <div class="user-btm-box">
                                        <button class="btn btn-danger text-white">
                                            Charge
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card white-box p-0">
                    <div class="card-body">
                        <h3 class="box-title mb-0">Active balance</h3>
                        <div class="form-group">
                            <div class="d-flex flex-row">
                                <div class="comment-text text-center pt-5">
                                    <h3 class="box-title">Balance: 2000 TRX</h3>
                                    <span class="mb-2 d-block">Active balance can be used for stakes and can be rewarded.</span >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Deposit history</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Deposit amount</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2022</td>
                                    <td>30 TRX</td>
                                    <td>
                                        <span class="badge bg-success rounded">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>14-09-2022</td>
                                    <td>14 TRX</td>
                                    <td>
                                        <span class="badge bg-warning rounded">Processing</span >
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>16-09-2022</td>
                                    <td>37 TRX</td>
                                    <td>
                                        <span class="badge bg-danger rounded">Failed</span>
                                    </td>
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