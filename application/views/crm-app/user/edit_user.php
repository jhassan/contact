
<div class="container">
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?php echo site_url('user/view_user'); ?>">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
    </ol>
</nav>
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-right"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg></span></span>Edit User</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <form action="" class="form needs-validation" id="create_profile" enctype="multipart/form-data" method="post" novalidate>
                        <input type="hidden" name="action" value="edit_user">
                        <input type="hidden" name="edit_id" value="<?php echo $edit_user[0]->id; ?>">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="fname">First Name</label>
                                <input class="form-control" id="fname" value="<?php echo $edit_user[0]->fname; ?>" name="fname" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter first name.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="lname">Last Name</label>
                                <input class="form-control" id="lname" value="<?php echo $edit_user[0]->lname; ?>" name="lname" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter last name.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="username">User Name</label>
                                <input class="form-control" id="username" value="<?php echo $edit_user[0]->username; ?>" name="username" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter username.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" value="" name="password" type="password">
                                <div class="invalid-feedback">
                                    Please enter password.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" value="<?php echo $edit_user[0]->email; ?>" name="email" type="email" required="required">
                                <div class="invalid-feedback">
                                    Please enter email.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">User type</label>
                                <?php
                                    $type_options = array(
                                    '' => 'User Type',
                                    '1' => 'Admin',
                                    '0' => 'User'
                                    );
                                    echo form_dropdown('user_type', $type_options, $edit_user[0]->user_type, 'class="form-control custom-select d-block w-100" required="required" id="user_type_id"');
                                ?>
                                <div class="invalid-feedback">
                                    Please select user type.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Status</label>
                                <?php
                                    $status_options = array(
                                    '' => 'Status',
                                    '0' => 'Enable',
                                    '1' => 'Disable',
                                    );
                                    echo form_dropdown('status', $status_options, $edit_user[0]->status, 'class="form-control custom-select d-block w-100" required="required" id="status"');
                                ?>
                                <div class="invalid-feedback">
                                    Please select status.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </section>
        </div>  
    </div>
</div>