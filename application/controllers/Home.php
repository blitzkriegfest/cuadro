<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Faq_model');
    $this->load->model('cms/Project_model');
  }

  public function index()
  {
    $faq = $this->Faq_model->all();
    $project = $this->Project_model->all();
    $data['faq'] = $faq;
    $data['project'] = $project;
    $this->wrapper_frontend('frontend/home', $data);

  }

}
