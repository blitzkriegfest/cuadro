<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Projects
            <?php if ($flash_msg = $this->session->flash_msg): ?>
              <br><sub style="color: <?php echo $flash_msg['color'] ?>"><?php echo $flash_msg['message'] ?></sub>
            <?php endif; ?>
          </header>
          <div class="panel-body">
              <form method="POST" id="rates">
                <label>PHP</label>
                  <?php if (count($res) > 0 ): ?>
                    <?php $i = 1; foreach ($res as $key => $value): ?>
                      <label>Base Rate</label>
                      <!-- <input id="bf2" class="form-control" type="hidden" step="0.01" name="base_rate" value=""><br>
                      <input id="af2"class="form-control" type="hidden" step="0.01" name="additional_rate_per_frame" value=""><br> -->
                      <input id="bf" class="form-control" type="text" step="0.01" name="base_rate" value="<?php echo $value->base_rate;?>"><br>
                      <label>Additional Rate per Frame</label>
                      <input id="af" class="form-control" type="text" step="0.01" name="additional_rate_per_frame" value="<?php echo $value->additional_rate_per_frame;?>"><br>
                    <?php endforeach; ?>
                  <?php endif; ?>
                      <input class="btn btn-info btn-md" id="upd" type="submit" value="Update Rate" data-payload='<?php echo json_encode(['id' => $value->id,'base_rate' => $value->base_rate, 'additional_rate_per_frame' => $value->additional_rate_per_frame])?>'>
              </form>
          </div>
        </section>
      </div>
    </div>
      <!-- page end-->
  </section>
</section>

  <script src="<?php echo base_url('public/admin/js/custom/') ?>rates_management.js"></script>
  <script src="<?php echo base_url('public/admin/js/custom/') ?>generic.js"></script>
