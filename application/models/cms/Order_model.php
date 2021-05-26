<?php

class Order_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'orders'; # Replace these properties on children
    $this->upload_dir = 'orders/'; # Replace these properties on children
    $this->per_page = 10;
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
    // $this->db->insert($this->table, $data);
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
      'sender_number' => @$data['sender_number'],
      'proof_of_payment' => @$data['proof_of_payment'],
      'mode_of_payment' => @$data['mode_of_payment']
    ]);
    $last_id = $this->db->insert_id();

    return $last_id;
  }

  public function update($id, $data)
  {
    $this->db->where('order_id', $id);
    return $this->db->update($this->table, $data);
  }

  public function updateStatus($id, $data)
  {
    $this->db->set('order_status');
    $this->db->where('order_id', $id);
    return $this->db->update($this->table, [
    'order_status' => $data]);
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

  public function addImages($order_last_id, $cropped)
  {
  	// this is for saving the base64 image to database
    $order = $this->Order_model->get($order_last_id);
    // if(!$data){
    //   return false;
    // }

    //$images = [];
    $cropped_image = [];

    $date = new DateTime();
    $startdata = $date->format('YmdHis');
    $newName = str_replace('/', '', $startdata);
    $image_name =  $newName;
    $i = $this->db->insert_id();
      foreach ($cropped['cropped_images'] as $keys => $output){
        // $cropped_image[] = $output;
         $res[] = ['cropped_images' => $image_name.$i.".jpg", 
                  'order_id' => $order_last_id];
                  $i++;
      }

      // foreach ($data['name'] as $key => $image){
      //   $images[] = $image;
      // }

    // this is for uploading the base64 image to files
    $date = new DateTime();
    $startdata = $date->format('YmdHis');
    $newName = str_replace('/', '', $startdata);

      $image = [];
      $image_name =  $newName;
        $i = $this->db->insert_id();
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

    return $this->db->insert_batch('orderimages', $res);
  }

  // public function batch_upload($files = [])
  // {

  //   if($files == [] || $files == null ) return [];
  //   $k = key($files);

  //   $uploaded_files = [];
  //   $upload_path = 'uploads/' . $this->upload_dir;

  //   $config['upload_path'] = $upload_path;
  //   $config['allowed_types'] = 'gif|jpg|jpeg|png';

  //   if (!is_dir($upload_path) && !mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true)){
  //     mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true);
  //   }

  //   foreach ($files['name'] as $key => $image) {
  //     $_FILES[$k]['name'] = $files['name'][$key];
  //     $_FILES[$k]['type'] = $files['type'][$key];
  //     $_FILES[$k]['tmp_name'] = $files['tmp_name'][$key];
  //     $_FILES[$k]['error'] = $files['error'][$key];
  //     $_FILES[$k]['size'] = $files['size'][$key];

  //     $filename = time() . "_" . $files['name'][$key];
  //     $images[] = $uploaded_files[$k][] = $filename;

  //     $config['file_name'] = $filename;
  //     $this->upload->initialize($config);

  //     $this->upload->do_upload($k);
  //   }

  //   return $uploaded_files;
  // }

   public function all()
  {
    // $this->squery(['order_id']); 
    $this->paginate();
    $this->db->order_by('created_at', 'DESC');
    $this->filters('orders');
    $res = $this->db->get($this->table)->result();
    return $this->formatRes($res);
  }

  public function paginate()
  {
    if ($this->input->get('page')){
      $per_page = ($this->input->get('per_page')) ? $this->input->get('per_page') : 10; # Make 10 default $per_page if $per_page is not set
      $offset = ($_GET['page'] - 1) * $per_page;
      $this->db->limit($per_page, $offset);
    }
  }

  public function allRecordswithImages()
  {
    $this->db->order_by('orders.created_at', 'DESC');
    $this->db->join('orderimages','orderimages.order_id=orders.order_id');
    $res = $this->db->get('orders')->result();
    return $this->formatRes($res);
  }

  public function formatRes($res)
  {
    $data = [];
    foreach ($res as $key => $value){
      $value->order_cost = "P ". number_format($value->order_cost,2);
      $value->proof_of_payment_f = base_url('uploads/pop/') . $value->proof_of_payment;
      $value->created_at = date('F j, Y g:i a', strtotime($value->created_at));
      $data[] = $value;
    }
    return $data;
  }

  public function upload($file_key)
  {
    @$file = $_FILES[$file_key];
    $upload_path = "uploads/pop/";

    $config['upload_path'] = $upload_path; # NOTE: Change your directory as needed
    $config['allowed_types'] = 'gif|jpg|jpeg|png'; # NOTE: Change file types as needed
    $config['file_name'] = time() . '_' . $file['name']; # Set the new filename
    $this->upload->initialize($config);

    # Folder creation
    # TODO: Will refactor this and integrate it to the core upload class
    if (!is_dir($upload_path) && !mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true)){
      mkdir($upload_path, DEFAULT_FOLDER_PERMISSIONS, true); # You can set DEFAULT_FOLDER_PERMISSIONS constant in application/config/constants.php
    }

    if($this->upload->do_upload($file_key)){
      return [$file_key => $this->upload->data('file_name')];
    }else{
      // echo $this->upload->display_errors(); die();
      return [];
    }

  }

  public function filters($table)
  {
    if (@$_GET['from']) {
      $this->db->where(''.$table.'.created_at >= "' . $_GET['from']. '"');
    }
    if (@$_GET['to']) {
      $this->db->where(''.$table.'.created_at <= "' . $_GET['to']. '"');
    }
    if (@$_GET['name']) {
      $this->db->where('name LIKE "%' . $_GET['name']. '%" ');
    }
    if (@$_GET['order_status']) {
      $this->db->where('order_status = "' . $_GET['order_status']. '"');
    }

  }

}
