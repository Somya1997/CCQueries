<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"  >Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                    <!-- <h5 class="text-center mb-4">Login Now</h5>-->
                        <form id="Form3" method="post" enctype="multipart/form-data" nonvalidate>
                            <div class="form-group">
                                <label class="col-form-label" ><h6>Login ID</h6></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name='login_id' >
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"><h6>Password</h6></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name='pwd'>
                            </div>
                            <div class="form-group">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <span><input type="submit"  name="login"  value="SignIn" class="btn btn-primary submit px-4"></span>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span> <input  onclick="modal_change()" value="Forgot Password?" class="btn btn-secondary submit  py-2" ></span>
                            </div>
                            <div class="form-group">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"  >Reset Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
      </div>
      <div class="modal-body">
         <div class="login px-4 mx-auto mw-100">
              <form id="Form4" method="post" enctype="multipart/form-data" nonvalidate>
              <div class="form-group">
                  <label class="col-form-label" ><h6>Registered Email Id</h6></label>
                  <input type="email" class="form-control" id="exampleInputEmail2" name='login_id12' required>
              </div>
              <div class="form-group">
                  <input type="submit"  name="enter"  value="Proceed" class="btn btn-primary submit mb-4" >
              </div>
              </form>
          </div>
      </div>
</div>
</div>
</div>