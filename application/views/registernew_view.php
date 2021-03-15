
<?php $this->load->view('templates/registernew_header');?>

                                    

        <section class="page-section" id="services">

<div class="container">
          <?php
if($this->session->flashdata('success_msg'))
{
?>

<div class="alert alert-success">
   <h5> <?php echo $this->session->flashdata('success_msg'); ?></h5>

<?php } ?>
</div>

<?php
if($this->session->flashdata('error_msg'))
{
?>
<div class="alert alert-danger">
<h5>    <?php echo $this->session->flashdata('error_msg'); ?></h5>
<?php } ?>
</div>
</div>
            <div class="container" >
                <div class="text-left">
                  <br>                  <br>                  <br>
                    <h2 >Registration Form</h2>
                    <h5>Please input needed information below. Avoid using curse/malicious words when filling up the form.</h5>
                </div>
                <hr>
<div class="row">
  <div class="col-sm-6">
<!--   <table id="myTable" style=" position: absolute; bottom: 50%; ">  
                                       <?php

                                           
                                              foreach ($userdata as $row) {
                    // for loop para sa pagkuha ng data
                                            //
                                     ?>   
                                            <tr style="display: none;">
                                                
                                            <td style="color:red; " ><h5><?php echo  $row['teamname']; ?></h5></td> <td  style="color:red;"><h5>&nbsp;is already taken!</h5></td>                          
<?php }?>
</tr>
</table>  -->   
</div><div class="col-sm-6" style="">
<div class="container">
<br>
<div>
<span class="glyphicon glyphicon-lock form-control-feedback"></span>

</div>
</div>
</div>

</div>    
             
                                                <form action="<?php echo base_url('registernew/register/')?>" method="POST">  
  <p>Don't use special characters such as <b>[^()/=><\]</b> on teamname and password.</p>  <div class="row">
 
      <div class="col-sm-6">
   <input type="text" class="form-control" id="teamname" onkeyup="myFunction()" pattern="[^()/=><\][\\\x22,;|]+" required name="teamname" placeholder="Team Name">
            <label id="msg"></label></div>
       <div class="col-sm-6">
       </div>
     </div>






    
    




<div class="form-group has-feedback">

   <div class="row">
    <div class="col-sm-6" style=" ">

  <input class="form-control" id="NewPassword" placeholder="Team Password" pattern="[^()/=><\][\\\x22,;|]+" type="password"  onkeyup='check();' required  name="password" >
    <div style="display: none;" id="pwdstrngth"><b>Password Strength: </b><div class="figure section-heading text-uppercase" id="strength_human">Poor</div>   
</div>
 <label id='message'></label>
    </div>
 <div class="col-sm-6" style="">
   
  <input type="password" name="confirm_password" required id="confirm_password" placeholder="Confirm Team Password"  class="form-control" onkeyup='check();' /> 


    </div>
  </div>
<br>
         
          <h3 class="section-heading text-uppercase">Members</h3>
              <h5>One member must have a valid email for verification and must be connected to school/organization. Please input his/her credentials below.</h5>
              <hr>
<div class="row">
    <div class="col-sm-4" >
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" required  name="tmfn1" placeholder="First Name">
   <br>

   <input type="tel" class="form-control" required name="contactno1" placeholder="Contact Number"  pattern="[0-9]{11}" required>
    </div>
    <div class="col-sm-4">
           
   <input type="text" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" class="form-control" required name="tmln1" placeholder="Last Name">
   <br>
   <select class="form-control" name="pos" required><option value="">Select Position</option><option>Student</option><option>Faculty</option><option>Alumni</option><option>Professional</option></select>
    </div>

    <div class="col-sm-4" >
   <input type="email" class="form-control" required name="tme1" placeholder="Email">
   <br>

   <input type="name" class="form-control" required name="org" placeholder="Organization/School">
    </div>

   </div>
   <br>

<select class="form-control" style="width:20%;" onchange="showteam()" id="slcmm" required><option value="">Add Members?</option> <option>1</option><option>2</option><option>3</option><option>4</option></select>

<div id="1m" style="display: none;">
             <p>Team Member No.1</p>
