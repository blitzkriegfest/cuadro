<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Resources Management
            <?php if ($flash_msg = $this->session->flash_msg): ?>
              <br><sub style="color: <?php echo $flash_msg['color'] ?>"><?php echo $flash_msg['message'] ?></sub>
            <?php endif; ?>
          </header>
          <div class="panel-body">
              <form method="POST" id="res" enctype='multipart/form-data'>
                  <?php if (count($res) > 0 ): ?>
                    <?php $i = 1; foreach ($res as $key => $value): ?>
                      <label>Homepage Image</label><br>
                      <img src="<?php echo $value->homepage_image_f;?>"  style="height: 300px; width: auto;"><br><br>
                      <input class="form-control" type="file" step="0.01" name="homepage_image"><br>
                      <label>Youtube Iframe Title</label>
                      <input class="form-control" type="text" step="0.01" name="yiframe_title" value="<?php echo $value->yiframe_title;?>"><br>
                      <label>Youtube Iframe Description</label>
                      <input class="form-control" type="text" step="0.01" name="yiframe_desc" value="<?php echo $value->yiframe_desc;?>"><br>
                      <label>Youtube Iframe Embed</label>
                      <textarea class="form-control" type="text" name="yiframe_embed"><?php echo $value->yiframe_embed;?></textarea><br>
                      <label>Location Iframe Embed</label>
                      <textarea class="form-control" type="text" name="location_embed"><?php echo $value->location_embed;?></textarea><br>
                      <label>Terms and Conditions</label>
                      <div class="row">
                          <div class="col-lg-12">
                              <section class="panel">
                                  <div class="panel-body">
                                      <div class="form">
                                              <div class="form-group">

                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="terms" rows="6"><?php echo $value->terms;?></textarea>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </section>
                          </div>
                      </div>
                      
                    <?php endforeach; ?>
                  <?php endif; ?>
                      <input class="btn btn-info btn-md" id="upd" type="submit" value="Update Resources" data-payload='<?php echo json_encode(['id' => $value->id,'yiframe_title' => $value->yiframe_title, 'yiframe_desc' => $value->yiframe_desc, 'yiframe_embed' => $value->yiframe_embed, 'homepage_image' => $value->homepage_image, 'location_embed' => $value->location_embed])?>'>
              </form>
          </div>
        </section>
      </div>
    </div>
      <!-- page end-->
  </section>
</section>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#upd').click(function(){
        //Updating
         const payload = $('#upd').data('payload')
         console.log(payload);
         $('#res').attr('action', base_url + 'cms/resources/update/' + payload.id);
       });
 
});
  </script>

  <script src="<?php echo base_url('public/admin/js/custom/') ?>generic.js"></script>
  <script src="<?php echo base_url('public/admin/js/ckeditor/') ?>ckeditor.js"></script>

  