
<div class="container">
	<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item">Requests</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo site_url('request/create_request'); ?>">Create Request</a></li>
    </ol>
</nav>
    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>View Request</h4>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Start Date</label>
                            <input type="text" name="" id="min" class="form-control control-sm datepicker" value="">
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>End Date</label>
                            <input type="text" name="" id="max" class="form-control control-sm datepicker" value="">
                          </div>
                        </div>
                      </div><!--END ROW-->
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap" style="overflow: auto">
                                <table id="show_list_requests" class="table table-hover w-100 display pb-30">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Contact</th>
                                            <th>Admin Notes</th>
                                            <?php if($this->session->user_type == 1): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>City</th>
                                            <th>Contact</th>
                                            <th>Admin Notes</th>
                                            <?php if($this->session->user_type == 1): ?>
                                                <th>Action</th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->
</div>
<style type="text/css">
 #show_list_requests th, #show_list_requests td { white-space: nowrap;
    width: 1%;}

</style>
<input type="hidden" id="current_request_id" value="0">
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button"  id="delete_request_record" class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="show-request-dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Request</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p id="show_request_response"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

