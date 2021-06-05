<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Seo_model');
  }

  public function index()
  {
    $this->dashboard();
  }

  public function dashboard()
  {
    $res = $this->Seo_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/seo', $data);
  }

  public function add()
  {
  
    if($this->Seo_model->add($this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'SEO added successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error adding SEO', 'color' => 'red']);
   }
   $this->admin_redirect('cms/seo');
  }

  public function update($id)
  {
    if($this->Seo_model->update($id, $this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'SEO updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating SEO.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/seo');
  }

  public function delete()
  {
    if($this->Seo_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'SEO data deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting SEO.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/seo');
  }
}
