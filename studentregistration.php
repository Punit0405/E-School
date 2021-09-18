<!-- start registration form  -->
<form id="sturegistrationform">
  <div class="form-group mb-3">
    <i class="fas fa-user"></i>
    <label for="stuname" class="px-2 font-weight-bold">Name</label>
    <small id="statusmsg1"></small>
    <input type="text" class="form-control"
    name="stuname" id="stuname" placeholder="Name"></div>

    <div class="form-group mb-3">
    <i class="fas fa-envelope"></i>
    <label for="stuemail" class="px-2 font-weight-bold">Email</label>
    <small id="statusmsg2"></small>
    <input type="text" class="form-control"
    name="stuemail" id="stuemail" placeholder="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <i class="fas fa-key"></i><label for="stupassword" class="px-2 font-weight-bold">New Password</label>
  <small id="statusmsg3"></small>
    <input type="password" name="stupassword" id="stupassword" class="form-control" placeholder="Password">
  </div>
  
  
</form>
<!-- end registration form  -->