<?php

class Contact_model extends Admin_core_model
{

  function __construct()
  {
    parent::__construct();

    $this->table = 'contact'; # Replace these properties on children
    $this->upload_dir = 'contact'; # Replace these properties on children
    $this->per_page = 15;
  }

  public function add($data)
  {
    return $this->db->insert($this->table, $data);
  }


  public function update($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update($this->table, $data);
  }



  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete($this->table);

  }

}
