<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cms/Product_model');
    $this->load->model('cms/Faq_model');
  }

  public function index()
  {
    $prods = $this->Product_model->all();
    $faq = $this->Faq_model->all();
    $data['prods'] = $prods;
    $data['faq'] = $faq;
    $this->wrapper_frontend('frontend/products', $data);
  }

}
