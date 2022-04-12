<?php 
  
  $loginVerification = $this->session->userdata('logged_in');

  if ($loginVerification) 
  {

      redirect("views/dashboard");

  }

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to PITA</title>
    <link rel="stylesheet" href="<?=base_url()?>design/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>design/css/all.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>design/css/animate.min.css" type="text/css">
    <script src="<?=base_url()?>design/js/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="<?=base_url()?>design/js/sweetalert2.all.js" type="text/javascript"></script>
    <style>
        body 
        {
            background-image: url('<?=base_url()?>design/images/bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
</style>
</head>
<body>
    <script type="text/javascript">
       Swal.fire({
                title: "Login",
                imageUrl: "<?=base_url()?>design/images/hcc-new.png",
                imageWidth: 150,
                imageHeight: 150,
                html:
                    "<div class='container'>"+
                        "<form method='POST' action='<?=site_url('database/login')?>'>"+
                        "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='text' placeholder='Username' class='input mb-3' name='username' required>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-envelope'></i>"+
                                "</span>"+
                            "</div>"+
                            "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='Password' placeholder='*****' class='input' name='password' required>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-lock'></i>"+
                                "</span>"+
                            "</div>"+
                        "</div>"+
                        "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='Submit' value='Login' class='button is-link is-medium'>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-lock'></i>"+
                                "</span>"+
                            "</div>"+
                        "</div>"+
                        "</form>"+
                    "</div>",
                    showConfirmButton: false,
                    showCancelButton: true,

                
            });
            document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
                });
            }

            });
    </script>
    <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="<?=site_url('views/index')?>">
          <img src="<?=base_url()?>bootstrap/images/logo_name-light.png" width="112" height="38">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a href="<?=site_url('views/index')?>" class="navbar-item">
            <strong>Home</strong>
          </a>

          <a href="#about" class="navbar-item">
            <strong>About</strong>
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
          </div>
        </div>
      </div>
    </nav>
    <script>
        function login()
        {
                Swal.fire({
                title: "Login",
                imageUrl: "<?=base_url()?>design/images/hcc-new.png",
                imageWidth: 150,
                imageHeight: 150,
                html:
                    "<div class='container'>"+
                        "<form method='POST' action='<?=site_url('database/login')?>'>"+
                        "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='text' placeholder='Username' class='input mb-3' name='username' required>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-envelope'></i>"+
                                "</span>"+
                            "</div>"+
                            "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='Password' placeholder='*****' class='input' name='password' required>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-lock'></i>"+
                                "</span>"+
                            "</div>"+
                        "</div>"+
                        "<div class='field'>"+
                            "<div class='control has-icons-left'>"+
                                "<input type='Submit' value='Login' class='button is-link is-medium'>"+
                                "<span class='icon is-small is-left'>"+
                                "<i class='fa fa-lock'></i>"+
                                "</span>"+
                            "</div>"+
                        "</div>"+
                        "</form>"+
                    "</div>",
                    showConfirmButton: false,
                    showCancelButton: true,

                
            });
            document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
                });
            }

            });
        }    
    </script>
    <div class="container is-max-widescreen is-multiline is-mobile">
        <div class="box is-full mt-6 mb-6 pb-6 pt-6 columns animate__animated animate__fadeInLeft" id="about">
            <div class="column is-three-quarters">
                <h1 style="font-size: 80px;" class="title is-1">PITA</h1>
                <h3 style="margin-top: -30px; font-size: 20px;">Learn your kids to code in an easy way</h3>
                <div class="content">
                    <p>paragraph</p>
                </div>
                <button onclick="login()" class="button is-link is-hoverable is-large is-outlined">Login &nbsp<i class="fa fa-arrow-circle-right"></i></button>
            </div>
            <div class="column is-one-quarter container box is-64x64">
                <img class="" src="<?=base_url()?>bootstrap/images/logo2.png" alt="">
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
         
        </p>
      </div>
    </footer>
</body>
</html>