<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Login V2 | Remark Admin Template</title>
  <link rel="apple-touch-icon" href="assets/images/dti-logo.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min.css">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="assets/examples/css/pages/login-v2.css">
  <link rel="stylesheet" href="global/vendor/formvalidation/formValidation.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="animsition page-login-v2 layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <style>
  body {
    background: transparent;
  }
  </style>
  <!-- Page -->
  <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
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
        <form method="post" action="index.php/backoffice">
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
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <script src="global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="global/vendor/jquery/jquery.js"></script>
  <script src="global/vendor/tether/tether.js"></script>
  <script src="global/vendor/bootstrap/bootstrap.js"></script>
  <script src="global/vendor/animsition/animsition.js"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min.js"></script>
  <script src="global/vendor/intro-js/intro.js"></script>
  <script src="global/vendor/screenfull/screenfull.js"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <script src="global/vendor/formvalidation/formValidation.min.js"></script>
  <script src="global/vendor/formvalidation/framework/bootstrap4.min.js"></script>
  <!-- Scripts -->
  <script src="global/js/State.js"></script>
  <script src="global/js/Component.js"></script>
  <script src="global/js/Plugin.js"></script>
  <script src="global/js/Base.js"></script>
  <script src="global/js/Config.js"></script>
  <script src="assets/js/Section/Menubar.js"></script>
  <script src="assets/js/Section/GridMenu.js"></script>
  <script src="assets/js/Section/Sidebar.js"></script>
  <script src="assets/js/Section/PageAside.js"></script>
  <script src="assets/js/Plugin/menu.js"></script>
  <script src="global/js/config/colors.js"></script>
  <script src="assets/js/config/tour.js"></script>
  <script>
  Config.set('assets', 'assets');
  </script>
  <!-- Page -->
  <script src="assets/js/Site.js"></script>
  <script src="global/js/Plugin/asscrollable.js"></script>
  <script src="global/js/Plugin/slidepanel.js"></script>
  <script src="global/js/Plugin/switchery.js"></script>
  <script src="global/js/Plugin/jquery-placeholder.js"></script>
  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });  

    (function() {
    $('.summary-errors').hide();

    $('#loginform').formValidation({
      framework: "bootstrap4",
      button: {
        selector: '#loginBtn',
        disabled: 'disabled'
      },
      icon: null,
      fields: {
        username: {
          validators: {
            notEmpty: {
              message: 'The username is required and cannot be empty'
            }
          }
        },
        password: {
          validators: {
            notEmpty: {
              message: 'The password is required and cannot be empty'
            }
          }
        }
      },
      err: {
        clazz: 'text-help'
      },
      row: {
        invalid: 'has-danger'
      }
    })

    .on('success.form.fv', function(e) {
      // Reset the message element when the form is valid
      $('.summary-errors').html('');
    })

    .on('err.field.fv', function(e, data) {
      // data.fv     --> The FormValidation instance
      // data.field  --> The field name
      // data.element --> The field element
      $('.summary-errors').show();

      // Get the messages of field
      var messages = data.fv.getMessages(data.element);

      // Remove the field messages if they're already available
      $('.summary-errors').find('li[data-field="' + data.field + '"]').remove();

      // Loop over the messages
      for (var i in messages) {
        // Create new 'li' element to show the message
        $('<li/>')
          .attr('data-field', data.field)
          .wrapInner(
            $('<a/>')
            .attr('href', 'javascript: void(0);')
            // .addClass('alert alert-danger alert-dismissible')
            .html(messages[i])
            .on('click', function(e) {
              // Focus on the invalid field
              data.element.focus();
            })
          ).appendTo('.summary-errors > ul');
      }

      // Hide the default message
      // $field.data('fv.messages') returns the default element containing the messages
      data.element
        .data('fv.messages')
        .find('.text-help[data-fv-for="' + data.field + '"]')
        .hide();
    })

    .on('success.field.fv', function(e, data) {
      // Remove the field messages
      $('.summary-errors > ul').find('li[data-field="' + data.field + '"]').remove();
      if ($('#loginform').data('formValidation').isValid()) {
        $('.summary-errors').hide();
      }
    });
  })();
  })(document, window, jQuery);
  </script>
</body>
</html>