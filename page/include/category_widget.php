<div class="card my-4">
<h5 class="card-header">Categories</h5>
<div class="card-body">
  <div class="row">
  	<?php foreach($category->getAllCategory() as $row) { ?>
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <li>
              <a href="?category=<?= $row['id'] ?>"><?= $row['category_name'] ?></a>
            </li>
          </ul>
        </div>
    <?php } ?>
  </div>
</div>
</div>