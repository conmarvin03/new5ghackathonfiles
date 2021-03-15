<!DOCTYPE html>
<html lang="en">
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Globe-5G Competition</title>
   <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" />
        <style type="text/css">
          
.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 35px;
    height: 0;
    overflow: hidden;
}  
          
.video-containers {
    position: relative;
    padding-bottom: 100%;
    padding-top: 35px;
    height: 0;
    overflow: hidden;
}  
header.mastheads {
  padding-top: 10.5rem;
  padding-bottom: 6rem;
  text-align: center;
  color: #fff;
  background-image: url("../img/original.jfif");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
  height:2%;
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
.video-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
.programs
{
      height:800px;

}

        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../<?php base_url()?>"><img src="img/" alt="LOGO" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../<?php base_url()?>">Event Detail</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../<?php base_url()?>">Guidelines</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../<?php base_url()?>">Program</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../<?php base_url()?>">Speakers</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="mastheads">
            <div class="container">
          <?php
                	if($datas){ foreach($datas as $dats){?> 
                <div class="mastheads-heading text-uppercase"><?php echo  $dats['pTitle']; ?></div>

                <div class="mastheads-subheading"><?php echo  $dats['pDesc']; ?></div>
                <div class="mastheads-subheading"></div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" >
            <div class="container">
                <div class="text-left">
                	<h4><b>Speaker: </b><?php echo  $dats['pSpeaker']; ?></h4>
                	</div></div>
<br><br>
<div class="row">

	<div class="col-sm-1">
	</div>
	<div class="col-sm-7">
	
	<div class="video-container">
<iframe width="200" height="20" src="https://www.youtube.com/embed/<?php echo $dats['pLiveinfo'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
	<div class="col-sm-3">

	<div class="video-containers" style="vertical-align:bottom;">
	    <iframe width="405" height="400"  src="https://www.youtube.com/live_chat?v=<?php echo $dats['pLiveinfo'];?>&embed_domain=globe5ghackathon.animolabscompetitions.com" frameborder="0"></iframe>
</div>
</div>
<div class="col-sm-1">
	</div>
</div>
</div>





                                         <?php } } ?>
                                         
    </div>
</div>


</section>

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
