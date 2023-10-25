<?php


class Mpanel extends Controller{
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
        $this->view("member/mpanel/home", $data); 
    }


    public function show($params = [])
    {
        $post = $this->postModel->getPostById($params[0]);
        $this->view('member/mpanel/show', ['post' => $post]);
    }

    
    public function create()
    {
        $data = [
            'title' => '',
            'desc' => '',
            'file' => '',
            'content' => '',
            'title_err' => '',
            'desc_err' => '',
            'file_err' => '',
            'content_err' => '',
            'cats' => '',
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $_POST = filter_input_array(INPUT_POST);

            $root = dirname(dirname(dirname(__FILE__)));
            $files = $_FILES['file'];
            
            $data['title'] = $_POST['title'];
            $data['desc'] = $_POST['desc'];
            $data['content'] = $_POST['content'];

            if(empty($data['title'])){
                $data['title_err'] = "Title must supply!";
            }

            if(empty($data['desc'])){
                $data['desc_err'] = "Description must supply!";
            }

            if(empty($data['content'])){
                $data['content_err'] = "Content must supply!";
            }

            if(empty($data['title_err']) && empty($data['desc_err']) && empty($data['content_err'])) {
                if(!empty($files)){
                    move_uploaded_file($files['tmp_name'], $root .'/public/assets/uploads/'.$files['name']);
                    if($this->postModel->insertPost($_POST['cat_id'], $data['title'], $data['desc'], $files['name'], $data['content'])){
                        flash('pis', 'Post Insert Successfully');
                        redirect(URLROOT . 'mpanel/home/1');
                    }else{
                        $this->view("member/mpanel/create", $data);
                    }
                }else{
                    $this->view("member/mpanel/create", $data);
                }
            }else{
                $this->view("member/mpanel/create", $data);
            }
        }else{
            $this->view("member/mpanel/create", $data);
        }
    }

    
}

?>


