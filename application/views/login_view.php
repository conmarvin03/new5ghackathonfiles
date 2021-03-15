<?php $this->load->view('templates/header');?>

        <!-- Masthead-->
        <section class="page-section" id="section" style="height: 969px;">
           
            <div class="container">
        <div>
               
        </div>

       
                <div class="text-center">
                  <br>                



  <br>                  <br>
                    <h2 class="section-heading text-uppercase">Login</h2>
                    <h3>Use your team name and password.</h3>
                </div>

                         
<div class="row"><div class="col-sm-3"></div><div class="col-sm-6">
      <form class="login-form" method="POST" action="<?= site_url('login')?>">
           <?php session_destroy();  ?>
                          <?php echo validation_errors();
                          ?>
                          <div id="1step">
          <input  name="username" pattern="[^()/=><\][\\\x22,;|]+" class="form-control" placeholder="Username" required="required">
       <br>
          <input type="password" pattern="[^()/=><\][\\\x22,;|]+" name="password" class="form-control" placeholder="Password" required="required" >
    
       <br>            <u><a href="<?=base_url()?>registernew">
          Register Now!</a></u>

            <input type="submit" class="btn btn-secondary btn-md text-uppercase" style="float:right;"  value="Sign In"></input>
          </div>
       </div>
     </div>
      </div>
    </form>
            </div>
        <!-- Services-->
   </div>
 </header>
</body>
</body>
      <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>