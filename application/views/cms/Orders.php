<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Orders
            <?php if ($flash_msg = $this->session->flash_msg): ?>
              <br><sub style="color: <?php echo $flash_msg['color'] ?>"><?php echo $flash_msg['message'] ?></sub>
            <?php endif; ?>
          </header>
          <div class="panel-body">
            <p>
              <button type="button" class="add-btn btn btn-success btn-sm">Add new Order</button>
            </p>
            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Order Images</th>
                    <th>Order Type</th>
                    <th>Order Cost</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (count($res) > 0 ): ?>

                    <?php $i = 1; foreach ($res as $key => $value): ?>
                      <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $value->name ?></td>
                        <td></td>
                        <td><?php echo $value->order_type ?></td>
                        <td><?php echo $value->order_cost ?></td>
                        <td>
                          <button type="button"
                          data-payload='<?php echo json_encode(['name' => $value->name, 'email' => $value->email, 'number' => $value->number, 'address_1' => $value->address_1, 'address_2' => $value->address_2, 'city' => $value->city, 'state_province' => $value->state_province, 'postal_code' => $value->postal_code, 'sender_name' => $value->sender_name, 'sender_email' => $value->sender_email, 'sender_number' => $value->sender_number, 'order_type' => $value->order_type, 'order_cost' => $value->order_cost])?>'
                          class="edit-row btn btn-info btn-xs">Edit</button>
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
      <!-- page end-->
    </section>
  </section>

  <!-- Modal -->
  <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Manage</h4>
        </div>
        <div class="modal-body">

          <form role="form" method="post" id="main-form" enctype="multipart/form-data">
            <div class="form-group">
              <label >Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label >Email</label>
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label >Contact Number</label>
              <input type="text" class="form-control" name="number" placeholder="Number">
            </div>
            <div class="form-group">
              <label >Address 1</label>
              <textarea class="form-control" name="address_1" placeholder="Address 1"></textarea>
            </div>
            <div class="form-group">
              <label >Address 2</label>
              <textarea type="text" class="form-control" name="address_2" placeholder="Address 2"></textarea>
            </div>
            <div class="form-group">
              <label >City</label>
              <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
              <label >State/Province</label>
              <input type="text" class="form-control" name="state_province" placeholder="State/Province">
            </div>
            <div class="form-group">
              <label >Postal Code</label>
              <input type="text" class="form-control" name="postal_code" placeholder="Postal Code">
            </div>
            <div class="form-group">
              <label >Sender Name</label>
              <input type="text" class="form-control" name="sender_name" placeholder="Sender Name">
            </div>
            <div class="form-group">
              <label >Sender Email</label>
              <input type="text" class="form-control" name="sender_email" placeholder="Sender Email">
            </div>
            <div class="form-group">
              <label >Sender Number</label>
              <input type="text" class="form-control" name="sender_number" placeholder="Sender Number">
            </div>
            <div class="form-group">
              <label >Order Type</label>
              <input type="text" class="form-control" name="order_type" placeholder="Order Type">
            </div>
            <div class="form-group">
              <label >Order Cost</label>
              <input type="text" class="form-control" name="order_cost" placeholder="Order Cost">
            </div>

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
