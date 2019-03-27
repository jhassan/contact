
<div class="container">
	<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?php echo site_url('user/view_user'); ?>">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create User</li>
    </ol>
</nav>
	<div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-right"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg></span></span>Create User</h4>
    </div>
    <div class="row">
    	<div class="col-xl-12">
    		<section class="hk-sec-wrapper">
	            <div class="row">
	            	<form action="create_user" class="form needs-validation" id="create_profile" enctype="multipart/form-data" method="post" novalidate>
	            		<input type="hidden" name="action" value="create_user">
	            		<input type="hidden" name="edit_id" value="">
	                <div class="col-sm">
	                    <div class="row">
	                    	<div class="col-md-4 form-group">
                                <label for="fname">First Name</label>
                                <input class="form-control" id="fname" value="<?php echo set_value("fname"); ?>" name="fname" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter first name.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="lname">Last Name</label>
                                <input class="form-control" id="lname" value="<?php echo set_value("lname"); ?>" name="lname" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter last name.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="username">User Name</label>
                                <input class="form-control" id="username" value="<?php echo set_value("username"); ?>" name="username" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter username.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" value="<?php echo set_value("password"); ?>" name="password" type="password" required="required">
                                <div class="invalid-feedback">
                                    Please enter password.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" value="<?php echo set_value("email"); ?>" name="email" type="email" required="required">
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
                                    '2' => 'Manager',
                                    '3' => 'Agent',
                                    );
                                    echo form_dropdown('user_type_id', $type_options, set_value('user_type_id'), 'class="form-control custom-select d-block w-100" required="required" id="user_type_id"');
                                ?>
                                <div class="invalid-feedback">
                                    Please select user type.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Group</label>
                                <?php
                                    $groups = get_groups();
                                    $options_group = array("" => "Select group");
                                    foreach($groups as $group):
                                        $options_group[$group->id]  = $group->group_name;
                                    endforeach;
                                    echo form_dropdown("group_id", $options_group,  set_value("group_id"), "class='form-control custom-select d-block w-100' required='required' id='group_id'");
                                ?>
                                <div class="invalid-feedback">
                                    Please select group.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" value="<?php echo set_value("phone"); ?>" name="phone" placeholder="0000-0000-0000" data-mask="9999-9999-9999" required="required" type="text">
                                <div class="invalid-feedback">
                                    Please enter phone.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="alt_phone">Alt-Phone</label>
                                <input class="form-control" id="alt_phone" value="<?php echo set_value("alt_phone"); ?>" placeholder="0000-0000-0000" data-mask="9999-9999-9999" name="alt_phone" type="text">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">CNIC</label>
                                <input class="form-control" id="cnic" value="<?php echo set_value("cnic"); ?>" name="cnic" placeholder="00000-0000000-0" data-mask="00000-0000000-0" maxlength="16" type="text">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">Image</label>
                                <input class="form-control" id="user_image" value="" name="user_image" type="file">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Status</label>
                                <?php
                                    $status_options = array(
                                    '' => 'Status',
                                    '0' => 'Enable',
                                    '1' => 'Disable',
                                    );
                                    echo form_dropdown('status', $status_options, set_value('status'), 'class="form-control custom-select d-block w-100" required="required" id="status"');
                                ?>
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
                                    echo form_dropdown("schedule_id", $options_schedule,  set_value("schedule_id"), "class='form-control custom-select d-block w-100 select2' required='required' id='schedule_id'");
                                ?>
                                <div class="invalid-feedback">
                                    Please select schedule.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="basic_salary">Basic Salary</label>
                                <input class="form-control" id="basic_salary" value="<?php echo set_value("basic_salary"); ?>" name="basic_salary" placeholder="000000" data-mask="000000" maxlength="6" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="kpi">KPI</label>
                                <input class="form-control" id="kpi" value="<?php echo set_value("kpi"); ?>" name="kpi" placeholder="000000" data-mask="000000" maxlength="6" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="rate_per_hour">Rate per Hour</label>
                                <input class="form-control" id="rate_per_hour" value="<?php echo set_value("rate_per_hour"); ?>" name="rate_per_hour" placeholder="0000" data-mask="0000" maxlength="4" type="text" required='required'>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="total_hours">Total Hours</label>
                                <input class="form-control" id="total_hours" value="<?php echo set_value("total_hours"); ?>" name="total_hours" placeholder="000" data-mask="000" maxlength="3" type="text" required='required'>
                            </div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-md-12 form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" rows="3" placeholder="Textarea" required="required"><?php echo set_value("address"); ?></textarea>
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