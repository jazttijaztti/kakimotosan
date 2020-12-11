<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


  public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->database();
  }

  //ブログ一覧
  public function index()
  { 
    $category = $this->db->get('category')->result_array();
    if (empty($category[0])) {
      $data['category'] = array();
    } else {
       $data['category'] = $category[0];
    }
    $this->load->view('category_index',$data);
  }

  //ブログ作成
  public function create()
  { 
    $this->load->view('category_create');
  }
  //ブログ登録
  public function register()
  { 
    $data['name'] = $this->input->post('name');
    $res = $this->db->insert('category',$data);
    if ($res) {
      $this->load->view('category_complete');
    } else {
      $this->load->view('category_create');
    }
  }



  //ブログ編集画面
  public function edit()
  { 
    $this->load->view('category_edit');
  }

  //ブログ更新実行
  public function update()
  { 

  }

}
