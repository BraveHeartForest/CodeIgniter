<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clients_model');
	}

	public function index()
	{
		$this->load->helper('form');
		//フォームヘルパーの呼び出し
		$this->load->library('form_validation');
		$validation = [
			[
				'field' => 'username',
				'label' => 'ユーザー名',
				'rules' => 'required|min_length[2]|max_length[10]'
			],
			[
				'field' => 'email',
				'label' => 'メールアドレス',
				'rules' => 'required|valid_email'
			],
			[
				'field' => 'age',
				'label' => '年齢',
				'rules' => 'required|numeric|is_natural'
			],
			[
				'field' => 'locale',
				'label' => '地域',
				'rules' => 'required'
			],
			[
				'field' => 'gender',
				'label' => '性別',
				'rules' => 'required'
			],
			[
				'field' => 'media1',
				'label' => 'メディア１',
				'rules' => 'required'
			],
			[
				'field' => 'media2',
				'label' => 'メディア２',
				'rules' => 'differs[media1]'
			],
			[
				'field' => 'opinion',
				'label' => 'ご意見',
				'rules' => ''
			],
			[
				'field' => 'image_path',
				'label' => '画像',
				'rules' => ''
			],
		];
		$this->form_validation->set_rules($validation);
		
		if($this->form_validation->run() === false) {
			$d["message"] = "Hello World!";
			$this->load->view("index",$d);
		}else{
			$this->clients_model->create_client();
			$this->load->view('form_success');
		}
	}

	public function show() {
		$data["results"] = $this->clients_model->getData("home");
		//pageDataのカラム内にあるpageテーブルから取得したデータ(home)との紐付けをする。その後、$dataに情報を挿入する。

		$this->load->view("site_header");
		$this->load->view("site_nav");
		// $this->load->view("content_home");
		$this->load->view("content_home",$data);
		$this->load->view("site_footer");
	}
}
