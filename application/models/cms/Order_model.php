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
    $this->load->model('cms/Images_model');
  }


  public function updateOrderCost($id, $imagecount, $per_frame, $base_rate)
  {
    if( $imagecount > 3 ) {
      $additional = ($imagecount - 3) * $per_frame;
      $this->db->where('order_id', $id);
      $cost = $this->db->update('orders', [
        'order_cost' => $base_rate + $additional
      ]);
    } else{
      $cost = $this->db->update('orders', [
        'order_cost' => $base_rate
      ]);
    }
    return $cost;
  }

  public function add($data)
  {
      $this->db->insert('orders', [
      'name' => $data['name'],
      'email' => $data['email'],
      'number' => $data['number'],
      'address_1' => $data['address_1'],
      'address_2' => $data['address_2'],
      'city' => $data['city'],
      'state_province' => $data['state_province'],
      'postal_code' => $data['postal_code'],
      'order_type' => $data['order'],
      'sender_name' => @$data['sender_name'],
      'sender_email' => @$data['sender_email'],
      'sender_number' => @$data['sender_number']
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

  public function addImages($data, $order_last_id, $cropped)
  {
    $date = new DateTime();
    $startdata = $date->format('YmdHis');
    $newName = str_replace('/', '', $startdata);

      $image = [];
      $image_name =  $newName;
        $i = 0;
        foreach ($cropped['cropped_images'] as $key => $value) {
        $image[] = $value;
        file_put_contents(
            "uploads/orders/".$image_name.$i.".jpg",
            base64_decode(
                str_replace('[removed]', '', $value)
            )
        );
        $i++;
      }
    $order = $this->Order_model->get($order_last_id);
    if(!$data){
      return false;
    }

    $images = [];
    $cropped_image = [];

     foreach ($data['name'] as $key => $image){
        $images[] = $image;
      }

      foreach ($cropped['cropped_images'] as $keys => $output){
        $cropped_image[] = $output;
      }

      $date = new DateTime();
      $startdata = $date->format('YmdHis');
      $newName = str_replace('/', '', $startdata);
      $image_name =  $newName;

      $i = 0;
      foreach ($images as $key => $value) {
        $datas[$i]['order_images'] = $value;
        $datas[$i]['cropped_images'] = $image_name.$i.".jpg";
        $datas[$i]['order_id'] = $order_last_id;
        $i++;
      }
      // foreach ($data['name'] as $value){
      //   $res[] = ['order_images' => $value, 
      //             'order_id' => $order_last_id];
      // }

    return $this->db->insert_batch('orderimages', $datas);
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

   public function all()
  {
    $res = $this->db->get($this->table)->result();
    return $this->formatResImage($res);
  }

  public function formatResImage($res)
  {
    $data = [];
    foreach ($res as $key => $value){
      $value->order_cost = "P ". number_format($value->order_cost,2);
      $data[] = $value;
    }
    return $data;
  }

}
