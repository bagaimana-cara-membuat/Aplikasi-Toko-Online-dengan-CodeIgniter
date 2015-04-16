<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//load model -> model_products
		$this->load->model('model_products');
	}
	
	public function index()
	{
		$data['products'] = $this->model_products->all();
		$this->load->view('backend/view_all_products', $data);
	}
}