<div class="row" >
    <div class="col-sm-3">
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" required  name="tmfn2" placeholder="First Name">
    </div>
    <div class="col-sm-3">
           
   <input type="text" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" class="form-control" required name="tmln2" placeholder="Last Name">
    </div>

    <div class="col-sm-3">
   <input type="email" class="form-control" required  name="tme2" placeholder="Email">
    </div> 
    <div class="col-sm-3">
   <input type="tel" class="form-control"  required name="contactno2" placeholder="Contact Number"  pattern="[0-9]{11}" required>
    </div>
   </div>
</div>
<br>
<div id="2m"  style="display: none;">
           
             <p>Team Member No.2</p>
<div class="row">
    <div class="col-sm-3">
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))"  name="tmfn3" placeholder="First Name">
    </div>
    <div class="col-sm-3">
           
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" name="tmln3" placeholder="Last Name">
    </div>

    <div class="col-sm-3">
   <input type="email" class="form-control"   name="tme3" placeholder="Email">
    </div> 
    <div class="col-sm-3" >
   <input type="tel" class="form-control"  name="contactno3" placeholder="Contact Number"  pattern="[0-9]{11}">
    </div>
   </div>
 </div>
<br>
<div id="3m"  style="display: none;">

             <p>Team Member No.3</p>
<div class="row" >
    <div class="col-sm-3">
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" name="tmfn4" placeholder="First Name">
    </div>
    <div class="col-sm-3" >
           
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" name="tmln4" placeholder="Last Name">
    </div>

    <div class="col-sm-3">
   <input type="email" class="form-control"   name="tme4" placeholder="Email">
    </div> 
    <div class="col-sm-3">
   <input type="tel" class="form-control"  name="contactno4" placeholder="Contact Number"  pattern="[0-9]{11}">
    </div>
   </div>
 </div>
<br>
<div id="4m"  style="display: none;">
             <p>Team Member No.4</p>
<div class="row">
    <div class="col-sm-3">
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" name="tmfn5" placeholder="First Name">
    </div>
    <div class="col-sm-3">
           
   <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" name="tmln5" placeholder="Last Name">
    </div>

    <div class="col-sm-3">
   <input type="email" class="form-control"   name="tme5" placeholder="Email">
    </div> 
    <div class="col-sm-3">
   <input type="tel" class="form-control"  name="contactno5" placeholder="Contact Number"  pattern="[0-9]{11}">
    </div>
   </div>
</div>

 <h5> Why do you want to join the competition? (Max. 50 words). <br>Total word Count : <span id="display_count">0</span> words.</h5>


<textarea  id="word_count" class="form-control" name='quest1' rows="4"></textarea>
<br>
          <h5> Where have you heard about the competition?</h5>
<div class="row">
<div class="col-sm-2">
 <p class=""><input type="radio" name="reason"   onclick="EnableDisableTextBox()" value="Social Media"  >Social Media</p>

</div><div class="col-sm-2">
    <p class=""><input type="radio"  onclick="EnableDisableTextBox()" name="reason" value="Email">Email</p>

</div><div class="col-sm-2">
    <p class="">
    <input type="radio" name="reason"   onclick="EnableDisableTextBox()" value="Poster">Poster</p>

</div><div class="col-sm-2">
    <p class="">
    <input type="radio" name="reason"  onclick="EnableDisableTextBox()" value="Website">Website</p>

</div><div class="col-sm-2">
    <p class="">
    <input type="radio" name="reason"  onclick="EnableDisableTextBox()" value="School">School</p>

</div><div class="col-sm-2">
    <p class="">
<input type="radio" name="reason" id="chck" onclick="EnableDisableTextBox()"  value="">Others: <input type="text" style="width: 100%;" id="chckothers" name="reason" disabled="disabled" /></p>
</div>
</div>

 <h5> Briefly discuss your team. (Max. 50 words). <br>Total word Count : <span id="display_counts">0</span> words.</h5>


<textarea  id="word_counts" class="form-control"  name="quest2" rows="4"></textarea>
<br>

<h5><br><input type="checkbox" required name="checkbox" value="check" id="agree" /> I have read the<a href="<?=base_url()?>privacypolicy" target="_blank"><u>Data Privacy Policy</u></a>.</h5>
            <input type="submit" id="reg"  class="btn btn-primary btn-lg text-uppercase" style="float:right;"  value="Register"></input>


</form>

<?php $this->load->view('templates/registernew_footer');?>

