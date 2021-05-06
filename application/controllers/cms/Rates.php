<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rates extends Admin_core_controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('cms/Rates_model');
  }
  public function index()
  {
    $res = $this->Rates_model->all();

    $data['res'] = $res;
    $this->wrapper('cms/rates', $data);
  }

  public function update()
  {
    if($this->Rates_model->update($id, $this->input->post(null, true))){
     $this->session->set_flashdata('flash_msg', ['message' => 'Rates updated successfully', 'color' => 'green']);
   } else {
     $this->session->set_flashdata('flash_msg', ['message' => 'Error updating Rates.', 'color' => 'red']);
   }
   $this->admin_redirect('cms/rates');
  }

 }