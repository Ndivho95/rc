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
            <a class="btn btn-primary" href="<?php echo URLROOT; ?>/users/logout" class="nav-link">Logout</a>
          </div>
        </div>
      </div>
    </div>    
    
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URLROOT; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URLROOT; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo URLROOT; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo URLROOT; ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo URLROOT; ?>/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo URLROOT; ?>/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo URLROOT; ?>/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo URLROOT; ?>/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/sb-admin-charts.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/player-submit.js"></script>
    
    <script>
        $(document).ready(function(){
            var commentsCount = 2;
            $("#add-player").click(function(){
                alert("Hi");
            });
        });
    </script>
    </script>
  </div>
    </body>
</html>