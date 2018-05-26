<?php 
 $per_page = 4;
      $cur_page = 1;
      if(isset($_GET['page'])) {
        $cur_page = $_GET["page"];
        $cur_page = ($cur_page > 1) ? $cur_page : 1;
      }
      $total_data = $blog->numRows();
      $total_page = ceil($total_data/$per_page);

  if(isset($total_page)) { ?>
  <?php if($total_page > 1) { ?>
    <ul class="pagination justify-content-center mb-4">
      <?php if($cur_page > 1) { ?>
        <li class="page-item">
          <a class="page-link" href="index.php?page=<?= $cur_page-1 ?>">&larr; Older</a>
        </li>
      <?php } else { ?>
         <a class="page-link" disabled>&larr; Older</a>
      <?php } ?>

      <?php if($cur_page < $total_page) { ?>
        <li class="page-item">
          <a class="page-link" href="index.php?page=<?= $cur_page+1?>">Newer &rarr;</a>
        </li>
      <?php } else { ?>
          <a class="page-link">Newer &rarr;</a>
      <?php } ?>
    </ul>
  <?php } ?>
  <?php } ?>