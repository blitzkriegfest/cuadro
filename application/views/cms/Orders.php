<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Orders Management
            <?php if ($flash_msg = $this->session->flash_msg): ?>
              <br><sub style="color: <?php echo $flash_msg['color'] ?>"><?php echo $flash_msg['message'] ?></sub>
            <?php endif; ?>
          </header>

          

          <div class="panel-body">
            <a href="<?php echo base_url('cms/orders/export_report? '). $this->input->server('QUERY_STRING'); ?>" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Download All Data (CSV)</a><br><br>
            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="1">

              <form action="" method="GET">
              <div class="row">
                  <div class="col-md-2">
                      <input type="date" name="from" placeholder="from" class="form-control"
                      value="<?php echo @$_GET['from'] ?>">
                  </div>
                  <div class="col-md-2">
                      <input type="date" name="to" placeholder="to" class="form-control"
                      value="<?php echo @$_GET['to'] ?>">
                  </div>
                  <div class="col-lg-3">
                    <div class="input-group m-bot15">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-white"><i class="fa fa-search"></i></button>
                        </span>
                        <input type="text" name="name" class="form-control" value="<?php echo @$_GET['name'] ?>" placeholder="Enter Name to Search... ">
                    </div>
                  </div> 
                  <div class="col-lg-3">
                  <select class="form-control m-bot15" name="order_status" id="orderstatuschange" value="<?php echo @$_GET['order_status'] ?>">
                    <option value="">Select Status</option>
                    <option value="Pending Payment">Pending Payment</option>
                    <option value="Processing Order">Processing Order</option>
                    <option value="Ready for Delivery">Ready for Delivery</option>
                    <option value="Delivered">Delivered</option>
                  </select> 
                  </div>
                    <div class="col-md-2">
                      <input type="submit" value="Filter Orders" class="btn btn-info btn-sm">
                  </div>
              </div>
            </form><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Order Type</th>
                    <th>Order Cost</th>
                    <th>Order Status</th>
                    <th>Date Ordered</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (count($res) > 0 ): ?>

                    <?php $i = 1; foreach ($res as $value): ?>
                      <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->order_type ?></td>
                        <td><?php echo $value->order_cost ?></td>
                        <td><?php echo $value->order_status ?></td>
                        <td><?php echo $value->created_at ?></td>
                        <td>
                          <?php $arr = [];

                          foreach ($images as $image) {
                            if ($value->order_id == $image->order_id) {
                            $arr[] = array(
                                'Images' => $image->cropped_images_f
                            );
                          }}?>
                          <button type="button"
                          data-payload='<?php echo json_encode(['order_id' => $value->order_id, 'name' => $value->name, 'email' => $value->email, 'number' => $value->number, 'address_1' => $value->address_1, 'address_2' => $value->address_2, 'city' => $value->city, 'state_province' => $value->state_province, 'postal_code' => $value->postal_code, 'sender_name' => $value->sender_name ? $value->sender_name : "N/A", 'sender_email' => $value->sender_email ? $value->sender_email : "N/A", 'sender_number' => $value->sender_number ? $value->sender_number : "N/A", 'order_type' => $value->order_type, 'order_cost' => $value->order_cost, 'order_status' => $value->order_status, 'proof_of_payment' => $value->proof_of_payment_f, 'mode_of_payment' => $value->mode_of_payment])?>'
                          data-images='<?php echo json_encode($arr)?>' class="edit-row btn btn-info btn-xs">View Order Details</button>
                          
                          <button type="button" data-id='<?php echo $value->order_id; ?>'
                            class="btn btn-delete btn-danger btn-xs">Delete</button>
                          </td>
                        </tr>
                      <?php endforeach; ?>


                    <?php else: ?>
                      <tr>
                        <td colspan="4" style="text-align:center">Empty table data</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>

       <ul class="pagination">
                <ul class='pagination'>
                  <?php $page = ($this->input->get('page')) ?: 1; ?>
                  <li><a href="<?php echo base_url('cms/orders') . "?page=1&order_id=" . @$_GET['order_id'] . "&from=" . @$_GET['from'] . "&to=" . @$_GET['to'];?>">&laquo;</a></li>

                  <!-- loop for desc -->
                  <?php for ($i = $page - 2; $i < ($page) ; $i++):
                    if ($i == -1 || $i == 0) {
                      continue;
                    }
                   ?>
                  <li><a href="<?php echo base_url('cms/orders') . "?page=" . $i . "&order_id=" . @$_GET['order_id']. "&from=" . @$_GET['from'] . "&to=" . @$_GET['to'];?>"><?= $i ?></a></li>
                  <?php endfor; ?>
                  <!-- / loop for desc -->

                  <li><a href="<?php echo base_url('cms/orders') . "?page=" . $page . "&order_id=" . @$_GET['order_id'] . "&from=" . @$_GET['from'] . "&to=" . @$_GET['to'];?>"><?= $page ?></a></li>

                  <!-- loop for asc -->
                  <?php for ($i = $page + 1; $i < ($page + 3) ; $i++):
                  if ($i == $total_pages + 1 || $i == $total_pages + 2 || $total_pages == 0) {
                      continue;
                  }
                  ?>
                  <li><a href="<?php echo base_url('cms/orders') . "?page=" . $i . "&order_id=" . @$_GET['order_id']  . "&from=" . @$_GET['from'] . "&to=" . @$_GET['to'];?>"><?= $i ?></a></li>
                  <?php endfor; ?>
                  <!-- / loop for asc -->


                <li><a href="<?php echo base_url('cms/orders') . "?page=" . $total_pages . "&order_id=" . @$_GET['order_id']  . "&from=" . @$_GET['from'] . "&to=" . @$_GET['to'];?>">&raquo;</a></li>
                </ul>
              </ul>
      
    </section>
  </section>



  <!-- Modal -->
  <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Order Details</h4>
        </div>
        <div class="modal-body">

          <form role="form" method="post" id="main-form" enctype="multipart/form-data">
            
            <div class="form-group">
              <label >Order Details</label>
              <pre id="rname">Name</pre>
              <pre id="remail">Email</pre>
              <pre id="rnumber">Contact Number</pre>
              <pre id="raddress1">Address 1</pre>
              <pre id="raddress2">Address 2</pre>
              <pre id="rcity">City</pre>
              <pre id="rstateprovince">State/Province</pre>
              <pre id="rpostalcode"> Postal Code</pre>
            </div>
            <div class="form-group">
              <label >Sender</label>
              <pre id="sname">N/A</pre>
              <pre id="semail">N/A</pre>
              <pre id="snumber">N/A</pre>
            </div>
            <div class="form-group">
              <label >Order Type</label>
              <pre id="ordertype">Order Type</pre>
              <pre id="ordercost">Order Cost</pre>
              <pre id="orderstatus">Order Status</pre>
              <pre id="modeofpayment">Mode of Payment</pre>
            </div>

            <select class="form-control m-bot15" name="order_status" id="orderstatuschange">
              <option value="">Select Status</option>
              <option value="Pending Payment">Pending Payment</option>
              <option value="Processing Order">Processing Order</option>
              <option value="Ready for Delivery">Ready for Delivery</option>
              <option value="Delivered">Delivered</option>
            </select>
            <label >Proof of Payment</label><br>
              <a href="#" id="link" target="_blank"><img src="" alt="" id="preview" style="width: 100px; height: auto; border-radius: 10%;"/></a><br>
            <label>Order Images</label><br>
            <label id="ordimages"></label>

          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <input class="btn btn-info" type="submit" value="Save changes">
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- modal -->
  <script src="<?php echo base_url('public/admin/js/custom/') ?>order_management.js"></script>
  <script src="<?php echo base_url('public/admin/js/custom/') ?>generic.js"></script>
