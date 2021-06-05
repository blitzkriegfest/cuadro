<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Resources_model');
  }
  public function index()
  {
    $res = $this->Resources_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/resources', $data);
  }

  public function update($id)
  {
    if($this->Resources_model->update($id, array_merge($this->input->post(null, true),$this->Resources_model->upload('homepage_image')))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Resources updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Resources.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/resources');
  }

 }