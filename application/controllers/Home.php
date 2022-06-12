<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __contruct(){
		parent::__construct();

		$this->load->database();

		$this->load->model('Crud_model');
	}
    
	public function index()
	{
		$this->load->view('home');
		$this->load->helper('url');
		
	}

    public function about()
	{
		$this->load->view('about');
	}


	public function phpadmin()
	{
		$this->load->view('phpadmin');
		$this->load->helper('url');

	}

	
	public function backend()
	{
		$this->load->view('backend');
	

	}

	
	public function about_page()
	{
		$this->load->view('about_pages');

	}
        public function contact()
	{
		$this->load->view('contact_main');

	}

	public function vegetable()
	{
		$this->load->view('vegetable_main');
	}
	public function flower()
	{
		$this->load->view('flower_main');

	}

	public function herbs()
	{
		$this->load->view('herbs_main');

	}
	public function fruits()
	{
		$this->load->view('fruits_main');

	}

	public function organics()
	{
		$this->load->view('organics_main');

	}

	



	public function products()
	{
		$this->load->view('products');


	}




     /*Insert*/
// public function savedata()
// {
// 	/*load registration view form*/
// 	$this->load->view('form_insert');
	
// 	/*Check submit button */
// 	if($this->input->post('save'))
// 	{
// 	        $data['id']=$this->input->post('id');
// 		$data['name_product']=$this->input->post('name_product');
// 		$data['price_product']=$this->input->post('price_product');
// 		$data['img_product']=$this->input->post('img_product');
// 		$data['id_category']=$this->input->post('id_category');
// 		$response=$this->Crud_model->saverecords($data);
// 		if($response==true){
// 		        echo "Records Saved Successfully";
// 		}
// 		else{
// 				echo "Insert error!";
// 		}
// 	}
// }



// public function deletedata(){
// $response=$this->Crud_model->deleterecords($id);
// if($response==true){
//     echo "Data deleted successfully !";
// }
// else{
//    echo "Error !";
//  }
// }
	

}
