
<div class="container">
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="<?php echo site_url('request/view_request'); ?>">Requests</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Request</li>
    </ol>
</nav>
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-right"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg></span></span>Edit Request</h4>
    </div>
    <?php //var_dump($edit_request[0]);?>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <form action="" class="form needs-validation" id="create_request" enctype="multipart/form-data" method="post" novalidate>
                        <input type="hidden" name="action" value="edit_request">
                        <input type="hidden" name="edit_id" value="<?php echo $edit_request[0]->id; ?>">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="fname">Name</label>
                                <input class="form-control" id="name" value="<?php echo $edit_request[0]->name; ?>" name="name" type="text" required="required">
                                <div class="invalid-feedback">
                                    Please enter name.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Gender</label>
                                <?php
                                    $gender_options = array(
                                    '' => 'Gender',
                                    '1' => 'Male',
                                    '2' => 'Female',
                                    );
                                    echo form_dropdown('gender', $gender_options, $edit_request[0]->gender, 'class="form-control custom-select d-block w-100" required="required" id="gender"');
                                ?>
                                <div class="invalid-feedback">
                                    Please select gender.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="age">Age</label>
                                <input class="form-control" id="age" value="<?php echo $edit_request[0]->age; ?>" name="age" type="text">
                                <div class="invalid-feedback">
                                    Please enter age.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" value="<?php echo $edit_request[0]->city; ?>" name="city" type="text">
                                <div class="invalid-feedback">
                                    Please enter city.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="country">Country</label>
                                <?php
                                    $countrys = get_countries();
                                    $options_country = array("" => "Select country");
                                    foreach($countrys as $country):
                                        $options_country[$country->id]  = $country->country_name;
                                    endforeach;
                                    echo form_dropdown("country_id", $options_country,  $edit_request[0]->country_id, "class='form-control custom-select d-block w-100 select2' required='required' id='country_id'");
                                ?>
                                <div class="invalid-feedback">
                                    Please select country.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">CNIC</label>
                                <input class="form-control" id="cnic" value="<?php echo $edit_request[0]->cnic; ?>" name="cnic" placeholder="00000-0000000-0" data-mask="00000-0000000-0" maxlength="16" type="text">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="passport">Passport #</label>
                                <input class="form-control" id="passport" value="<?php echo $edit_request[0]->passport; ?>" name="passport" placeholder="000000000000" data-mask="999999999999" type="text">
                                <div class="invalid-feedback">
                                    Please enter passport.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" value="<?php echo $edit_request[0]->email; ?>" name="email" type="email" required="required">
                                <div class="invalid-feedback">
                                    Please enter email.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="contact">Contact #</label>
                                <input class="form-control" id="contact" value="<?php echo $edit_request[0]->contact; ?>" name="contact" placeholder="0000-0000000" data-mask="9999-9999999" type="text">
                                <div class="invalid-feedback">
                                    Please enter contact.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="course">Course</label>
                                <input class="form-control" id="course" value="<?php echo $edit_request[0]->course; ?>" name="course" type="text">
                                <div class="invalid-feedback">
                                    Please enter course.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="duration">Duration</label>
                                <input class="form-control" id="duration" value="<?php echo $edit_request[0]->duration; ?>" name="duration" type="text">
                                <div class="invalid-feedback">
                                    Please enter duration.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">Passport Image</label>
                                <input class="form-control" id="passport_image" value="" name="passport_image" type="file">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="cnic">Fee Recipt Image</label>
                                <input class="form-control" id="fee_recipt_image" value="" name="fee_recipt_image" type="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" rows="3" placeholder="Textarea" required="required"><?php echo $edit_request[0]->address; ?></textarea>
                                <div class="invalid-feedback">
                                    Please enter address.
                                </div>
                            </div>
                            <?php if($this->session->user_type == 1): ?>
                            <div class="col-md-12 form-group">
                                <label for="address">Admin Notes</label>
                                <textarea class="form-control" name="admin_notes" rows="3" placeholder="Textarea" required="required"><?php echo $edit_request[0]->admin_notes; ?></textarea>
                                <div class="invalid-feedback">
                                    Please enter admin notes.
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
            </section>
        </div>  
    </div>
</div>