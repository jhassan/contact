
<div class="container">
	<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo site_url('user/create_user'); ?>">Create User</a></li>
    </ol>
</nav>
    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>View Users</h4>
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap" style="overflow: auto">
                                <table id="show_list_users" class="table table-hover w-100 display pb-30">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <th>Schedule</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>User Type</th>
                                            <th>Status</th>
                                            <th>Schedule</th>
                                            <th>Action</th>
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
 #show_list_users th, #show_list_users td { white-space: nowrap;
    width: 1%;}

</style>
<input type="hidden" id="current_user_id" value="0">
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
            <button type="button"  id="delete_record" class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>
</div>

