<!DOCTYPE html>
<html lang="en">

 <?php 
    session_start();
    include "include/head.php";
    include "controller/Database.php";
    include "controller/Blog.php";
    include "controller/Detail.php";
    include "controller/User.php";
    include "controller/Category.php";
    include "controller/Search.php";
    include "config/config.php";
    include "config/indonesiaDate.php";

    $blog = new \controller\Blog;
    $detail = new \controller\Detail;
    $category = new \controller\Category;
    $user = new \controller\User;
    $search = new \controller\Search;
 ?>

  <body>
    <!-- Navigation -->
       <?php include "include/nav.php" ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php 
          if(isset($_GET['detail'])){
            //comment
            if(isset($_POST['submitComment'])) $detail->saveComment($_POST);
            if(isset($_POST['searchSubmit'])) { 
              include "page/search.php"; 
            } else {
              include "page/detail_post.php"; 
            }

          } else if(isset($_GET['login'])){
            include "page/login.php";
            if($_POST) $user->login($_POST);
          }else if(isset($_GET['logout'])){
            $user->logout();
          }else if(isset($_POST['searchSubmit'])){
            include "page/search.php";
          }else if(isset($_GET['category'])){
            include "page/category.php";
          }else if(isset($_GET['page'])){
            include "page/home.php";
          }  else {
            include "page/home.php";
          }
        ?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include "include/footer.php" ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="asset/jquery/jquery.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
