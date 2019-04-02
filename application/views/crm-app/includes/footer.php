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
                { "data" : "user_type" },
                { "data" : "status" },
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                        },
                        "targets": 5
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
            var $table = jQuery('#show_list_requests').DataTable({
              "ajax": {
                    "url": "<?php echo base_url('ajax/view_request');?>",
                     "type": "POST",
                     "data": function ( d ) {
                        d.min = jQuery("#min").val(),
                        d.max = jQuery("#max").val(),
                        d.contact_no = jQuery("#contact_no").val()
                      }
                },
              "processing": true,
              "serverSide": true,
              "paging": true,
              "order": [[ 0, "desc" ]],
              "columns" : [
                { "data" : "name" },
                { "data" : "email" },
                { "data" : "city" },
                { "data" : "contact" },
                {
                      "render": function (data, type, JsonResultRow, meta) {
                          //return '<img width="50" height="50" src="<?php echo base_url(); ?>uploads/portal_logo/'+JsonResultRow.logo+'">';
                          return '<button class="btn btn-sm btn-primary request_dialog" data-toggle="modal" data-target="#show-request-dialog">View</button>';
                      }
                  }
              ],
              "columnDefs": [ {
                "data" : "id",
                      "render": function ( data, type, row ) {
                                <?php //if($this->session->user_type == 1): ?>
                                return "<button class='btn btn-sm btn-primary edit_button'>Edit</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-sm btn-danger delete_button' data-toggle='modal' data-target='#confirm-delete'>Delete!</button>";
                                <?php //else: ?>
                                  //return "";
                                <?php //endif; ?>  
                        },
                        <?php //if($this->session->user_type == 1): ?>
                          "targets": 5
                        <?php //else: ?>
                          //"targets": 4
                        <?php //endif; ?>    
                  } ], 
            });
            jQuery('#min, #max').change( function(e) {
                $table.draw()
            } );
            // Delete record
            $('#show_list_requests tbody').on( 'click', 'button.delete_button', function () {
                var request_id = $(this).closest('tr').attr('id');
                $("#current_request_id").val(request_id);
            } );
            // Show Dialog Request
            $('#show_list_requests tbody').on( 'click', 'button.request_dialog', function () {
                var request_id = $(this).closest('tr').attr('id');
                $.ajax({
                      url: "<?php echo base_url('request/get_request_response');?>",
                      type: "POST",
                      data: {request_id: request_id} ,
                      success: function (response) {
                        // console.log(response); return false;
                          $("#show_request_response").html();
                          $("#show_request_response").html(response);
                          $("#show-request-dialog").modal('show');
                          //window.location = "view_request";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
                // alert(request_id); show_request_response
                //$("#current_request_id").val(request_id);
            } );
            // Edit record
            $('#show_list_requests tbody').on( 'click', 'button.edit_button', function () {
                var edit_id = $(this).closest('tr').attr('id');
                window.location = "<?php echo site_url("request/edit_request"); ?>/" + edit_id;
            } );
            // Delete Group
            $("#delete_request_record").on('click', function (){
                var delete_id = $("#current_request_id").val();
                  $.ajax({
                      url: "<?php echo base_url('request/delete_request');?>",
                      type: "POST",
                      data: {delete_id: delete_id} ,
                      success: function (response) {
                          window.location = "view_request";
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                         console.log(textStatus, errorThrown);
                      }
                  });
            });

            
            // Date picker
            $(".datepicker").datepicker({ 
                  autoclose: true, 
                  //todayHighlight: true
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
            
            });
        </script>
	<style type="text/css">
     .jq-toast-wrap .bottom-right{display: none !important;}   
     .request_dialog:hover{color: #fff;}
    </style>
    <?php
            include("assets/dist/js/toast-data.php");
        ?>
</body>

</html>