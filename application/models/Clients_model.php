<?php
class Clients_model extends CI_Model {

    public function __construct(){
        //手動での接続（コンストラクタ）
        $this->load->database();
    }

    public function create_client() {
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'locale' => $this->input->post('locale'),
            'gender' => $this->input->post('gender'),
            'media1' => $this->input->post('media1'),
            'media2' => $this->input->post('media2'),
            'opinion' => $this->input->post('opinion'),
            'image_path' => $this->input->post('image_path'),
        ];
        return $this->db->insert('clients',$data);
    }

    // https://manablog.org/model-get/ を利用する。

    public function getData($page) {
        //取得したデータを$pageに挿入。
        $query = $this->get_where("pageData",array("page"=>$page));
        //pageDataのカラム内にあるpageテーブルから情報を取得する。
        return $query->result();
        //結果を表示する。
    }

    public function about(){
        $data["results"] = $this->model_get->getData("about");
        //pageDataのカラム内にあるaboutテーブルから情報を取得する
    
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_about", $data);
        $this->load->view("site_footer");
    }

    public function __destruct()
    {
        $this->db->close();
    }
}