<?php

	



	class Application
	{

	protected  $controller = 'homeController';

   
    protected $action = 'index';

  
    protected $params = [];




    public function __construct(){
 
     $this->preparURL();
   
     if(file_exists(CONTROLLER.$this->controller.'.php')){
     	$this->controller=new $this->controller;
     	if(method_exists($this->controller,$this->action)){
     		call_user_func_array([$this->controller,$this->action],$this->params);
     	}

     }
    
  	

    }


    public function preparURL()
   {		$request=trim($_SERVER['REQUEST_URI'],'/');
          if (!empty($request)) {

            // split URL
            $request=str_replace('poo_mvc','',$request);

            $url = filter_var($request, FILTER_SANITIZE_URL); 
            

            $url = explode('/',trim($request,'/'));
            
            
           


           
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';

            // separe controller et action de les params
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->params = !empty($url)?array_values($url):[];

         
        }


    }
   




	}
?>