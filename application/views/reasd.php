<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="" />
        <title>Globe-5G Competition</title>
   <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
     
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
            
header.mastheads {
  padding-top: 10.5rem;
  padding-bottom: 6rem;
  text-align: center;
  color: #fff;
  background-image: url("img/original.jfif");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
background-repeat:no-repeat;
background-size:contain;
background-position:center;background-repeat:no-repeat;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
background-position:center;
}
header.mastheads .mastheads-subheading {
  font-size: 1.5rem;
  font-style: italic;
  line-height: 1.5rem;
  margin-bottom: 25px;
  font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
header.mastheads .mastheads-heading {
  font-size: 3.25rem;
  font-weight: 700;
  line-height: 3.25rem;
  margin-bottom: 2rem;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

@media (min-width: 768px) {
  header.mastheads {
    padding-top: 17rem;
    padding-bottom: 12.5rem;
  }
  header.mastheads .mastheads-subheading {
    font-size: 2.25rem;
    font-style: italic;
    line-height: 2.25rem;
    margin-bottom: 2rem;
  }
  header.mastheads .mastheads-heading {
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 4.5rem;
    margin-bottom: 4rem;
  }
}
.glyphicon-remove {
  color: red;
}

.glyphicon-ok {
  color: green;
}
.programs
{
      height:800px;

}

        </style>
    </head>

    <body id="page-top"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
        <script>
   $(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 100) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 100).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(100-words);
    }
  });
});

     $(document).ready(function() {
  $("#word_counts").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 100) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 100).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_counts').text(words);
      $('#word_lefts').text(100-words);
    }
  });
});
function ValidatePassword() {
  /*Array of rules and the information target*/
  var rules = [{
      Pattern: "[A-Z]",
      Target: "UpperCase"
    },
    {
      Pattern: "[a-z]",
      Target: "LowerCase"
    },
    {
      Pattern: "[0-9]",
      Target: "Numbers"
    },
    {
      Pattern: "[!@@#$%^&*]",
      Target: "Symbols"
    }
  ];

  //Just grab the password once
  var password = $(this).val();

  /*Length Check, add and remove class could be chained*/
  /*I've left them seperate here so you can see what is going on */
  /*Note the Ternary operators ? : to select the classes*/
  $("#Length").removeClass(password.length > 7 ? "glyphicon-remove" : "glyphicon-ok");
  $("#Length").addClass(password.length > 7 ? "glyphicon-ok" : "glyphicon-remove");
  
  /*Iterate our remaining rules. The logic is the same as for Length*/
  for (var i = 0; i < rules.length; i++) {

    $("#" + rules[i].Target).removeClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-remove" : "glyphicon-ok"); 
    $("#" + rules[i].Target).addClass(new RegExp(rules[i].Pattern).test(password) ? "glyphicon-ok" : "glyphicon-remove");
      }
    }

    /*Bind our event to key up for the field. It doesn't matter if it's delete or not*/
    $(document).ready(function() {
      $("#NewPassword").on('keyup', ValidatePassword)
    });
   
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (String(txtValue.toUpperCase())===String(filter)) {
          tr[i].style.display = "";
          document.getElementById("reg").disabled = true;
      } else {
        tr[i].style.display = "none";
          document.getElementById("reg").disabled = false;
      }
    }       
  }
}
</script>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?=base_url()?>"><img src="img/" alt="LOGO" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Event Detail</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Guidelines</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Program</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=base_url()?>">Speakers</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?=base_url()?>login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

                                    

        <section class="page-section" id="contact">

<div class="container">
          <?php
if($this->session->flashdata('success_msg'))
{
?>

<div class="alert alert-success">
   <h1> <?php echo $this->session->flashdata('success_msg'); ?></h1>

<?php } ?>
</div>

<?php
if($this->session->flashdata('error_msg'))
{
?>
<div class="alert alert-danger">
<h3>    <?php echo $this->session->flashdata('error_msg'); ?></h3>
<?php } ?>
</div>
</div>
            <div class="container" >
                <div class="text-left">
                  <br>                  <br>                  <br>
                    <h2 class="section-heading text-uppercase">Registration Form</h2>
                    <h3 class="section-subheading text-light">Please input needed information.</h3>
                </div>
<div class="row" style="margin-top: -5%;">
  <div class="col-sm-6">
  <table id="myTable" style=" position: absolute; bottom: 40%; ">  
                                       <?php

                                           
                                              foreach ($userdata as $row) {
                    // for loop para sa pagkuha ng data
                                            //
                                     ?>   
                                            <tr style="display: none;">
                                                
                                            <td style="color:red; " ><h5><?php echo  $row['teamname']; ?></h5></td> <td  style="color:red;"><h5>&nbsp;is already taken!</h5></td>                          
<?php }?>
</tr>
</table>    
</div><div class="col-sm-6" style="">
<div class="container">

<div class="alert alert-secondary">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
 <div id='message'></div>
<div id="Length" class="glyphicon glyphicon-remove">Must be at least 8 charcters</div>
<div id="UpperCase" class="glyphicon glyphicon-remove">Must have atleast 1 upper case character</div>
<div id="LowerCase" class="glyphicon glyphicon-remove">Must have atleast 1 lower case character</div>
<div id="Numbers" class="glyphicon glyphicon-remove">Must have atleast 1 numeric character</div>
<div id="Symbols" class="glyphicon glyphicon-remove">Must have atleast 1 special character</div>

