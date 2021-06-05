<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Feature_model');
  }

  public function index()
  {
    $this->dashboard();
  }

  public function dashboard()
  {
    $res = $this->Feature_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/features', $data);
  }

  public function add()
  {
  
    if($this->Feature_model->add(array_merge($this->input->post(null, true),$this->Feature_model->upload('feature_image')))){
     $this->session->set_flashdata('flash_msg', ['message' => 'New Feature added successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error Saving Feature', 'color' => 'red']);
   }
   $this->admin_redirect('cms/features');
  }

  public function update($id)
  {
    if($this->Feature_model->update($id, array_merge($this->input->post(null, true),$this->Feature_model->upload('feature_image')))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Feature updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Feature.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/features');
  }

  public function delete()
  {
    if($this->Feature_model->delete($this->input->post('id'))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Feature deleted successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error deleting Feature.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/features');
  }
  
}
