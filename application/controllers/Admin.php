<?php 
class Admin extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Admin_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('form_insert');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
                        $data['id']=$this->input->post('id');
                        $data['name_product']=$this->input->post('name_product');
                        $data['price_product']=$this->input->post('price_product');
                        $data['img_product']=$this->input->post('img_product');
                        $data['id_category']=$this->input->post('id_category');
			$response=$this->Admin_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}

        public function displaydata()
	{
	$result['data']=$this->Admin_model->display_records();
	$this->load->view('display_records',$result);
	}
	/*Delete Record*/
        public function deletedata()
        {
        $id=$this->input->get('id');
        $response=$this->Admin_model->deleterecords($id);
        if($response==true){
        echo "<script type='text/javascript'>confirm('Bạn có muốn xóa danh mục này không')</script>";

        }
        else{
        echo "Error !";
        }
        }
                
	
}
?>