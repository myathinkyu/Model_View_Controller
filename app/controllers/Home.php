<?php

class Home extends Controller{
    public $userModel,$catModel,$postModel;
    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
        $this-> userModel = $this->model("UserModel");
        $this->catModel =$this->model("CategoryModel");
    }

    public function index($params = [])
    {
        // $data = $this-> userModel->getAllUser();
        // $this->view("home/index", $data);

        $data = [
            'cats' => '',
            'posts' => ''
        ];
        
        $data['cats'] = $this->catModel->getAllCategory();
        // $data['posts'] = $this->postModel->getPostByCatId($params[0]);
        $this->view("userPanel/index", $data); 
    }

    public function home($params = [])
    {
        // $data = $this-> userModel->getAllUser();
        // $this->view("home/index", $data);

        $data = [
            'cats' => '',
            'posts' => ''
        ];
        
        $data['cats'] = $this->catModel->getAllCategory();
        // $data['posts'] = $this->postModel->getPostByCatId($params[0]);
        $this->view("member/home", $data); 
    }

    

    

    
}

?>


