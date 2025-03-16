<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                        </div>
                        
                        <?php if(session()->getFlashdata('fail')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('fail') ?>
                            </div>
                        <?php endif; ?>

                        <?= form_open(route_to('admin.update-password'), 'class="user"') ?>
                            <input type="hidden" name="token" value="<?= $token ?>">
                            
                            <div class="form-group">
                                <input type="password" 
                                       class="form-control form-control-user <?= session('errors.new_password') ? 'is-invalid' : '' ?>" 
                                       name="new_password" 
                                       placeholder="New Password">
                                <?php if(session('errors.new_password')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.new_password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" 
                                       class="form-control form-control-user <?= session('errors.confirm_password') ? 'is-invalid' : '' ?>" 
                                       name="confirm_password" 
                                       placeholder="Confirm Password">
                                <?php if(session('errors.confirm_password')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.confirm_password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Reset Password
                            </button>
                        <?= form_close() ?>
                        
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= route_to('admin.login.form') ?>">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>