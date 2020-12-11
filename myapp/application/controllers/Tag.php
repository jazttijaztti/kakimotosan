<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {


  public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->database();
  }

  //ブログ一覧
  public function index()
  { 
    $tags = $this->db->get('tags')->result_array();
    if (empty($tag[0])) {
      $data['tags'] = array();
    } else {
       $data['tags'] = $tags[0];
    }
    $this->load->view('tag_index',$data);
  }

  //ブログ作成
  public function create()
  { 
    $this->load->view('tag_create');
  }
  //ブログ登録
  public function register()
  { 
    $data['name'] = $this->input->post('name');
    $res = $this->db->insert('tags',$data);
    if ($res) {
      $this->load->view('tag_complete');
    } else {
      $this->load->view('tag_create');
    }
  }



  //ブログ編集画面
  public function edit()
  { 
    $this->load->view('tag_edit');
  }

  //ブログ更新実行
  public function update()
  { 

  }

}
