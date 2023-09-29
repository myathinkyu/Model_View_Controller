<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>

<div class="container-fluid">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <?php foreach($data['cats'] as $cat) : ?>
                        <li class="list-group-item">
                            <a href="#" class="english"><?php echo $cat->name; ?></a>
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
                            <p><?php echo $post->desc; ?></p>
                            <div class="row justify-content-end no-gutters">
                            <button class="english btn btn-success text-white btn-sm">Detail</button>
                                <button class="english btn btn-warning text-white btn-sm ml-1">Edit</button>
                                <button class="english btn btn-danger text-white btn-sm ml-1">Delete</button>
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