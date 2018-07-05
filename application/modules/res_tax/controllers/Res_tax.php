<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_tax extends MY_Restaurant {

  var $access, $tax_id;

  function __construct(){
    parent::__construct();
    if($this->session->userdata('menu') != 'res_tax'){
      $this->session->set_userdata(array('menu' => 'res_tax'));
      $this->session->unset_userdata('search_term');
    }
    $this->load->model('app_config/m_res_config');

    $this->role_id = $this->session->userdata('role_id');
    $this->module_controller = 'res_tax';
    $this->access = $this->m_res_config->get_permission($this->role_id, $this->module_controller);

    $this->load->model('m_res_tax');
  }

	public function index()
  {
    if ($this->access->_read == 1) {
      $data['access'] = $this->access;
      $data['title'] = 'Manajemen Pajak';

      if($this->input->post('search_term')){
        $search_term = $this->input->post('search_term');
        $this->session->set_userdata(array('search_term' => $search_term));
      }

      $config['base_url'] = base_url().'res_tax/index/';
      $config['per_page'] = 10;

      $from = $this->uri->segment(3);

      if($this->session->userdata('search_term') == null){
        $num_rows = $this->m_res_tax->num_rows();

        $config['total_rows'] = $num_rows;
        $this->pagination->initialize($config);

        $data['tax'] = $this->m_res_tax->get_list($config['per_page'],$from,$search_term = null);
      }else{
        $search_term = $this->session->userdata('search_term');
        $num_rows = $this->m_res_tax->num_rows($search_term);
        $config['total_rows'] = $num_rows;
        $this->pagination->initialize($config);

        $data['tax'] = $this->m_res_tax->get_list($config['per_page'],$from,$search_term);
      }

      $this->view('res_tax/index',$data);
    } else {
      redirect(base_url().'app_error/error/403');
    }

  }

  public function reset_search()
  {
    $this->session->unset_userdata('search_term');
    redirect(base_url().'res_tax/index');
  }

  public function form($id = null)
  {
    $data['access'] = $this->access;
    if ($id == null) {
      if ($this->access->_create == 1) {
        $data['title'] = 'Tambah Pajak';
        $data['action'] = 'insert';
        $data['tax'] = null;
        $this->view('res_tax/form', $data);
      } else {
        redirect(base_url().'app_error/error/403');
      }
    }else{
      if ($this->access->_update == 1) {
        $data['title'] = 'Ubah Pajak';
        $data['tax'] = $this->m_res_tax->get_by_id($id);
        $data['action'] = 'update';
        $this->view('res_tax/form', $data);
      } else {
        redirect(base_url().'app_error/error/403');
      }
    }
  }

  public function insert()
  {
    $data = $_POST;
    $data['created_by'] = $this->session->userdata('user_realname');
    if(!isset($data['is_active'])){
      $data['is_active'] = 0;
    }
    $this->m_res_tax->insert($data);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil ditambahkan!</div>');
    redirect(base_url().'res_tax/index');
  }

  public function edit($id)
  {
    $data['tax']= $this->m_res_tax->get_specific($id);
    $this->load->view('res_tax/update', $data);
  }

  public function update()
  {
    $data = $_POST;
    $id = $data['tax_id'];
    $data['updated_by'] = $this->session->userdata('user_realname');
    if(!isset($data['is_active'])){
      $data['is_active'] = 0;
    }
    $this->m_res_tax->update($id,$data);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil diubah!</div>');
    redirect(base_url().'res_tax/index');
  }

  public function delete($id)
  {
    if ($this->access->_delete == 1) {
      $this->m_res_tax->delete($id);
      $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil dihapus!</div>');
      redirect(base_url().'res_tax/index');
    } else {
      redirect(base_url().'app_error/error/403');
    }

  }

}