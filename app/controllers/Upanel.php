<?php


class Upanel extends Controller{
    public $userModel,$catModel,$postModel;
    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
        $this-> userModel = $this->model("UserModel");
        $this->catModel =$this->model("CategoryModel");
    }

    public function home($params = [])
    {
        $data = [
            'cats' => '',
            'posts' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        $data['posts'] = $this->postModel->getPostByCatId($params[0]);
        $this->view("userPanel/upanel/home", $data); 
    }


    public function show($params = [])
    {
        $post = $this->postModel->getPostById($params[0]);
        $this->view('userPanel/upanel/show', ['post' => $post]);
    }

    
}

?>


