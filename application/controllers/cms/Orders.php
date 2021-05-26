<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Order_model');
  }

  public function index()
  {
    $res = $this->Order_model->all();
    $images = $this->Images_model->all();

    $data['total_pages'] = $this->Order_model->getTotalPages();
    $data['res'] = $res;
    $data['images'] = $images;
    $this->wrapper('cms/orders', @$data);
  }

  public function add()
  {
  
    if($this->Order_model->add($this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Order Added Successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error adding Order', 'color' => 'red']);
   }
   $this->admin_redirect('cms/orders');
  }

  public function update($id)
  {
    if($this->Order_model->update($id, $this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Order updated Successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Order.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/orders');
  }

  public function updateStatus($id)
  {
    if($this->Order_model->updateStatus($id, $this->input->post('order_status'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Order updated Successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Order.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/orders');
  }

  public function delete()
  {
    if($this->Order_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Order deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting Order.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/orders');
  }

  public function export_report()
  {
    // output headers so that the file is downloaded rather than displayed
    header('Content-type: text/csv');
    header('Content-Disposition: attachment; filename="' . date('Y-m-d') . "_orders" . '_.csv"');
    // do not cache the file
    header('Pragma: no-cache');
    header('Expires: 0');
    // create a file pointer connected to the output stream
    $file = fopen('php://output', 'w');
    // send the column headers
    fputcsv($file, array('Order ID', 'Full Name', 'Email', 'Number', 'Address 1', 'Address 2', 'City', 'State/Province', 'Postal Code', 'Sender Name', 'Sender Email', 'Sender Number', 'Order Type', 'Order Cost', 'Mode of Payment', 'Date' ));
   
    $this->Order_model->filters('orders'); 
    $this->db->order_by('created_at', 'DESC');
    $res = $this->db->get('orders')->result();

    $new_res = [];
    foreach ($res as $key => $value) {
      $new_res[] = array(
        $value->order_id,
        $value->name,
        $value->email,
        $value->number,
        $value->address_1,
        $value->address_2,
        $value->city,
        $value->state_province,
        $value->postal_code,
        $value->sender_name,
        $value->sender_email,
        $value->sender_number,
        $value->order_type,
        $value->order_cost,
        $value->mode_of_payment,
        $value->created_at
      );
    }
    $data = $new_res;

    foreach ($data as $row)
    {
      fputcsv($file, $row);
    }
    exit();
  }
  
}
