<?php 
require_once  APPROOT . "/views/inc/header.php";
require_once  APPROOT . "/views/inc/nav.php";
?>
  
<?php flash('login_success'); ?>

<div class="container-fluid p-0">
    <div class="row ">
        <div class="col-md-3">
                <div class="card" style="margin-top: 40px; margin-left:40px;">
                    <div class="card-header" >
                        <h4 class="text-dark english">Side Menu</h4>
                    </div>
                    <div class="card-block">
                    <!-- Sidebar Menu Start -->
                        <ul class="list-group">
                            <li class="list-group-item rounded-0">
                                <a href="<?php echo URLROOT. 'upanel/home/1' ; ?>" class="english text-dark">PHP</a>
                            </li>
                        </ul>
                    </div>
                <!-- Sidebar Menu End -->
            </div>
        </div>
        <img src="<?php echo URLROOT."assets/imgs/meeting.jpg" ?>" style="margin-left: 50px; margin-top:30px;" alt="" >
    </div>
</div>
            



<?php 
require_once  APPROOT . "/views/inc/footer.php";
?>