</div>
</div>
<br></div>

</div>    
             
                                                <form action="<?php echo base_url('registernew/register/')?>" method="POST">  
    <div class="row" style="margin-top: -6%;">
      <div class="col-sm-6">
   <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" required name="teamname" placeholder="Team Name"><br>
       </div>
       <div class="col-sm-6">
       </div>
     </div>


<div class="form-group has-feedback">

   <div class="row">
    <div class="col-sm-6" style=" ">

  <input class="form-control" id="NewPassword" placeholder="New Password" type="password"  onkeyup='check();' required  name="password" >
    <br>
    </div>
 <div class="col-sm-6" style="">
   
  <input type="password" name="confirm_password" required id="confirm_password" placeholder="Password"  class="form-control" onkeyup='check();' /> 


    </div>
  </div>






          <h3 class="section-heading text-uppercase"> Team Members</h3>
          <h3 class="section-subheading text-light">Team Member No.1</h3>
<div class="row" style="margin-top: -7%;">
    <div class="col-sm-3" style="padding-top: 2%;">
   <input type="text" class="form-control" required  name="tmfn1" placeholder="First Name">
    </div>
    <div class="col-sm-3" style="padding-top: 2%;">
           
   <input type="text" class="form-control" required name="tmln1" placeholder="Last Name">
    </div>

    <div class="col-sm-3" style="padding-top: 2%;">
   <input type="email" class="form-control" required name="tme1" placeholder="Email">
    </div>

    <div class="col-sm-3" style="padding-top: 2%;">
   <input type="tel" class="form-control" required name="tme1" placeholder="Contact Number"  pattern="[0-9]{11}" required>
    </div>
   </div>


             <h3 class="section-subheading text-light">Team Member No.2</h3>
<div class="row" style="margin-top: -7%;">
    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="text" class="form-control" required name="tmfn2" placeholder="First Name">
    </div>
    <div class="col-sm-4" style="padding-top: 2%;">
           
   <input type="text" class="form-control" required name="tmln2" placeholder="Last Name">
    </div>

    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="email" class="form-control" required  name="tme2" placeholder="Email">
    </div>
   </div>




          <h3 class="section-subheading text-light">Team Member No.3</h3>
<div class="row" style="margin-top: -7%;">
    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="text" class="form-control" required name="tmfn3" placeholder="First Name">
    </div>
    <div class="col-sm-4" style="padding-top: 2%;">
           
   <input type="text" class="form-control" required name="tmln3" placeholder="Last Name">
    </div>

    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="email" class="form-control" required name="tme3" placeholder="Email">
    </div>
   </div>

          <h3 class="section-subheading text-light">Team Member No.4</h3>
<div class="row" style="margin-top: -7%;">
    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="text" class="form-control" required name="tmfn4" placeholder="First Name">
    </div>
    <div class="col-sm-4" style="padding-top: 2%;">
           
   <input type="text" class="form-control" required name="tmln4" placeholder="Last Name">
    </div>

    <div class="col-sm-4" style="padding-top: 2%;">
   <input type="email" class="form-control" required name="tme4" placeholder="Email">
    </div>
   </div>
 <h3 class="section-subheading text-light" style="padding-top:2%;"> Why do you want to join the competition? (Max. 100 words). <br>Total word Count : <span id="display_count">0</span> words.</h3>


<textarea  id="word_count" class="form-control" name='quest1' rows="4" style="margin-top: -4%;"></textarea>
<br>
          <h3 class="section-subheading text-light"> Where have you heard about the competition?</h3>
<div class="row" style="margin-top: -5%;">
<div class="col-sm-2">
 <p class="text-light"><input type="radio" name="reason"   onclick="EnableDisableTextBox()" value="Social Media"  >Social Media</p>

</div><div class="col-sm-2">
    <p class="text-light"><input type="radio"  onclick="EnableDisableTextBox()" name="reason" value="Email">Email</p>

</div><div class="col-sm-2">
    <p class="text-light">
    <input type="radio" name="reason"   onclick="EnableDisableTextBox()" value="Poster">Poster</p>

</div><div class="col-sm-2">
    <p class="text-light">
    <input type="radio" name="reason"  onclick="EnableDisableTextBox()" value="Website">Website</p>

</div><div class="col-sm-3">
    <p class="text-light">
<input type="radio" name="reason" id="chck" onclick="EnableDisableTextBox()"  value="">Others: <input type="text" id="chckothers" name="reason" disabled="disabled" /></p>
</div>
</div>

 <h3 class="section-subheading text-light" style="padding-top:2%;"> Briefly discuss your team. (Max. 100 words). <br>Total word Count : <span id="display_counts">0</span> words.</h3>


<textarea n id="word_counts" class="form-control"  name="quest2" rows="4" style="margin-top: -4%;"></textarea>
<br>
            <input type="submit" id="reg"  class="btn btn-primary btn-lg text-uppercase" style="float:right;"  value="Register"></input>

</form>











 </header>

    <script type="text/javascript">
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chck");
        var txtPassportNumber = document.getElementById("chckothers");
        txtPassportNumber.disabled = chkYes.checked ? false : true;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        }
    }
var check = function() {
  if (document.getElementById('NewPassword').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password don\'t matched';
  }
}

</script>

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