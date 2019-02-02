<?php


class homeController extends Controller
{
	

	public function index($id='',$name='')
	{


	//echo 'id is '.$id.'name is'.$name;
	
		$this->view('home\index',[

			'name'=>$name,
			'id'=>$id

		]);

		$this->view->render();
	}


	public function adoutUS()
	{


	echo 'hi about';
	}
}
?>


