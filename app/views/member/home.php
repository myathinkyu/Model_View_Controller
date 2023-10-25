<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>
  
<?php flash('login_success'); ?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-md-3">
            <div class="card" style="margin-top: 40px; margin-left:40px;">
                <div class="card-header">
                    <h4>Side Menu</h4>
                </div>
                <div class="card-block">
                <!-- Sidebar Menu Start -->
                    <ul class="list-group">
                        <li class="list-group-item rounded-0">
                            <a href="<?php echo URLROOT. 'mcategory/create' ; ?>" class="english text-dark">Category</a>
                        </li>
                        <li class="list-group-item rounded-0">
                            <a href="<?php echo URLROOT. 'mpanel/home/1' ; ?>" class="english text-dark">PHP</a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <img src="<?php echo URLROOT."assets/imgs/fruit.jpg" ?>" style="margin-left: 100px; margin-top:80px;" alt="">
    </div>
</div>
            



<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>