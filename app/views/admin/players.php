<?php require  APPROOT . '\views\inc\header.php';?>



    <div class="container-fluid">
      <div class="row">
        
        <?php require  APPROOT . '\views\inc\sidebar.php';?>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Players</h1>
<!--
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
-->
          </div>

<!--          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>-->

          
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <td>Date of Birth</td>
                  <th>Age</th>
                  <th>Age Group</th>
                  <th>Position(s)</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Thapelo</td>
                  <td>Morena</td>
                  <td>1 Jan 2000</td>
                  <td>18</td>
                  <td>U23</td>
                  <td>CMD, CM</td>
                  <td><a href="#" class="btn btn-success btn-block">Edit</a></td>
                  <td><a href="#" class="btn btn-warning btn-block text-white">Delete</a></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php require  APPROOT . '\views\inc\footer.php';?>
