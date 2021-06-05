<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cms/Email_model');
    $this->load->model('cms/Faq_model');
    $this->load->model('cms/Contact_model');
    $this->load->model('cms/Resources_model');
    $this->load->model('cms/Seo_model');
  }

  public function index()
  {
    $faq = $this->Faq_model->all();
    $contact = $this->Contact_model->all();
    $resources = $this->Resources_model->all();
    $seo = $this->Seo_model->allTags('Contact');
    $data['seo'] = $seo;
    $data['resources'] = $resources;
    $data['contact'] = $contact;
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
