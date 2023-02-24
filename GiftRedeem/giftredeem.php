<?php
session_start ();
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>



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
            
            /**Script to Send Email and Redirect acorrding to dropdown Modal Selection*/
            
      $( '#sendMailForm' ).submit(function ( e ) {
                 
                 
        var data = {
             'name': $('#input-name').val(),
             'email': $('#input-email').val(),
             'contact': $('#input-phone').val(),
             'model':$('#input-lmodel').val(),
             'serialno':$('#input-sno').val(),
             'cused':$('#input-cused').val(),
             'dname':$('#input-dname').val(),
             'daddress':$('#input-daddress').val(),
             'datepur':$('#input-dpurchase').val()
             
          };
   
         $.ajax({ 
              url: 'https://bztran.com/mail.php', 
              data: data,
              type: 'POST',
               success: function (data) {
                   
             // alert(data.model);
              
              if(data.model === 'Model1')
             {
               window.location="https://shetalacamera.com/index.php?route=product/category&path=200";
             }
             else
             if(data.model === 'Model2')
             {
              window.location = "https://shetalacamera.com/index.php?route=product/category&path=201";
             }
            else
            if(data.model === 'Model3')
            {
             window.location = "https://shetalacamera.com/index.php?route=product/category&path=202";
            } 
         
            if(data.error){
                alert("error");
            }else{
                alert("Success");
            }
        }
            
         });
    
         e.preventDefault();
          
      });
});
        </script>
        
        


       
            <!--<form name="form" id="myform" method="post" enctype="multipart/form-data" class="form-horizontal">-->
        <form name="myform" action="https://bztran.com/productpage.php" method="post" class="form-horizontal">
                <fieldset>
          
      
        <legend>Registration</legend>
       
        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" value="" id="input-name" class="form-control" />
            </div>
        </div>

        <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">Enter you email address here...</label>
            <div class="col-sm-10">
              <input type="text" name="email" value="" id="input-email" class="form-control" />
            </div>
        </div>

            <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-phone">Mobile Number</label>
            <div class="col-sm-10">
              <input type="text" name="phone" value="" id="input-phone" class="form-control" required="true"/>
            </div>
          </div>
          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lmodel">Lens Model</label>
            <div class="col-sm-10">
            <select class="form-control" name="lmodel" id="input-lmodel" required>  
            <option value="Select">Select</option> 
            <option value="Model1">Model 1</option>  
            <option value="Model2">Model 2</option>  
            <option value="Model3">Model 3</option>  
            </select>
            </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-sno">Serial No</label>
            <div class="col-sm-10">
              <input type="text" name="sno" value="" id="input-sno" class="form-control" required="true"/>
            </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-cused">Camera Used</label>
            <div class="col-sm-10">
              <input type="text" name="cused" value="" id="input-cused" class="form-control" required="true"/>
            </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-dname">Dealer Name</label>
            <div class="col-sm-10">
              <input type="text" name="dname" value="" id="input-dname" class="form-control" required="true"/>
            </div>
          </div>

          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-daddress">Dealer Address</label>
            <div class="col-sm-10">
              <textarea name="daddress" rows="10" id="input-daddress" class="form-control"></textarea>
                          </div>
          </div>

          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-dpurchase">Date of Purchase</label>
            <div class="col-sm-10">
              <input type="date" name="dpurchase" value="" id="input-dpurchase" class="form-control" max="2023-02-20" onfocus="this.max=new Date().toISOString().split('T')[0]" required="true"/>
            </div>
          </div>
        
    </fieldset>


	 
       
        <div class="buttons">
          <div class="pull-right">
            <input class="btn btn-primary" type="submit" value="Next" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>

  

</body></html>
