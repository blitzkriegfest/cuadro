<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetStarted extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Frame_model');
    $this->load->model('cms/Order_model');
    $this->load->model('cms/Email_model');
    $this->load->model('cms/Rates_model');

  }

  public function index()
  {
  	$frames = $this->Frame_model->all();
    $data['frames'] = $frames;
    $this->wrapper_frontend('frontend/getstarted', $data);
  }

  public function addOrder()
  {
    $images = $this->Order_model->batch_upload($_FILES['order_images']);
    $order_last_id = $this->Order_model->add($this->input->post(null, true));

    if ($images)
    {
      $image_upload_success = $this->Order_model->addImages($images, $order_last_id);
    }

    if(  $order_last_id || @$image_upload_success ){
      $this->Email_model->sendOrderDetails($order_last_id);
      $this->session->set_flashdata('flash_msg', ['message' => 'New Order added successfully', 'color' => 'green']);
    } else {
      $this->session->set_flashdata('flash_msg', ['message' => 'Error Placing Order', 'color' => 'red']);
    }
      redirect('');
  }
}