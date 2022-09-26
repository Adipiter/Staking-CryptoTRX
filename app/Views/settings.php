<?= $this->extend('includes/main') ?>

<?= $this->section('userarea') ?>
<div class="page-wrapper" style="min-height: 250px">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">User settings</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="Settings/update" method="post" class="form-horizontal form-material">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Username</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="text"
                                    class="form-control p-0 border-0"
                                    name="name"
                                    value=""
                                    readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Address Wallet</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="text"
                                    class="form-control p-0 border-0"
                                    placeholder="Input your TRX address"/>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label >
                            <div class="col-md-12 border-bottom p-0">
                                <input
                                    type="email"
                                    placeholder="Input your email"
                                    class="form-control p-0 border-0"/>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Current Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" value="password" class="form-control p-0 border-0"/>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Edit Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" class="form-control p-0 border-0"/>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Confirm Edit Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" class="form-control p-0 border-0"/>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>