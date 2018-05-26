<?php $result = $detail->getDetail($_GET['detail']) ?>
<style type="text/css">
	.media img {border-radius: 50%; margin-right: 20px; } 
</style>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><?= $result['title'] ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Irwan Deswitansyah</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?= tgl_indonesia($result['date_post']) ?></p>

          <hr>

          <!-- Preview Image -->
         <?= cl_image_tag($result['image_news']) ?>

          <hr>

          <!-- Post Content -->
          <p class="lead"><?= $result['news'] ?></p>

          <hr>

          <!-- Comments Form -->
          <?php if(isset($_SESSION['is_login'])) { ?>
            <?php if(isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">New Comment added bellow :</div>
            <?php } ?>
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                	<input type="hidden" name="post_id" value="<?= $result['id'] ?>">
                	<input type="hidden" name="username" value="<?= $_SESSION['username']?>">
                  <textarea class="form-control" rows="3" name="reply"></textarea>
                </div>
                <button type="submit" name="submitComment" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <?php } else { ?>
              <p class="lead">
                Silahkan login terlebih dahulu untuk menulis komentar. <a href="?login">Login</a>
              </p>
          <?php } ?>

          <!-- Single Comment -->
          <?php if($allComment = $detail->getById($result['id'])) { ?>
          <?php foreach($allComment as $commentResult) {?>
          		 <div class="media mb-4">
	            <?= cl_image_tag($commentResult['photo'])?>
	            <div class="media-body">
	              <h5 class="mt-0"><?= $commentResult['username'] ?></h5>
	              	<small>Posted on <?= tgl_indonesia($result['date_post']) ?></p></small>
	             	<p><?= $commentResult['reply'] ?></p>
	            </div>
	          </div>
          <?php }?>
          <?php } ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
        	<?php include "page/include/search_widget.php" ?> 

           <!-- Categories Widget -->
  			<?php include "page/include/category_widget.php" ?>

           <!-- Side Widget -->
 			<?php include "page/include/side_widget.php" ?>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->