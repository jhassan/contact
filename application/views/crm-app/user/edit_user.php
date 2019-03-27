
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
    <?php //var_dump($edit_user);?>
    <div class="row">
    	<div class="col-xl-12">
    		<section class="hk-sec-wrapper">
	            <div class="row">
	            	<form action="" class="form needs-validation" id="edit_user" enctype="multipart/form-data" method="post" novalidate>
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
                                <select name="user_type_id" class="form-control custom-select d-block w-100" id="user_type_id" required="required">
                                    <option value="">User Type</option>
                                    <option value="1" <?php echo ($edit_user[0]->user_type_id == 1) ? 'selected="selected"' : "" ?>>Admin</option>
                                    <option value="2" <?php echo ($edit_user[0]->user_type_id == 2) ? 'selected="selected"' : "" ?>>Client</option>
                                    <option value="3" <?php echo ($edit_user[0]->user_type_id == 3) ? 'selected="selected"' : "" ?>>Agent</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select user type.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Group</label>
                                <?php
                                    $groups = get_groups();
                                    $options_group = array('all' => 'Select group');
                                    foreach($groups as $group):
                                        $options_group[$group->id]  = $group->group_name;
                                    endforeach;
                                    echo form_dropdown("group_id", $options_group,  $edit_user[0]->group_id, "class='custom-select d-block w-100 select2 required' id='group_id'");
                                ?>
                                <div class="invalid-feedback">
                                    Please select group.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" value="<?php echo $edit_user[0]->phone; ?>" name="phone" type="text" required="required" maxlength="12">
                                <div class="invalid-feedback">
                                    Please enter phone.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="alt_phone">Alt-Phone</label>
                                <input class="form-control" id="alt_phone" value="<?php echo $edit_user[0]->alt_phone; ?>" name="alt_phone" type="text">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">CNIC</label>
                                <input class="form-control" id="cnic" value="<?php echo $edit_user[0]->cnic; ?>" placeholder="00000-0000000-0" data-mask="00000-0000000-0" maxlength="16" name="cnic" type="text">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">Image</label>
                                <input class="form-control" id="user_image" value="" name="user_image" type="file">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Status</label>
                                <select name="status" class="form-control custom-select d-block w-100" id="status" required="required">
                                    <option value="">Status</option>
                                    <option value="0" <?php echo ($edit_user[0]->status == 0) ? 'selected="selected"' : "" ?>>Enable</option>
                                    <option value="1" <?php echo ($edit_user[0]->status == 1) ? 'selected="selected"' : "" ?>>Disable</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select status.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Schedule</label>
                                <?php
                                    $schedules = get_schedules();
                                    $options_schedule = array("" => "Select schedule");
                                    foreach($schedules as $schedule):
                                        $options_schedule[$schedule->id]  = $schedule->time_in . " - " . $schedule->time_out;
                                    endforeach;
                                    echo form_dropdown("schedule_id", $options_schedule,  $edit_user[0]->schedule_id, "class='form-control custom-select d-block w-100 select2' required='required' id='schedule_id'");
                                ?>
                                <div class="invalid-feedback">
                                    Please select schedule.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="basic_salary">Basic Salary</label>
                                <input class="form-control" id="basic_salary" value="<?php echo $edit_user[0]->basic_salary; ?>" name="basic_salary" placeholder="000000" data-mask="000000" maxlength="6" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="kpi">KPI</label>
                                <input class="form-control" id="kpi" value="<?php echo $edit_user[0]->kpi; ?>" name="kpi" placeholder="000000" data-mask="000000" maxlength="6" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="rate_per_hour">Rate per Hour</label>
                                <input class="form-control" id="rate_per_hour" value="<?php echo $edit_user[0]->rate_per_hour; ?>" name="rate_per_hour" placeholder="0000" data-mask="0000" maxlength="4" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="total_hours">Total Hours</label>
                                <input class="form-control" id="total_hours" value="<?php echo $edit_user[0]->total_hours; ?>" name="total_hours" placeholder="000" data-mask="000" maxlength="3" type="text" required='required'>
                            </div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-md-12 form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" rows="3" placeholder="Textarea" required="required"><?php echo $edit_user[0]->address; ?></textarea>
                                <div class="invalid-feedback">
                                    Please enter address.
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