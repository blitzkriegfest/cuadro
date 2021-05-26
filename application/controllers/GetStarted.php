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
    $this->load->model('cms/Faq_model');

  }

  public function index()
  {
    $faq = $this->Faq_model->all();
  	$frames = $this->Frame_model->all();
    $rates = $this->Rates_model->all();
    $data['faq'] = $faq;
    $data['frames'] = $frames;
    $data['rates'] = $rates;
    $data['page_title'] = 'Get Started';
    $this->wrapper_nofooter('frontend/getstarted', $data);
  }

  public function addOrder()
  {
    // $images = $this->Order_model->batch_upload($_FILES['order_images']);
    $cropped = $this->input->post(null, true);
    // $order_last_id = $this->Order_model->add($this->input->post(null, true));
    $order_last_id = $this->Order_model->add(array_merge($this->input->post(), $this->Order_model->upload('proof_of_payment')));

    //if ($images)
    //{
      //$image_upload_success = $this->Order_model->addImages($images, $order_last_id, $cropped);
      $image_upload_success = $this->Order_model->addImages($order_last_id, $cropped);
    //}

    if(  @$order_last_id || @$image_upload_success ){
      $order = $this->Order_model->get($order_last_id);
      $attach = $this->Images_model->getImages($order->order_id);
      $countimages = $this->Images_model->getImageUploadNumber($order->order_id);
      $rates = $this->Rates_model->getRates();

      $i = 1; foreach ($rates as $key => $value):
      $compute = $this->Order_model->updateOrderCost($order->order_id, $countimages, $value->additional_rate_per_frame, $value->base_rate);
      endforeach;

      $this->Email_model->sendOrderDetails($order_last_id);
      $this->Email_model->sendOrderDetailsCustomer($order_last_id);
      redirect('getStarted/thankyou');
    } else {
      redirect('oops');
    }
  }

  public function thankyou()
  {
      $this->load->view('frontend/thankyou');
  }


}
