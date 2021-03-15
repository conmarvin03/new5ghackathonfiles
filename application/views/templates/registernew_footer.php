









 </header>
<script type="text/javascript">
// Ajax post
$(document).ready(function() 
{
$("#teamname").blur(function() 
{
var teamname = $('#teamname').val();

  if(teamname!="")
  {
    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('Registernew/checkUser'); ?>",
    dataType: 'html',
    data: {teamname: teamname},
    success: function(res) 
    {
      if(res==1)
      {
      $("#msg").css({"color":"red"});
      $("#msg").html("This teamname already exists");
  $("#reg").attr("disabled", true);
      }
      else
      {
      $("#msg").css({"color":"green"});
      $("#msg").html("This teamname is available !"); 
        $("#reg").attr("disabled", false);
      }
      
    },
    error:function()
    {

    }
    });
  }
  else
  {

  }

});
});
</script>

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
document.getElementById("reg").disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('pwdstrngth').style.display = "block";
    document.getElementById('message').innerHTML = 'Password don\'t matched';

document.getElementById("reg").disabled = true;
  }
} 

function showteam() {
 if (document.getElementById('slcmm').value=='1')
 {

    document.getElementById('1m').style.display = 'block';
    document.getElementById('2m').style.display = 'none';
    document.getElementById('3m').style.display = 'none';
    document.getElementById('4m').style.display = 'none';
 }
if(document.getElementById('slcmm').value =="2")
{

    document.getElementById('1m').style.display = 'block';
    document.getElementById('2m').style.display = 'block';
    document.getElementById('3m').style.display = 'none';
    document.getElementById('4m').style.display = 'none';
}if(document.getElementById('slcmm').value =="3")
{

    document.getElementById('1m').style.display = 'block';
    document.getElementById('2m').style.display = 'block';
    document.getElementById('3m').style.display = 'block';
    document.getElementById('4m').style.display = 'none';
}if(document.getElementById('slcmm').value =="4")
{

    document.getElementById('1m').style.display = 'block';
    document.getElementById('2m').style.display = 'block';
    document.getElementById('3m').style.display = 'block';
    document.getElementById('4m').style.display = 'block';
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