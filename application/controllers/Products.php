<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cms/Product_model');
    $this->load->model('cms/Faq_model');
    $this->load->model('cms/Contact_model');
    $this->load->model('cms/Seo_model');
  }

  public function index()
  {
    $prods = $this->Product_model->all();
    $faq = $this->Faq_model->all();
    $contact = $this->Contact_model->all();
    $seo = $this->Seo_model->allTags('Products');
    $data['seo'] = $seo;
    $data['contact'] = $contact;
    $data['prods'] = $prods;
    $data['faq'] = $faq;
    $data['page_title'] = 'Products';
    $this->wrapper_frontend('frontend/products', $data);
  }

}
