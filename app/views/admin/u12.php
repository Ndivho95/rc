<?php require  APPROOT . '\views\inc\admin-header.php';?>
    
    <?php
        if(isset($_POST['add_player'])){
            echo 'ready to send';
        }
    ?>

    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb mt-5">
        <li class="breadcrumb-item">
          <a href="#">Tables</a>
        </li>
        <li class="breadcrumb-item active">u12</li>
      </ol>
      <!-- Icon Cards-->
      
      <!-- Area Chart Example-->
      
      <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-table"></i> Under 12
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addPlayer">Add Player</button>

            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Age</th>
                  <th>Position</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                
                
                <?php foreach($data['posts'] as $post) : ?>
                <tr>
                  <th><?php echo $post->id;?></th>
                  <td><?php echo $post->name;?></td>
                  <td><?php echo $post->surname;?></td>
                  <td><?php echo $post->age;?></td>
                  <td><?php echo $post->position;?></td>
                  <td><a href="#" class="btn btn-success btn-block">Edit</a></td>
                  <td><a href="#" class="btn btn-danger btn-block">Delete</a></td>
                </tr>
                
                <?php endforeach; ?>
                 
              </tbody>
            </table>
            </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            <!-- Add Player -->
            
        </div>
        
        <div class="modal fade" id="addPlayer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Player</h5>
                        <?php
        if(isset($_POST['add_player'])){
            echo 'ready to send';
        }
    ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <form id="player-form" action="<?php echo URLROOT;?>/admin/u10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Player Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="surname" placeholder="Player Surname">
                            </div>
                            <div class="form-group">
                                <input type="number" min="8" max="12" class="form-control" name="age" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">ST</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">RW</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">LW</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">CAM</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">CM</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">CMD</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">RB</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">LB</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">CM</label>
                                <label class="checkbox-inline"><input type="checkbox" name="position[]" value="">GK</label>

                            </div>
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="add-player" class="btn btn-success" >Submit</button>
                    </div>
                </div>
            </div>
        </div>
        
        
      <!-- End of Add Player Modal -->
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <script></script>
    
<?php require  APPROOT . '\views\inc\admin-footer.php';?>
