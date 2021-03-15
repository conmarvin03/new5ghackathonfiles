<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="" />
        <title>Competition Registration Form</title>
   <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
     
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
                  @font-face
            {
                font-family: elliot;
                src:url('assets/fonts/FS Elliot Pro-Thin.otf') format("opentype"); 
            } 
            @font-face
            {
                font-family: elliots;
                src:url('assets/fonts/FS Elliot Pro-Regular.otf') format("opentype"); 
            }
           h1, h2, h3, h4, h5, h6 ,p,td,th,div,ul,a,nav,body,i,input
            {
                font-family:elliot;
            }
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

    if (words > 50) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 50).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(50-words);
    }
  });
});

     $(document).ready(function() {
  $("#word_counts").on('keyup', function() {
    var words = 0;

    if ((this.value.match(/\S+/g)) != null) {
      words = this.value.match(/\S+/g).length;
    }

    if (words > 50) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 50).join(" ");
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
<script type="text/javascript">
  function scorePassword(pass) {
    var score = 0;
    if (!pass)
        return score;

    // award every unique letter until 5 repetitions
    var letters = new Object();
    for (var i=0; i<pass.length; i++) {
        letters[pass[i]] = (letters[pass[i]] || 0) + 1;
        score += 5.0 / letters[pass[i]];
    }

    // bonus points for mixing it up
    var variations = {
        digits: /\d/.test(pass),
        lower: /[a-z]/.test(pass),
        upper: /[A-Z]/.test(pass),
        nonWords: /\W/.test(pass),
    }

    variationCount = 0;
    for (var check in variations) {
        variationCount += (variations[check] == true) ? 1 : 0;
    }
    score += (variationCount - 1) * 10;

    return parseInt(score);
}

function checkPassStrength(pass) {
    var score = scorePassword(pass);
    if (score > 80)
        return "strong";
    if (score > 60)
        return "good";
    if (score >= 30)
        return "weak"; 
      if (score < 30)
        return "poor";

    return "";
}

$(document).ready(function() {
    $("#NewPassword").on("keypress keyup keydown", function() {
        var pass = $(this).val();
        $("#strength_human").text(checkPassStrength(pass));
        $("#strength_score").text(scorePassword(pass));
    });
});


</script>

<!-- <script>function checkStrength(password){
  let meterBar = $("#meter").find("#meter-bar");
  let meterStatus = $("#meter-text").find("#meter-status");
  let strength = 0;
  if(password.length < 6){
     meterBar.css({
      "background":"#6B778D",
      "width":"10%"
    });
    meterStatus.css("color","#6B778D");
    meterStatus.text("too short") ;
  }
  if(password.length > 7) strength += 1;
  if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
  if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
  if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
  if(strength < 2){
    meterBar.css({
      "background":"#ff0000",
      "width":"25%"
    });
    meterStatus.css("color","#ff0000");
    meterStatus.text("weak");
  }else if(strength == 2){
    meterBar.css({
      "background":"#00BCD4",
      "width":"75%"
    });
    meterStatus.css("color","#00BCD4");
    meterStatus.text("good");
  }else{
    meterBar.css({
      "background":"#4CAF50",
      "width":"100%"
    });
    meterStatus.css("color","#4CAF50");
    meterStatus.text("strong");
  }
}

$("#input-password").on("keyup",function(){
 checkStrength($(this).val());
});
</script>
 -->

 
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