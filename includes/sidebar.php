
       
        
       
        <!-- Search Widget -->
        <div class="card my-4">
        
          <h5 class="card-header">Search</h5>

          <form action="search2.php" method="post">
          <div class="card-body">
            <div class="input-group">
              <input name="search" type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button name="submit" class="btn btn-secondary" type="submit">SUBMIT</button>

              </span>
            </div>
     </form>  <!-- search form  -->
          </div>
        </div>
 
        <!-- Categories Widget -->
        <div class="card my-4">

        <?php
$query = "SELECT * FROM categories ";
$select_categories_sidebar= mysqli_query($connection, $query);// connecting the database to the connection in the index.php 
?>
 

          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <?php 
                while($row = mysqli_fetch_assoc($select_categories_sidebar)){ //display to bring back the values 
                  $cat_title = $row['cat_title'];
                 
                  echo "<li><a class='nav-link' href='#'>{$cat_title}</a></li>";
                 }
                 ?>
          
                </ul>
            </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
         <?php
         include "inlcudes/widget.php";
         ?>
        </div>

      </div>

    </div>
    <!-- /.row -->
