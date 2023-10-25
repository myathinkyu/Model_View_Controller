<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>

<div class="container-fluid">
    <div class="container my-5">
        <?php flash('pes'); ?>
        <div class="row justify-content-between no-gutters px-3 mb-2">
            <a href="<?php echo URLROOT . 'post/home/' . $data['post']->cat_id; ?>" class="btn btn-primary bg-dark border-0">Back</a>
            <a href="<?php echo URLROOT . 'post/edit/' . $data['post']->id; ?>" class="btn btn-primary bg-dark border-0">Edit</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="english"><?php echo $data['post']->title; ?></h5>
                </div>
                <div class="card-body">
                    <img src="<?php echo URLROOT . 'assets/uploads/' .$data['post']->image; ?>" alt="">
                    <p>
                        <?php echo $data['post'] -> content; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>