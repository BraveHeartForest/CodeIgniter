<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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

	public function index()
	{
        //helperの呼び出し
        $this->load->helper('form');

        //ライブラリの呼び出し
        $this->load->library('form_validation');

        //バリデーション設定
        $validation = [
            [
                'field' => 'name',
                'label' => '名前',
                'rules' => 'required'
            ],
            [
                'field' => 'kana',
                'label' => 'カナ',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'メールアドレス',
                'rules' => 'required'
            ],
            [
                'field' => 'email2',
                'label' => 'メールアドレス後半',
                'rules' => 'required'
            ],
            [
                'field' => 'sex',
                'label' => '性別',
                'rules' => 'required'
            ],
            [
                'field' => 'pref',
                'label' => '都道府県',
                'rules' => 'required'
            ],
            [
                'field' => 'fav',
                'label' => '好きな麺類',
                'rules' => 'required'
            ],
        ];
        $this->form_validation->set_rules($validation);
        //エラーメッセージの基本設定
        $this->form_validation->set_message('required','%sが入力されていません。');
        if($this->form_validation->run() ===false)
        {
            //初回読み込み、またはエラー時のview呼び出し
            $this->load->view("form_step1");
        }else{
            //バリデーション通過時のview呼び出し
            $this->load->view("thanks");
        }

	}

}
