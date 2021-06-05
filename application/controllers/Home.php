<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Faq_model');
    $this->load->model('cms/Project_model');
    $this->load->model('cms/Resources_model');
    $this->load->model('cms/Contact_model');
    $this->load->model('cms/Feature_model');
    $this->load->model('cms/Seo_model');
  }

  public function index()
  {
    $faq = $this->Faq_model->all();
    $project = $this->Project_model->all();
    $resources = $this->Resources_model->all();
    $contact = $this->Contact_model->all();
    $feature = $this->Feature_model->all();
    $seo = $this->Seo_model->allTags('Home');
    $data['seo'] = $seo;
    $data['feature'] = $feature;
    $data['contact'] = $contact;
    $data['faq'] = $faq;
    $data['project'] = $project;
    $data['resources'] = $resources;
    $data['page_title'] = 'Home';
    $this->wrapper_frontend('frontend/home', $data);
    // $this->load->view('frontend/coming-soon');

  }

  public function PrivacyPolicy()
  {
    $faq = $this->Faq_model->all();
    $data['faq'] = $faq;
    $contact = $this->Contact_model->all();
    $data['contact'] = $contact;
    $seo = $this->Seo_model->allTags('Privacy Policy');
    $data['seo'] = $seo;
    $data['page_title'] = 'Privacy Policy';
    $this->wrapper_frontend('frontend/privacy', $data);
  }

  public function TermsandConditions()
  {
    $faq = $this->Faq_model->all();
    $resources = $this->Resources_model->all();
    $data['faq'] = $faq;
    $contact = $this->Contact_model->all();
    $data['contact'] = $contact;
    $data['resources'] = $resources;
    $seo = $this->Seo_model->allTags('Terms and Conditions');
    $data['seo'] = $seo;
    $data['page_title'] = 'Terms and Conditions';
    $this->wrapper_frontend('frontend/terms', $data);
  }


}
