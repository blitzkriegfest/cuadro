<?php

class Order_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'orders'; # Replace these properties on children
    $this->upload_dir = 'orders/'; # Replace these properties on children
    $this->per_page = 15;
    $this->load->model('cms/Rates_model');
  }

  public function add($data)
  {
    $rates = $this->Rates_model->getRates();
    $base_rate = $rates['base_rates'];
    var_dump($base_rate); die();
    $this->db->insert('orders', [
      'name' => $data['name'],
      'email' => $data['email'],
      'number' => $data['number'],
      'address_1' => $data['address_1'],
      'address_2' => $data['address_2'],
      'city' => $data['city'],
      'state_province' => $data['state_province'],
      'postal_code' => $data['postal_code'],
      'order_type' => $data['order_type'],
      'order_cost' => $rates['base_rate'],
      'sender_name' => $data['sender_name'],
      'sender_email' => $data['sender_email'],
      'sender_number' => $data['sender_number']
    ]);
    $last_id = $this->db->insert_id();

    return $last_id;
  }

  public function update($id, $data)
  {
    $this->db->where('order_id', $id);
    return $this->db->update($this->table, $data);
  }

  public function delete($id)
  {
    $this->db->where('order_id', $id);
    return $this->db->delete($this->table);
  }

  public function get($id)
  {
    $this->db->where('order_id', $id);
    return $this->db->get($this->table)->row();
  }

  public function addImages($data, $order_last_id)
  {
    if(!$data){
      return false;
    }
    $res = [];
    foreach ($data['name'] as $value){
      $res[] = ['order_images' => $value, 'order_id' => $order_last_id];
    }
    return $this->db->insert_batch('orderimages', $res);
  }

  public function batch_upload($files = [])
  {

    if($files == [] || $files == null ) return [];
    $k = key($files);

    $uploaded_files = [];
    $upload_path = 'uploads/' . $this->upload_dir;

    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'gif|jpg|jpeg|png';

    if (!is_dir($upload_path) && !mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true)){
      mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true);
    }

    foreach ($files['name'] as $key => $image) {
      $_FILES[$k]['name'] = $files['name'][$key];
      $_FILES[$k]['type'] = $files['type'][$key];
      $_FILES[$k]['tmp_name'] = $files['tmp_name'][$key];
      $_FILES[$k]['error'] = $files['error'][$key];
      $_FILES[$k]['size'] = $files['size'][$key];

      $filename = time() . "_" . $files['name'][$key];
      $images[] = $uploaded_files[$k][] = $filename;

      $config['file_name'] = $filename;
      $this->upload->initialize($config);

      $this->upload->do_upload($k);
    }

    return $uploaded_files;
  }

  //  public function all()
  // {
  //   $res = $this->db->get($this->table)->result();
  //   return $this->formatResImage($res);
  // }

  // public function formatResImage($res)
  // {
  //   $data = [];
  //   foreach ($res as $key => $value){
  //     $value->order_images_f = base_url($this->upload_dir) . $value->order_images;
  //     $data[] = $value;
  //   }
  //   return $data;
  // }

}
