<!-- Blog Entries Column -->
<div class="col-md-8">
  <h1 class="my-4">Page Heading
    <small>Secondary Text</small>
  </h1>

  <!-- Blog Post -->
  <?php foreach($blog->getAll() as $row) { ?>
	  <div class="card mb-4">
	   	<?= cl_image_tag($row['image_news']) ?>
	    <div class="card-body">
	      <h2 class="card-title"><?= $row['title'] ?></h2>
	      <p class="card-text"><?= $row['news'] ?></p>
	      <a href="?detail=<?= $row['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
	    </div>
	    <div class="card-footer text-muted">
	      Posted on <?= tgl_indonesia($row['date_post']) ?> by
	      <a href="#">Irwan Deswitansyah</a>
	    </div>
	  </div>
  <?php } ?>

  <!-- Pagination -->
  <?php include "page/include/pagination.php" ?>
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