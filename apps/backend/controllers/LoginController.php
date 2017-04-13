<?php

namespace Multiple\Backend\Controllers;
use Services\CarService;
use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
	
    public function indexAction()
    {
    	$this->view->disable();
    	$carInfo = new CarService();
    	$result=$carInfo->getData();

        $this->response->setContentType('application/json', 'UTF-8');

        if($result == null){
            $this->response->setJsonContent(
                        array(
                            "status" => "NOT-FOUND"
                        )
                    ); 
        }else{
            $this->response->setJsonContent(
                        array(
                            "status" => "FOUND",
                            "data"  => $result
                        )
                    );  

        }
        return $this->response->send();
    }
}
