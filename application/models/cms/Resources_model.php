<?php

class Resources_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'resources'; # Replace these properties on children
    $this->upload_dir = 'uploads/resources/'; # Replace these properties on children
    $this->per_page = 15;
  }

  public function update($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update($this->table, $data);
  }

  public function all()
  {
    $res = $this->db->get($this->table)->result();
    return $this->formatResImage($res);
  }

   public function upload($file_key)
  {
    @$file = $_FILES[$file_key];
    $upload_path = $this->upload_dir;

    $config['upload_path'] = $upload_path; # NOTE: Change your directory as needed
    $config['allowed_types'] = 'jpg|jpeg|png'; # NOTE: Change file types as needed
    $config['file_name'] = time() . '_' . $file['name']; # Set the new filename
    $this->upload->initialize($config);

    if (!is_dir($upload_path) && !mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true)){
      mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true); # You can set DEFAULT_FOLDER_PERMISSIONS constant in application/config/constants.php
    }
    if($this->upload->do_upload($file_key)){
      return [$file_key => $this->upload->data('file_name')];
    }else{
      return [];
    }
  }

  public function formatResImage($res)
  {
    $data = [];
    foreach ($res as $key => $value){
      $value->homepage_image_f = base_url($this->upload_dir) . $value->homepage_image;
      $data[] = $value;
    }
    return $data;
  }
}
