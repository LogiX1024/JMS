<?php $this->load->view('partial/header'); ?>
</head>

<body class="gray-bg" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">JmS</h1>
        </div>
        <h3>Welcome to JmS</h3>

        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.</p>

        <p>Login in. To see it in action.</p>

        <form method="POST" id="login" class="m-t" role="form"
              action="<?php echo base_url('index.php'); ?>/users/login">
            <div class="form-group">
                <input name="email_address" id="email_address" type="email" class="form-control"
                       placeholder="E-Mail Address" required="">
            </div>
            <div class="form-group">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password"
                       required="">
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" value="remember"/> <label> Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#">
                <small>Forgot password?</small>
            </a>
        </form>
        <p class="m-t">
            <small>Inspinia web app framework base on Bootstrap 3 &copy; 2014</small>
        </p>
    </div>
</div>

<?php $this->load->view('partial/common_js'); ?>

<script>
    $(document).ready(function () {
        $("#login").validate({
            rules: {
                email_address: {
                    required: true,
                    minlength: 3,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 3
                }
            }
        });
    });
</script>

</body>
</html>

git ekata pull karanna
