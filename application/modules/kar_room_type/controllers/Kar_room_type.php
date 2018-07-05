<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kar_room_type extends MY_Karaoke {

  var $access, $room_type_id;

  function __construct(){
    parent::__construct();
    if($this->session->userdata('menu') != 'kar_room_type'){
      $this->session->set_userdata(array('menu' => 'kar_room_type'));
      $this->session->unset_userdata('search_term');
    }
    $this->load->model('app_config/m_kar_config');

    $this->role_id = $this->session->userdata('role_id');
    $this->module_controller = 'kar_room_type';
    $this->access = $this->m_kar_config->get_permission($this->role_id, $this->module_controller);

    $this->load->model('m_kar_room_type');
    $this->load->model('kar_time/m_kar_time');
  }

	public function index()
  {
    if ($this->access->_read == 1) {
      $data['access'] = $this->access;
      $data['title'] = 'Manajemen Tipe';

      if($this->input->post('search_term')){
        $search_term = $this->input->post('search_term');
        $this->session->set_userdata(array('search_term' => $search_term));
      }

      $config['base_url'] = base_url().'kar_room_type/index/';
      $config['per_page'] = 10;

      $from = $this->uri->segment(3);

      if($this->session->userdata('search_term') == null){
        $num_rows = $this->m_kar_room_type->num_rows();

        $config['total_rows'] = $num_rows;
        $this->pagination->initialize($config);

        $data['room_type'] = $this->m_kar_room_type->get_list($config['per_page'],$from,$search_term = null);
      }else{
        $search_term = $this->session->userdata('search_term');
        $num_rows = $this->m_kar_room_type->num_rows($search_term);
        $config['total_rows'] = $num_rows;
        $this->pagination->initialize($config);

        $data['room_type'] = $this->m_kar_room_type->get_list($config['per_page'],$from,$search_term);
      }

      $this->view('kar_room_type/index',$data);
    } else {
      redirect(base_url().'app_error/error/403');
    }

  }

  public function reset_search()
  {
    $this->session->unset_userdata('search_term');
    redirect(base_url().'kar_room_type/index');
  }

  public function form($id = null)
  {
    $data['access'] = $this->access;
    $data['time'] = $this->m_kar_time->get_all();
    if ($id == null) {
      if ($this->access->_create == 1) {
        $data['title'] = 'Tambah Tipe';
        $data['action'] = 'insert';
        $data['room_type'] = null;
        $this->view('kar_room_type/form', $data);
      } else {
        redirect(base_url().'app_error/error/403');
      }
    }else{
      if ($this->access->_update == 1) {
        $data['title'] = 'Ubah Tipe';
        $data['room_type'] = $this->m_kar_room_type->get_by_id($id);
        $data['action'] = 'update';
        $this->view('kar_room_type/form', $data);
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
    $data['weekday_happy_hours'] = price_to_num($data['weekday_happy_hours']);
    $data['weekday_business_hours'] = price_to_num($data['weekday_business_hours']);
    $data['weekend_happy_hours'] = price_to_num($data['weekend_happy_hours']);
    $data['weekend_business_hours'] = price_to_num($data['weekend_business_hours']);
    $data['holiday_happy_hours'] = price_to_num($data['holiday_happy_hours']);
    $data['holiday_business_hours'] = price_to_num($data['holiday_business_hours']);
    $this->m_kar_room_type->insert($data);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil ditambahkan!</div>');
    redirect(base_url().'kar_room_type/index');
  }

  public function edit($id)
  {
    $data['room_type']= $this->m_kar_room_type->get_specific($id);
    $this->load->view('kar_room_type/update', $data);
  }

  public function update()
  {
    $data = $_POST;
    $id = $data['room_type_id'];
    $data['updated_by'] = $this->session->userdata('user_realname');
    if(!isset($data['is_active'])){
      $data['is_active'] = 0;
    }
    $data['weekday_happy_hours'] = price_to_num($data['weekday_happy_hours']);
    $data['weekday_business_hours'] = price_to_num($data['weekday_business_hours']);
    $data['weekend_happy_hours'] = price_to_num($data['weekend_happy_hours']);
    $data['weekend_business_hours'] = price_to_num($data['weekend_business_hours']);
    $data['holiday_happy_hours'] = price_to_num($data['holiday_happy_hours']);
    $data['holiday_business_hours'] = price_to_num($data['holiday_business_hours']);
    $this->m_kar_room_type->update($id,$data);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil diubah!</div>');
    redirect(base_url().'kar_room_type/index');
  }

  public function delete($id)
  {
    if ($this->access->_delete == 1) {
      $this->m_kar_room_type->delete($id);
      $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span class="fa fa-check" aria-hidden="true"></span><span class="sr-only"> Sukses:</span> Data berhasil dihapus!</div>');
      redirect(base_url().'kar_room_type/index');
    } else {
      redirect(base_url().'app_error/error/403');
    }

  }

}