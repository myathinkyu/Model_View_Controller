<?php

class Post extends Controller{
    public $postModel, $catModel;
    public function __construct()
    {
        $this->postModel = $this->model("PostModel");
        $this->catModel =$this->model("CategoryModel");
    }

    public function index($params = [])
    {
        $data = [
            'cats' => '',
            'posts' => ''
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        $data['posts'] = $this->postModel->getPostByCatId($params[1]);
        $this->view("admin/post/home", $data); 
    }
}

?>