<?php
include "includes/db.php"
?>

<?php 
include "includes/header.php"
?>
 
  <!-- Navigation -->
  
<?php 
include "includes/navigation.php"
?>
     

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">




<?php
 if(isset($_POST['submit'])){
 
  $search =  $_POST['search'];
 
 
  $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";// that dollar sign makesit looks like a string
  $search_query = mysqli_query($connection, $query);
 
  if(!$search_query){
    die("QUERY FAILED" . mysqli_error($connection));
  }   
 
  $count = mysqli_num_rows($search_query);
  
  if($count == 0 ){
     echo "<h1> NO RESULT</h1>";
  }else {
      $query = "SELECT * FROM posts";
      $select_all_post_query = mysqli_query($connection,$query);

      while($row = mysqli_fetch_assoc($select_all_post_query)){
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
?>

  <!-- Title -->
  <h1 class="mt-4"><?= $post_title ?> </h1>
  <!-- Author -->
  <p class="lead">by <a href="#"><?= $post_author ?></a></p>

  <hr>

  <!-- Date/Time -->
  <p><?= $post_date ?> </p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="IMAGES/<?= $post_image;?> " alt="">

  <hr>

  <!-- Post Content -->
  <p class="lead"><?= $post_content ?></p>

  <p><?= $post_content ?></p>

  <p><?= $post_content ?></p>

  <blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in
  <cite title="Source Title">Source Title</cite>
  </footer>
  </blockquote>

  <p><?= $post_content ?></p>
  <p><?= $post_content ?></p>

  <hr>

    <?php  
    } 
  }
}
?>
     
      
 
</div>



 <!-- Sidebar Widgets Column -->
 <div class="col-md-4">
  <?php
  include "includes/sidebar.php"
  ?>   
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
include "includes/footer.php";
 ?>