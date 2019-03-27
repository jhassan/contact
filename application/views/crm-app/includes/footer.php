<!-- Footer -->
            <div class="hk-footer-wrap container hide">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
    <input type="hidden" id="current_signout_user_id" value="0">
    <div class="modal fade" id="signOutModal" tabindex="-1" role="dialog" aria-labelledby="signOutModal" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alert Sign Out</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p id="get_user_name"></p><br>
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control custom-select d-block w-100" id="break_type">
                          <option value="0" selected="selected">Sign Out</option>
                          <option value="2">Early Break</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" id="btn_sign_out" class="btn btn-danger">Sign Out</button>
              </div>
          </div>
      </div>
  </div>
<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if( strpos( $actual_link, "localhost" ) !== false) 
    $sale_status = $this->uri->segment(3);
else
    $sale_status = $this->uri->segment(2); ?>
  <input type="hidden" id="sale_status" value="<?php echo (int)$sale_status; ?>">
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist'); ?>/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/vendors/popper.js/dist/umd'); ?>/popper.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js'); ?>/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?php echo base_url('assets/dist/js'); ?>/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo base_url('assets/dist/js'); ?>/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?php echo base_url('assets/dist/js'); ?>/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="<?php echo base_url('assets/vendors/jquery-toggles'); ?>/toggles.min.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/toggle-data.js"></script>
	
    <!-- Select2 JavaScript -->
    <script src="<?php echo base_url('assets/vendors/select2/dist/js'); ?>/select2.full.min.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/select2-data.js"></script>

	<!-- Toastr JS -->
    <script src="<?php echo base_url('assets/vendors/jquery-toast-plugin/dist'); ?>/jquery.toast.min.js"></script>
    
	<!-- Counter Animation JavaScript -->
	<script src="<?php echo base_url('assets/vendors/waypoints/lib'); ?>/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url('assets/vendors/jquery.counterup'); ?>/jquery.counterup.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/vendors/raphael'); ?>/raphael.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/morris.js'); ?>/morris.min.js"></script>
	
	<!-- Easy pie chart JS -->
    <script src="<?php echo base_url('assets/vendors/easy-pie-chart/dist'); ?>/jquery.easypiechart.min.js"></script>
	
	<!-- Flot Charts JavaScript -->
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/excanvas.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.time.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('assets/vendors/flot'); ?>/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url('assets/vendors/jquery.flot.tooltip/js'); ?>/jquery.flot.tooltip.min.js"></script>
	
	<!-- EChartJS JavaScript -->
    <script src="<?php echo base_url('assets/vendors/echarts/dist'); ?>/echarts-en.min.js"></script>

    <script src="<?php echo base_url('assets/dist/js/'); ?>/toast-data.js"></script>

    <!-- Data Table JavaScript -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js'); ?>/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/js'); ?>/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-dt/js'); ?>/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js'); ?>/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs4/js'); ?>/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js'); ?>/buttons.flash.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/jszip/dist/'); ?>jszip.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build'); ?>/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build'); ?>/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js'); ?>/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js'); ?>/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js'); ?>/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/dataTables-data.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/jquery.mask.min.js"></script>

    <script src="<?php echo base_url('assets/vendors/moment/min') ;?>/moment.min.js"></script>
     <script src="<?php echo base_url('assets/vendors/daterangepicker'); ?>/daterangepicker.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/daterangepicker-data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    <!-- EChartJS JavaScript -->
    <!-- <script src="<?php echo base_url('assets/vendors/echarts/dist'); ?>/echarts-en.min.js"></script>
    <script src="<?php echo base_url('assets/dist/js') ?>/barcharts-data.js"></script> -->

    <!-- Pickr JavaScript -->
    <!-- <script src="<?php echo base_url('assets/vendors/pickr-widget/dist') ;?>/pickr.min.js"></script>
    <script src="<?php echo base_url('assets/dist/js') ;?>/pickr-data.js"></script> -->

    <!-- Daterangepicker JavaScript -->
    <!-- <script src="<?php echo base_url('assets/vendors/moment/min') ;?>/moment.min.js"></script>
    <script src="<?php echo base_url('assets/vendors/daterangepicker') ;?>/daterangepicker.js"></script>
    <script src="<?php echo base_url('assets/dist/js') ;?>/daterangepicker-data.js"></script> -->
    
    <!-- Init JavaScript -->
    <script src="<?php echo base_url('assets/dist/js'); ?>/init.js"></script>
	  <script src="<?php echo base_url('assets/dist/js'); ?>/dashboard2-data.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/validation-data.js"></script>
    <script src="<?php echo base_url('assets/dist/js'); ?>/bootstrap-datetimepicker.min.js"></script>
    <!-- <script src="<?php echo base_url('assets/js'); ?>/general_js.php"></script> -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php //print_r($pie_charts_data); ?>
    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php if(count($pie_charts_data) > 0): 
        $gitem_count = 0;
        foreach($pie_charts_data as $graph_data):
        ?>
      ['<?php echo $graph_data->product_name . " (" . $graph_data->provider_name . ")" ; ?>', <?php echo $graph_data->total_count; ?>],
      // ['Eat', 2],
      // ['TV', 4],
      // ['Gym', 2],
      // ['Sleep', 8]
    <?php 
        $gitem_count += $graph_data->total_count;
      endforeach; ?>
    <?php endif; ?>
    ]);

      // Optional; add a title and set the width and height of the chart
      var options = { is3D: true, 'title':'Total Sale: <?php echo $gitem_count; ?>', 'width':'100%', 'height':400, pieSliceText: 'value',
        tooltip: {
            text: 'value'
        }}; // My Average Day 
        // graph type 1) pieHole: 0.4 2) is3D: true 

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
    </script>
    <script>
          jQuery(document).ready(function (e) {
            
            // Get all users list
            var $table = jQuery('#show_list_users').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_user');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 2, "desc" ]],
              "columns" : [
                { "data" : "fname" },
                { "data" : "lname" },
                { "data" : "username" },
                { "data" : "user_type_id" },
                { "data" : "status" },
                { "data" : "schedule" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 6
                  } ], 
            });
            // Delete record
            $('#show_list_users tbody').on( 'click', 'button.delete_button', function () {
                var user_id = $(this).closest('tr').attr('id');
                $("#current_user_id").val(user_id);
            } );
            // Edit record
            $('#show_list_users tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("user/edit_user"); ?>/" + edit_id;
            } );
            // Delete User
            $("#delete_record").on('click', function (){
                var delete_id = $("#current_user_id").val();
                  $.ajax({
                      url: "<?php echo base_url('user/delete_user');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_user";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });

            // Get all groups list
            var $table = jQuery('#show_list_groups').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_group');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "group_name" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 1
                  } ], 
            });
            // Delete record
            $('#show_list_groups tbody').on( 'click', 'button.delete_button', function () {
                var user_id = $(this).closest('tr').attr('id');
                $("#current_group_id").val(user_id);
            } );
            // Edit record
            $('#show_list_groups tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("group/edit_group"); ?>/" + edit_id;
            } );
            // Delete Group
            $("#delete_group_record").on('click', function (){
                var delete_id = $("#current_group_id").val();
                  $.ajax({
                      url: "<?php echo base_url('group/delete_group');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_group";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });

            // Get all portal list
            var $table = jQuery('#show_list_portals').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_portal');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "portal_name" },
                  {
                      "render": function (data, type, JsonResultRow, meta) {
                          return '<img width="50" height="50" src="<?php echo base_url(); ?>uploads/portal_logo/'+JsonResultRow.logo+'">';
                      }
                  }
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {

                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 2
                  } ], 
            });
            // Delete record
            $('#show_list_portals tbody').on( 'click', 'button.delete_button', function () {
                var portal_id = $(this).closest('tr').attr('id');
                $("#current_portal_id").val(portal_id);
            } );
            // Edit record
            $('#show_list_portals tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("portal/edit_portal"); ?>/" + edit_id;
            } );
            // Delete Portal
            $("#delete_portal_record").on('click', function (){
                var delete_id = $("#current_portal_id").val();
                  $.ajax({
                      url: "<?php echo base_url('portal/delete_portal');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_portal";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Get all products list
            var $table = jQuery('#show_list_products').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_product');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "provider_name" },
                { "data" : "product_name" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 2
                  } ], 
            });
            // Delete record
            $('#show_list_products tbody').on( 'click', 'button.delete_button', function () {
                var product_id = $(this).closest('tr').attr('id');
                $("#current_product_id").val(product_id);
            } );
            // Edit record
            $('#show_list_products tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("product/edit_product"); ?>/" + edit_id;
            } );
            // Delete Portal
            $("#delete_product_record").on('click', function (){
                var delete_id = $("#current_product_id").val();
                  $.ajax({
                      url: "<?php echo base_url('product/delete_product');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_product";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });

            // Get all sales list
            var $table = jQuery('#show_list_sales').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_sale');?>",
                     "type": "POST",
                      "data": function ( d ) {
                        d.sale_status = jQuery("#sale_status").val()
                      }
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "status_name" }, 
                { "data" : "order_date" },
                { "data" : "account_number" },
                { "data" : "full_name" },
                { "data" : "provider_name" },
                { "data" : "products_name" },
                { "data" : "group_name" },
                { "data" : "first_last_name" },
                { "data" : "portal_name" },
                { "data" : "install_date" },
                { "data" : "notes" },
                { "data" : "admin_notes" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button data-toggle='modal' data-target='#status_dialog' class='btn btn-secondary status_button'>Status</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 12
                  } ], 
            });
            // Delete record
            $('#show_list_sales tbody').on( 'click', 'button.delete_button', function () {
                var sale_id = $(this).closest('tr').attr('id');
                $("#current_sale_id").val(sale_id);
            } );
            // Update Status
            $('#show_list_sales tbody').on( 'click', 'button.status_button', function () {
                $("#admin_notes").val('');
                var sale_id = $(this).closest('tr').attr('id');
                $("#status_sale_id").val(sale_id);
                $.ajax({
                      url: "<?php echo base_url('sale/get_sales_data');?>",
                      type: "POST",
                      data: {sale_id: sale_id} ,
                      dataType: "json",
                      success: function (response) {
                        $("#status_id").val(response.status);
                        $("#admin_notes").val(response.admin_notes);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            } );
            // Edit record
            $('#show_list_sales tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("sale/edit_sale"); ?>/" + edit_id;
            } );
            // Delete Sale
            $("#delete_sale_record").on('click', function (){
                var delete_id = $("#current_sale_id").val();
                  $.ajax({
                      url: "<?php echo base_url('sale/delete_sale');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_sale";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Get all provider list
            var $table = jQuery('#show_list_providers').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_provider');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "provider_name" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 1
                  } ], 
            });
            // Delete record
            $('#show_list_providers tbody').on( 'click', 'button.delete_button', function () {
                var provider_id = $(this).closest('tr').attr('id');
                $("#current_provider_id").val(provider_id);
            } );
            // Edit record
            $('#show_list_providers tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("provider/edit_provider"); ?>/" + edit_id;
            } );
            // Delete Sale
            $("#delete_provider_record").on('click', function (){
                var delete_id = $("#current_provider_id").val();
                  $.ajax({
                      url: "<?php echo base_url('provider/delete_provider');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_provider";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Get all commission list
            var $table = jQuery('#show_list_commissions').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_commission');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "provider_name" },
                { "data" : "product_name" },
                { "data" : "product_amount" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;";
                                // <button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>
                        },
                        "targets": 3
                  } ], 
            });
            // Delete record
            $('#show_list_commissions tbody').on( 'click', 'button.delete_button', function () {
                var commission_id = $(this).closest('tr').attr('id');
                $("#current_commission_id").val(commission_id);
            } );
            // Edit record
            $('#show_list_commissions tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("commission/edit_commission"); ?>/" + edit_id;
            } );
            // Delete Commission
            $("#delete_commission_record").on('click', function (){
                var delete_id = $("#current_commission_id").val();
                  $.ajax({
                      url: "<?php echo base_url('commission/delete_commission');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_commission";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Get all schedule list
            var $table = jQuery('#show_list_schedules').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_schedule');?>",
                     "type": "POST",
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "time_in" },
                { "data" : "time_out" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 2
                  } ], 
            });
            // Delete record
            $('#show_list_schedules tbody').on( 'click', 'button.delete_button', function () {
                var schedule_id = $(this).closest('tr').attr('id');
                $("#current_schedule_id").val(schedule_id);
            } );
            // Edit record
            $('#show_list_schedules tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("schedule/edit_schedule"); ?>/" + edit_id;
            } );
            // Delete Schedule
            $("#delete_schedule_record").on('click', function (){
                var delete_id = $("#current_schedule_id").val();
                  $.ajax({
                      url: "<?php echo base_url('schedule/delete_schedule');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_schedule";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Date picker
            $(".datepicker").datepicker({ 
                  autoclose: true, 
                  todayHighlight: true
            }).datepicker('update', new Date());
            // Date picker for edit
            $(".datepicker_edit").datepicker({ 
                  autoclose: true, 
             //     todayHighlight: true
            });
            // Date time picker
            $(".form_datetime").datetimepicker({
                autoclose: true
              });
            // Get us city
            $("#state_id").change(function(){
                var state_id = $(this).val();
                $.ajax({
                      url: "<?php echo base_url('sale/get_cities');?>",
                      type: "POST",
                      data: {state_id: state_id} ,
                      success: function (response) {
                          $("#us_city").html(response);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // get sale product against provider
            $("#sale_provider_id").change(function(){
                var sale_provider_id = $(this).val();
                $.ajax({
                      url: "<?php echo base_url('sale/get_provider_products');?>",
                      type: "POST",
                      data: {sale_provider_id: sale_provider_id} ,
                      success: function (response) {
                          $("#all_selected_provider_products").html(response);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // Get all products agains provider
            $("#provider_id").change(function (){
              var provider_id = $(this).val();
              //alert(provider_id);
                $.ajax({
                      url: "<?php echo base_url('commission/get_provider_products');?>",
                      type: "POST",
                      data: {provider_id: provider_id} ,
                      success: function (response) {
                          //console.log(response); return false;
                          $("#all_provider_products").html(response);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
            // focus on text fields
            $(".focus_input").focus();

            // Set user sign in time
            $("#sign_in_user").click(function(){
              $.ajax({
                      url: "<?php echo base_url('attendance/user_time_in');?>",
                      type: "POST",
                      success: function (response) {
                          $("#sign_in_user").addClass('hide');
                          //$("#sign_out_user").removeClass('hide');
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });

            // check user time in or out status
            $.ajax({
                    url: "<?php echo base_url('attendance/user_time_status');?>",
                    type: "POST",
                    success: function (response) {
                      console.log(response);
                        if(response == 0){
                          //console.log('here is response');
                          $("#sign_in_user").removeClass('hide');
                          //$("#sign_out_user").removeClass('hide');  
                        }
                        // } else {
                        //   $("#sign_in_user").removeClass('hide');
                        //   $("#sign_out_user").addClass('hide');
                        // }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
            // Set dialog message
            $(".dialog_sign_out_user").click(function (){
              var user_id = $(this).attr('id');
              $("#current_signout_user_id").val(user_id);
              // var <p id="get_user_name">Are you sure you want to signout!</p>
              var sign_out_user_name = $("#user_name_"+user_id).html(); 
              console.log(sign_out_user_name);
              $("#get_user_name").html('');
              $("#get_user_name").html('Are you sure you want to signout this user '+sign_out_user_name+' !');
            })
            // Set user sign out time
            $("#btn_sign_out").click(function(){
              var user_id = $("#current_signout_user_id").val();
              var break_type = $("#break_type").val();
              $.ajax({
                      url: "<?php echo base_url('attendance/user_time_out');?>",
                      type: "POST",
                      data: {user_id: user_id, break_type: break_type} ,
                      success: function (response) {
                        //console.log(response); return false;
                          $("#signOutModal").modal('hide');
                          $("#signout_user_row_"+user_id).remove();
                         //window.location = "user_attendance";
                        //console.log(response); return false;
                          //$("#signOutModal").modal('hide');
                          //$("#sign_in_user").removeClass('hide');
                          //$("#sign_out_user").addClass('hide');
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });
          });
        </script>
	<style type="text/css">
     .jq-toast-wrap .bottom-right{display: none !important;}   
    </style>
    <?php
            include("assets/dist/js/toast-data.php");
        ?>
</body>

</html>