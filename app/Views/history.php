<?= $this->extend('includes/main') ?>

<?= $this->section('userarea') ?>
<div class="page-wrapper" style="min-height: 250px">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">My activity</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">My activity</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Amount</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-09-2022</td>
                                    <td>Deposit</td>
                                    <td>30 TRX</td>
                                    <td>
                                        <span class="badge bg-success rounded">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>14-09-2022</td>
                                    <td>Deposit</td>
                                    <td>14 TRX</td>
                                    <td>
                                        <span class="badge bg-warning rounded">Processing</span >
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>16-09-2022</td>
                                    <td>Withdraw</td>
                                    <td>37 TRX</td>
                                    <td>
                                        <span class="badge bg-success rounded">Approved</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>18-09-2022</td>
                                    <td>Withdraw</td>
                                    <td>11 TRX</td>
                                    <td>
                                        <span class="badge bg-success rounded">Processing</span >
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