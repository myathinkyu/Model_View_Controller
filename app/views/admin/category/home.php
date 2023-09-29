<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
    <div class="col-md-3">
    <!-- Sidebar Start -->
    <div class="card">
        <div class="card-header">
            <h4>Category</h4>
        </div>
        <div class="card-block">
        <!-- Sidebar Menu Start -->
            <ul class="list-group">
                <?php foreach($data['cats'] as $cat) : ?>
                    <li class="list-group-item rounded-0 d-flex justify-content-between">
                        <span class="english"><?php echo $cat->name; ?></span>
                        <span>
                            <a href="<?php echo URLROOT . 'category/edit/' . $cat->id ?>" class="english"><i class="fa fa-edit text-warning"></i></a>
                            <a href="<?php echo URLROOT. 'category/delete/' . $cat->id  ?>" class="english"><i class="fa fa-trash text-danger"></i></a>
                        </span>
                    </li>
                 <?php endforeach; ?>
            </ul>
        <!-- Sidebar Menu End -->
        </div>
    </div>
</div>

<div class="col-md-5 offset-md-1 my-5">
    <!-- register form start -->
    <?php flash('register_success'); ?>
    <?php flash('login_fail'); ?>
        <h3 class="english text-info text-center mb-3">Create Category</h3>
            <form action="<?php echo URLROOT . 'category/create' ?>" method="post" autocomplete="on" class="table-bordered p-5">
                <div class="form-group">
                    <label for="name" class="english">Category Name</label>
                    <input type="text" class="form-control english <?php echo !empty($data['name_err']) ? 'is-invalid' : '' ; ?>" id="name" name="name">
                    <span class="text-danger english"><?php echo !empty($data['name_err']) ? $data['name_err'] : '' ; ?></span>
                </div>
                <div class="row justify-content-end no-gutters">
                    <div>
                        <button class="btn btn-outline-secondary english">Cancle</button>
                        <button class="btn btn-primary english">Create</button>
                    </div>
                </div>
            </form>
    <!-- register form end -->
</div>


<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>