<?php

class Mcategory extends Controller
{
    public $catModel;
    public function __construct()
    {
        $this->catModel = $this->model('CategoryModel');
    }

    public function create($data = [])
    {
        $data = [
            "name" => "",
            "name_err" => "",
            "cats" => $this->catModel->getAllCategory()
        ];

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $_POST = filter_input_array(INPUT_POST);
            $data['name'] = $_POST['name'];

            if(empty($data['name'])){
                $data['name_err'] = "Category name must supply!";
                $this->view('member/mcategory/home', $data);
            }else{
                if($this->catModel->getCategoryByName($data['name'])){
                    $data['name_err'] = "Category name is already in use!";
                    $this->view('member/mcategory/home', $data);
                }else{
                    if($this->catModel->insertNewCategory($data['name'])){
                        flash("cat_create_success","Category created successfully");
                        $data['cats'] = $this->catModel->getAllCategory();
                        $this->view('member/mcategory/home', $data);
                    }else{
                        flash("cat_create_fail","Category create fail");
                        $this->view('member/mcategory/home', $data);
                    }
                }
            }
        }else{
            $this->view('member/mcategory/home', $data);
        }
    }
}

?>