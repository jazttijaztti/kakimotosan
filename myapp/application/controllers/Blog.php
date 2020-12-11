<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


  public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->database();
  }

  //ブログ一覧
  public function index()
  { 
    $this->load->view('blog_index');
  }

  public function detail($id) {
    $this->db->where('id' , $id);
    $data_row = $this->db->get('blogs')->result_array();
    $data['blog_detail'] = $data_row[0];
    $this->load->view('blog_detail',$data);
  }

  //ブログ作成
  public function create()
  {
    $tags = $this->db->get('tags')->result_array();
    $category = $this->db->get('category')->result_array();
    $data['tags'] = $tags;
    $data['categories'] = $category;
    $this->load->view('blog_create',$data);
  }
  //ブログ登録
  public function register()
  { 
    $post = $this->input->post();
    
    $data['title'] = $post['title'];
    $data['body1'] = $post['body1'];
    $data['body2'] = $post['body2'];
    $data['category_id'] = $post['category'];
    $data['tags_id'] = $post['tags'];
    $this->db->insert('blogs',$data);

    echo "登録したよ";
    exit;
  }



  //ブログ編集画面
  public function edit()
  { 
    $this->load->view('blog_edit');
  }

  //ブログ更新実行
  public function update()
  { 

  }

}
