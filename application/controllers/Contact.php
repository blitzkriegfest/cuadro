<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cms/Email_model');
    $this->load->model('cms/Faq_model');
  }

  public function index()
  {
    $faq = $this->Faq_model->all();
    $data['faq'] = $faq;
    $data['page_title'] = 'Contact Us';
    $this->wrapper_frontend('frontend/contact', $data);
  }

  public function send_inquiry()
  {
    $creds = $this->input->post(null, true);
    $this->Email_model->sendInquiry($creds);
    if ($creds) {
      $this->load->view('frontend/inquiry_thankyou');
    }
  }

}
