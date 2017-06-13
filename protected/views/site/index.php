<div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="assets/images/dti-logo.png" alt="...">
          <h2 class="brand-text font-size-40">TECHNICAL REPORT</h2>
        </div>
        <p class="font-size-20"></p>
      </div>
      <div class="page-login-main animation-slide-right animation-duration-1">
        <div class="brand hidden-md-up">
          <img class="brand-img" src="assets/images/dti-logo.png" alt="...">
          <h3 class="brand-text font-size-40">TECHNICAL REPORT</h3>
        </div>
        <h3 class="font-size-24">เข้าสู่ระบบ</h3>
        <p>ยินดีต้อนรับเข้าสู่ ระบบจัดเก็บรายงานทางวิชาการ</p>
        <form method="post" action="admin.php/backoffice">
        <form id="loginform" method="post" action="login-v2.html">
          <div class="summary-errors alert alert-danger alert-dismissible">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            </button>
            <p>Errors list below: </p>
            <ul></ul>
          </div>  
          <div class="form-group">
            <label class="sr-only" for="inputEmail">รหัสเจ้าหน้าที่</label>
            <input type="text" class="form-control" id="inputUser" name="username" placeholder="รหัสเจ้าหน้าที่">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
            placeholder="รหัสผ่าน">
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="rememberMe" name="rememberMe">
              <label for="rememberMe">Remember me</label>
            </div>
            <a class="float-right" href="forgot-password.html">Forgot password?</a>
          </div>
          <button type="submit" id="loginBtn" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
        </form>
        <!-- <p>No account? <a href="register-v2.html">Sign Up</a></p>--> 
        <footer class="page-copyright">
          <p>WEBSITE BY RDC</p>
          <p>© 2017. All RIGHT RESERVED.</p>
          <!-- <div class="social">
            <a class="btn btn-icon btn-round social-twitter" href="javascript:void(0)">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-facebook" href="javascript:void(0)">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus" href="javascript:void(0)">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
          </div> -->
        </footer>
      </div>
    </div>