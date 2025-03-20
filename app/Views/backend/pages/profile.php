<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="page-header">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="title">
				<h4>Profile</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?= route_to('admin.home'); ?>">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						Profile
					</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
		<div class="pd-20 card-box height-100-p">
			<div class="profile-photo">
				<img src="<?= get_user()->picture == null ? '/images/users/photo1.jpeg' : '/images/users/'.get_user()->picture ?>" 
                     alt="" 
                     class="avatar-photo ci-avatar-photo img-fluid" 
                     style="max-width: 135px;">
			</div>
			<h5 class="text-center h5 mb-0 ci-user-name"><?= get_user()->name?></h5>
			<p class="text-center text-muted font-14">
				<?= get_user()->email?>
			</p>
		</div>
	</div>
	<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
		<div class="card-box height-100-p overflow-hidden">
			<div class="profile-tab height-100-p">
				<div class="tab height-100-p">
					<ul class="nav nav-tabs customtab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#personal_details" role="tab">Personal details</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Timeline Tab start -->
						<div class="tab-pane fade show active" id="personal_details" role="tabpanel">
							<div class="pd-20">
								<form action="<?= route_to('update-personal-details'); ?>" method="POST" id="personal_details_form">
                                    <?= csrf_field()?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" value="<?= get_user()->name ?>">
                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" value="<?= get_user()->username ?>">
                                                <span class="text-danger error-text username_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Bio...."><?= get_user()->bio ?></textarea>
                                        <span class="text-danger error-text bio_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
							</div>
						</div>
						<!-- Timeline Tab End -->
						
						<!-- Tasks Tab start -->
						<div class="tab-pane fade" id="tasks" role="tabpanel">
							<div class="pd-20 profile-task-wrap">
							</div>
						</div>
						<!-- Tasks Tab End -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
$(document).ready(function(){
    console.log("Document ready");
    console.log("Form exists:", $('#personal_details_form').length > 0);
    
    $('#personal_details_form').on('submit', function(e){
        console.log("Form submitted");
        e.preventDefault();
        var form = this;
        var formdata = new FormData(form);
        
        
        for (var pair of formdata.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        
        // Clear previous error messages
        $(form).find('span.error-text').text('');
        
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: formdata,
            processData: false,
            dataType: 'json',
            contentType: false,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            beforeSend: function(){
                console.log("Sending request to:", $(form).attr('action'));
               
            },
            success: function(response){
                console.log('Response:', response);
                
                if(response.status == 1){
                    // Success - update UI elements with new user details
                    $('.ci-user-name').each(function(){
                        $(this).html(response.user_info.name);
                    });
                    
                    alert(response.msg);
                } else {
                    // Validation errors or other errors
                    if(response.error){
                        $.each(response.error, function(prefix, val){
                            console.log("Setting error for " + prefix + ": " + val);
                            $(form).find('span.'+prefix+'_error').text(val);
                        });
                    } else {
                        
                        alert(response.msg || 'An error occurred');
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', xhr.responseText);
              
                alert('An error occurred while processing your request');
            }
        });
    });
});
</script>
<?= $this->endSection() ?>