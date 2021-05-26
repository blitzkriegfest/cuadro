<?php

class Images_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'orderimages'; # Replace these properties on children
    $this->upload_dir = 'uploads/orders/'; # Replace these properties on children
    $this->per_page = 15;
  }

  public function getImages($id)
  {
    $this->db->select('order_images, cropped_images');
    return $this->db->get_where('orderimages' , array('order_id' => $id))->result();
  }

  public function getImageUploadNumber($id)
  {
    $this->db->where('order_id', $id);
    $num_rows = $this->db->count_all_results('orderimages');
    return $num_rows;
  }

  public function all()
  {
    $res = $this->db->get($this->table)->result();
    return $this->formatResImage($res);
  }

  public function formatResImage($res)
  {
    $data = [];
    foreach ($res as $key => $value){
      $value->cropped_images_f = base_url($this->upload_dir) . $value->cropped_images;
      $data[] = $value;
    }
    return $data;
  }

}