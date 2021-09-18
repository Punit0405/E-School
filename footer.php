<!-- footer starts  -->
<footer class="container-fluid bg-dark text-center p-2">


  <small class="text-white">Copyright &copy; 2021 || Designed By E-School || <a href="#login" class="text-white adminclass " data-bs-toggle="modal" data-bs-target="#adminloginmodal">Admin Login</a></small>
</footer>
<!-- footer ends  -->

<!--  start Registration Form Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="registrationmodal" tabindex="-1" aria-labelledby="registrationmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrationmodalLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        include('./studentregistration.php');
        ?>
      </div>
      <div class="modal-footer">
        <span id="successmsg"></span>
        <button type="button" class="btn btn-primary " id="signup" onclick="addstudent()">Sign Up</button>
        <button type="button" id="registrationclose" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  end Registration Form Modal -->

<!--  start login Form Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <?php
        include('./stulogin.php');
        ?>
    </div>
   <div class="modal-footer">
   <span id="loginsuccessmsg"></span>
     <button type="button" class="btn btn-primary" onclick="checkstulogin()" id="stuloginbtn">Login</button>
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
   </div>
 </div>
</div>
</div>
 <!--  end login Form Modal -->



        <!--  start admin login Form Modal -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="adminloginmodal" tabindex="-1" aria-labelledby="adminloginmodalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="adminloginmodalLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!--start admin login form  -->
                <form id="adminloginform">


                  <div class="form-group mb-3">
                    <i class="fas fa-envelope"></i>
                    <label for="adminloginemail" class="px-2 font-weight-bold">Admin Email</label>
                    <input type="text" class="form-control" name="adminloginemail" id="adminloginemail" placeholder="Email">

                  </div>
                  <div class="mb-3">
                    <i class="fas fa-key"></i><label for="adminloginpassword" class="px-2 font-weight-bold">Admin Password</label>
                    <input type="password" name="adminloginpassword" id="adminloginpassword" class="form-control" placeholder="Password">
                  </div>


                </form>
                <!-- end login form  -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="adminloginbtn">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!--  end login Form Modal -->












        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="./js/jquery.js"></script>
        <script src="./js/all.min.js"></script>
        <script src="./js/ajaxrequest.js"></script>
        </body>

        </html>