<?php require  APPROOT . '\views\inc\header.php';?>
  
  <div class="content-wrapper">
    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-6 mx-auto" style="margin-top:180px !important">
            <div class="card card-body bg-light mt-5">
               <?php 
//                flash('register_success'); 
                ?>
                
                <h2><?php echo $data['title']; ?></h2>
                <p>Please Select File(Only CSV Format)</p>
                <form action="<?php echo URLROOT;?>\upload\index" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control" name="csv_file" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="upload" class="btn btn-info form-control" value="Upload" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <br />
    <div class="table-responsive">
    <!--
    <table class="table table-bordered table-striped">
        <tr>
            <th>Category</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
            <?php
//            while($row = mysqli_fetch_array($result))
//            {
//            echo '
//            <tr>
//            <td>'.$row["product_category"].'</td>
//            <td>'.$row["product_name"].'</td>
//            <td>'.$row["product_price"].'</td>
//            </tr>
//            ';
//            }
            ?>
    </table>-->
    </div>
    
    <?php require  APPROOT . '\views\inc\admin-footer.php';?>
    
