<?php
// Initialize the session
session_start();
  

?>


<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact Us</title>
<base href="https://shetalacamera.com/" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>

<script src="catalog/view/javascript/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/ocquickview/ocquickview.js" type="text/javascript"></script>
<link href="catalog/view/theme/tt_bigone1/stylesheet/opentheme/ocquickview/css/ocquickview.css" rel="stylesheet" type="text/css" />
<script src="catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" />
<link href="catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css" rel="stylesheet" />
<script src="catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/hozmegamenu/custommenu.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/vermegamenu/ver_menu.js" type="text/javascript"></script>
<link href="catalog/view/theme/tt_bigone1/stylesheet/opentheme/vermegamenu/css/ocvermegamenu.css" rel="stylesheet" />
<link href="catalog/view/theme/tt_bigone1/stylesheet/opentheme/hozmegamenu/css/custommenu.css" rel="stylesheet" />
<link href="catalog/view/theme/tt_bigone1/stylesheet/opentheme/css/animate.css" rel="stylesheet" />
<link href="catalog/view/theme/tt_bigone1/stylesheet/custom-style.css" rel="stylesheet" />
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="catalog/view/theme/tt_bigone1/stylesheet/stylesheet.css" rel="stylesheet" />
<link href="catalog/view/theme/default/stylesheet/spricemrp.css" type="text/css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/opentheme/jquery.bpopup.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/opentheme/jquery.cookie.js" type="text/javascript"></script>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="https://shetalacamera.com/image/catalog/fav2.png" rel="icon" />
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
</head>


<style type="text/css">
.box{
    padding: 20px;
    display: none;
    margin-top: 20px;
    border: 1px solid #000;
}
.red{ background: #ff0000; }
.green{ background: #00ff00; }
.blue{ background: #0000ff; }
</style>



<!--JavaSCript to get the dropdown Selection and redirect accordingly -->
<script type="text/javascript">
    function OnChangeModel()
  {

    var e = document.getElementById('input-lmodel').value;
   /* var name = document.getElementById('input-name').value;
  var mobile = document.getElementById('input-mobile').value;
  var email = document.getElementById('input-email').value;
  var sub = "Gift Redeem";
  var dataString = "name="+name+"mobile="+mobile+"email="+email+"subject="+sub;
	
	alert(dataString);*/

	
  
    alert("You selected" +" "+ e + " Lens Model");

    if(e == 'Model1')
    {
        document.myform.action = "https://shetalacamera.com/index.php?route=product/category&path=200";
       
    }
    else
    if(e == 'Model2')
    {
        document.myform.action = "https://shetalacamera.com/index.php?route=product/category&path=201";
    }
    else
    if(e == 'Model3')
    {
        document.myform.action = "https://shetalacamera.com/index.php?route=product/category&path=202";
    }  
    
   
 
	
	   /* $headers = "From: " . $name . "<". $email .">\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";*/
        
        
	/*$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	
	if(mail($toEmail, $subject, $final_msg, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}*/


return true;

}

function onMail()
{
  var name = document.getElementById('input-name').value;
  var email = document.getElementById('input-email').value;
  var mobile = document.getElementById('input-phone').value;
  var modal = document.getElementById('input-lmodel').value;
  
  var sub = "Gift Redeem";
  var dataString = "name="+name+"&mobile="+mobile+"$email="+email+"&subject="+sub+"&modal="+modal;
	
	alert(dataString);

  $.ajax({
    type: "POST",
    url: "mail.php",
    data: dataString,
        success: function(data){
           alert( "Data Saved: " + data );
               // some suff there
        }
        error: function (error) {
        alert("failure");
    }
    })
}

    </Script>

        <style type="text/css">
		.alert{position:static !important;}
        .out_of_stock{
            color: #FFF;
            word-wrap: break-word;
            float: left;
            font-size: 12px;
            line-height: 22px;
            text-align: center;
            position: absolute;
            left: 24px;
            top: 10px;
            background: #e3503e;
            padding: 0px 7px;
            border-radius: 5px;
        }
        </style>
        <script type="text/javascript">
        function smsalert_notify(product_id){
            $('#smsalert_notify').modal('show');
            $('#smsalert_notify #product_id').val(product_id);
        }
        $(document).ready(function(e){
            $('#smsalert_notify #smsalert-submit').click(function(e){
                $.ajax({
                    url: 'index.php?route=extension/module/smsalert/add_notify_request',
                    type: 'post',
                    dataType: 'json',
                    data: $("#smsalert_notify form").serialize(),
                    beforeSend: function() {
                        $('#smsalert_notify #smsalert-submit').button('loading');
                    },
                    complete: function() {
                        $('#smsalert_notify #smsalert-submit').button('reset');
                    },
                    success: function(json) {
                        $('.alert-dismissible').remove();

                        if (json['error']) {
                            $('#smsalert_notify form').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            $('#smsalert_notify form').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
                            $('#smsalert_notify input').val('');
                            $('#smsalert_notify textarea').val('');
                            setTimeout(function(e){
                                $('#smsalert_notify').modal('hide');
                            },2000);
                        }
                    }
                });
            });

            $('input[type="radio"]').click(function(){
    if($(this).attr("value")=="product1"){
        $(".box").not(".red").hide();
        $(".red").show();
    }
    if($(this).attr("value")=="product2"){
        $(".box").not(".green").hide();
        $(".green").show();
    }
    if($(this).attr("value")=="product3"){
        $(".box").not(".blue").hide();
        $(".blue").show();
    }
});
        });
        </script>
        
       <div>
<?php
if(isset($_GET['msg']))
{

$msg = $_GET['msg'];


if($msg == 'err')
  { 
     	  echo '<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> Sorry !! Retry!!
</div>';

   }
   
else if($msg == 'done')
   {
       
        echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
       <strong>Success!</strong> Thank You!!Your Product will be delivered soon.
        
    </div>
</div> '; 
		 
       
       
   
   }
   
   else
   {
         echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Email Sending Failed</strong> 
        
    </div>
</div> '; 
   }

}
?>
       </div> 
  

       
        
      </div>
    </div>
</div>



</body></html>
