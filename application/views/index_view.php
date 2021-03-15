<?php $this->load->view('templates/index_header');?>

        <!-- Masthead-->
        <header class="mastheads">
            <div class="container">
                <br><br>
         <!--        <h1>COMPETITION</h1>

                <a class="btn btn-secondary btn-xl text-uppercase js-scroll-trigger"  href="<?=base_url()?>registernew">Join Now!</a> -->
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="font-color:0056BF;">Event DetailS</h2>
                    <h3 >The competition will focus on the use of 5G technologies in different sectors of the Philippine economy and society:</h3><br><br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3 text-center">5G for Society</h4>
                        <h5 class="my-3 text-center">Education, Health Care, and Livelihood</h5>
<br>
                        <p class="text-muted text-left">
                         o Improve patient health monitoring and remote consultations<br><br>
                            o Address mixed learning gaps and opportunities<br><br>
                            o Enhance ways of working of current livelihood such as farming, fisheries, masonry, etc.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-building fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">5G for Industries</h4>
                        <h5 class="my-3 text-center">Retail, Manufacturing, Logistics, E-Commerce</h5>
<br>
                        <p class="text-muted text-left">
                         o Increase efficiency of different sectors through wide scale AI automation and internet of things<br><br>
o Improve customer experience and satisfaction through personalization and real time customer insights
                        </p>  </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-city fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">5G for Smart Cities</h4>
                    <h6 class="my-3 text-center">Disaster risk management, Sustainability, Asset and Resource Management, Transportation</h6>

                        <p class="text-muted text-left" style="margin-top:50px;">
                        o Transmit and process real time information to solve traffic, urban planning, disaster risk, and other issues
                        </p>  </div>
                </div>
            </div>


</section>
    <section class="page-section bg-light" id="guidelines">

<h2 class="text-center">Guidelines for Qualified Entries/Teams</h2>
    <div class="row text-center"> <div class="col-sm-3">
            </div>

                <div class="col-md-6" style="">
<br>
<p class="my-3 text-left" style="color :red;">● The competition is open to all PH-based senior high school, college (undergraduate and graduate) students, alumni, faculty, and professionals all throughout the Philippines</p>
<p class="text-left">
● Participants should form a team consisting of 2-5 members</p>
<p class="my-3 text-left">
● A team can be a mix of students, faculty, alumni, and professionals but should include at least 1 currently enrolled student or currently employed faculty member, at any level, from the school</p>
<p class="my-3 text-left">
● Solutions should be registered under the challenge category it aims to address</p>
<p class="my-3 text-left">
● A team (of the same name) may participate in one or more of the three challenge categories mentioned</p>
<p class="my-3 text-left">
● But a team (of the same name) may submit only one entry in each challenge category</p>

<p class="my-3 text-left">
● The owner/s and/or creator/s of the innovation must be a member(s) of the team submitting the said innovations as an entry</p>
<p class="my-3 text-left">
● Employees of Animo Labs, Globe Telecom and other telco companies are not eligible to participate in this competition</p>
<p class="my-3 text-left">
● All team members are encouraged to attend the content (learning) workshops</p><p class="my-3 text-left">
● All accepted participants will be certified automatically to experience 5G technology or a simulation of it</p>
<p class="my-3 text-left">
● Globe Telecom and Animo Labs are not liable for IP infringement by entries</p>
<p class="my-3 text-left">
● Submission of entry acknowledges the right of Globe Telecom and Animo Labs to use the general idea of the entry for publication and promotional purposes</p>
   

    <p class="my-3 text-left" style="color:red;"><i>
*Red fonts are required</i></p>
               

             </div>
                 <div class="col-sm-3">
                 </div>
            </div>
                
        </section>

<!--        <section class="page-section" id="program">-->
<!--         <div class="text-left container">-->
<!--                    <h2 class="section-heading text-uppercase">Programs-->
<!--                    </h2>-->
<!--</div>-->


<!--<div class="container">-->
<!--    <table class="table"><thead> <tr>-->
<!--    <th scope="col">Theme</th>-->
    
<!--    <th scope="col">Date and Time</th>-->
<!--        <th scope="col">---</th>-->
<!--    </tr></thead><?php if($datas){ foreach($datas as $dats){?>   -->
<!--        <tbody>-->
<!--<tr>-->
<!--                    <td scope="row"><b><?php echo  $dats['pTitle']; ?> </b><p style="padding-left: 2%;"><?php echo  $dats['pDesc']; ?> </p></td>-->
                                                
<!--                                            </td>-->
<!--                                             <td scope="row"><?php echo  $dats['date']; ?> | <?php echo  $dats['time']; ?> </td>-->
                                          
                                           
                                            
<!--                                            <td scope="row">  <form action="<?php echo base_url('ViewEvent/')?>">                                         <input type="text" style="display: none;" name="pid" value="<?=$dats['programID']?>"> -->
                                      
<!--                                                <input type="submit" value="View Event" class="btn btn-secondary"></form>-->
<!--                                               </td>                                             </tr>-->
<!--                                        <?php } } ?>-->
<!--    </tbody>-->
<!--</table>-->

<!--</div>-->



<!--        </section>-->

   <!-- <section class="page-section bg-light" id="speakers">-->
   <!--<div class="container">-->
   <!--             <div class="text-center">-->
   <!--                 <h2 class="section-heading text-uppercase">Speakers-->
   <!--                 </h2>-->
   <!--                 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
   <!--             </div>-->
   <!--             <div class="row">-->
   <!--                 <div class="col-lg-4 col-sm-6 mb-4">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Threads</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Illustration</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--                 <div class="col-lg-4 col-sm-6 mb-4">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Explore</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Graphic Design</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--                 <div class="col-lg-4 col-sm-6 mb-4">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Finish</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Identity</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--                 <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Lines</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Branding</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--                 <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Southwest</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Website Design</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--                 <div class="col-lg-4 col-sm-6">-->
   <!--                     <div class="portfolio-item">-->
   <!--                         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">-->
                              
   <!--                             <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />-->
   <!--                         </a>-->
   <!--                         <div class="portfolio-caption">-->
   <!--                             <div class="portfolio-caption-heading">Window</div>-->
   <!--                             <div class="portfolio-caption-subheading text-muted">Photography</div>-->
   <!--                         </div>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!-- </section>-->

</div>

    </div>
</div>
</section>

 <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
