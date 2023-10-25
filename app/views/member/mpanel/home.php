<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>

<div class="container-fluid">
    <div class="container my-2">
    <?php flash('def'); ?>
        <a href="<?php echo URLROOT . 'mpanel/create/'; ?>" class="btn btn-primary mb-2 english bg-dark border-0">Create</a>
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <?php foreach($data['cats'] as $cat) : ?>
                        <li class="list-group-item">
                            <a href="<?php echo URLROOT . 'mpanel/home/' . $cat->id; ?>" class="english text-dark"><?php echo $cat->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-8">
                <!-- post card start -->
                <?php foreach ($data['posts'] as $post) : ?>
                    <div class="card mb-3">
                        <div class="card-header bg-dark text-white">
                            <h4 class="english"><?php echo $post->title; ?></h4>
                        </div>
                        <div class="card-block p-2">
                            <p class="english"><?php echo $post->description; ?></p>
                            <div class="row justify-content-end no-gutters">
                                <a href="<?php echo URLROOT . 'mpanel/show/' . $post->id; ?>"  class="english btn btn-success text-white btn-sm">Detail</a>
                            </div>
                        </div>
                    </div> 
                <?php endforeach; ?>
                <!-- post card end -->
            </div>
        </div>
    </div>
</div>


<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>