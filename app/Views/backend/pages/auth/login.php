<?= $this->extend('backend/layout/auth-layout') ?>
<?= $this->section('content') ?>

<div class="login-box bg-white box-shadow border-radius-10">
    <!-- Add logo above login form -->
    <div class="text-center pt-4 pb-3">
        <img src="/images/img4.jpg" alt="EGOBLOG" style="max-width: 140px; height: auto;" />
    </div>
    
    <div class="login-title">
        <h2 class="text-center text-primary">Login To EGOBLOG</h2>
    </div>
    
    <?php $validation = \Config\Services::validation(); ?>
    <form action="<?= route_to('admin.login.handler') ?>" method="POST">
       <?= csrf_field() ?>
       
        <?php if(!empty(session()->getFlashdata('success'))) : ?>
           <div class="alert alert-success alert-dismissible fade show">
               <?= session()->getFlashdata('success') ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="close">          
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
        <?php endif; ?>
        
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
           <div class="alert alert-danger alert-dismissible fade show">
              <?= session()->getFlashdata('fail') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="close">          
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
        <?php endif; ?>
        
        <div class="input-group custom">
            <input type="text" class="form-control form-control-lg" placeholder="Username or Email" name="login_id" value="<?= set_value('login_id') ?>">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
            </div>
        </div>
        <?php if($validation->getError('login_id')) : ?>
            <div class="d-block text-danger" style="margin-top:-25px;margin-bottom:15px;">
                <?= $validation->getError('login_id')?>
            </div>
        <?php endif; ?>
        
        <div class="input-group custom">
            <input type="password" class="form-control form-control-lg" placeholder="**********" name="password" value="<?= set_value('password') ?>">
            <div class="input-group-append custom">
                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
            </div>
        </div>
        <?php if($validation->getError('password')) : ?>
            <div class="d-block text-danger" style="margin-top:-25px;margin-bottom:15px;">
                <?= $validation->getError('password')?>
            </div>
        <?php endif; ?>
        
        <div class="row pb-30">
            <div class="col-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember</label>
                </div>
            </div>
            <div class="col-6">
                <div class="forgot-password text-right">
                    <a href="<?= route_to('admin.forgot.form')?>">Forgot Password</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group mb-0">
                    <input class="btn btn-primary btn-lg btn-block login-btn" type="submit" value="Sign In">
                </div>
            </div>
        </div>
    </form>
</div>

<style>
/* Custom styles for a more modern login form */
.login-box {
    padding: 30px 35px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important;
    border-radius: 15px !important;
}

.login-title h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
}

.login-btn {
    border-radius: 50px;
    padding: 12px;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.2);
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #e9ecef;
}

.form-control {
    border-color: #e9ecef;
}

.form-control:focus {
    box-shadow: 0 0 5px rgba(0,123,255,0.2);
}

.forgot-password a {
    color: #007bff;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

.alert {
    border-radius: 8px;
}
</style>

<?= $this->endSection() ?>