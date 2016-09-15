<?php
   session_start();
    
   $user =(array) $_SESSION['USER']['result'];
    
    $metadata = (array) $user['metadata'];
    //var_dump($user);
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
     <!--  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
      @font-face {
        font-family: verlag;
        src: url('../font/verlag/Verlag-Book.ttf');
       }
       @font-face {
        font-family: reis;
        src: url('../font/verlag/REIS-Regular.otf') format('otf');
       }
      body{
        background-color: #e3f8f7;
        color: #404040;
        font-family: 'verlag';
      }
      .brand-heading {
        font-family:'reis','verlag';
      }
      .fork-img{
        display: inline;
        width: auto;
        height: 20px;
        margin-bottom: -2px;
      }
      h3{
        font-size: 24px;
        line-height: 2.212em;
      }
      h4{
        font-size: 22px;
      }
      h5{
        font-size: 18px;
        line-height: 1.5em;
      }
      h6{
        font-size: 16px;
        line-height: 1.5em;
        margin: 20px 0;
      }
      label{
        font-size: 16px;
        color: #000;
      }
      input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea{
        border: 2px solid #005b7f ;
        border-radius: 5px;
        padding: 5px;
        height: 2rem;
        margin: 7px 0;
        width: 97%
      }
      select{
        border: 2px solid #005b7f ;
        border-radius: 5px;
        padding: 5px;
        height: 3rem;
        margin: 7px 0;
        width: 100%;
        background-color: inherit;
      }
      .borderbox{
          margin-top: 20px;
          margin-bottom: 20px;
          width: 100%;
          padding: 10px 30px;
          border: 3px solid #005b7f ;
          color: #005b7f ;
          text-align: left;
      }
      .borderbox ul li{
        list-style-type: circle;
      }
      select:focus, input:focus{
        outline: none;
      }
      .mt20{
        margin-top: 20px;
      }
      .mt10{
        margin-top: 10px;
      }
      .mb0{
        margin-bottom: 0;
      }
      .full-btn{
        width: 100%;
        padding: 5px;
        height: 46px;
        border: 2px solid #005b7f ;
        border-radius: 5px;
        color: #005b7f ;
        background-color: inherit;
        margin-top: 15px;
        margin-bottom: 10px;
      }
      .full-btn:hover, .full-btn:active{
        background-color: #005b7f ;
        color: #fff;
      }
      .details{
        min-height: 100vh !important;
        background-color: #fff;
        padding: 0 !important;
      }
      .padd20{
        padding: 0 20px !important;
      }
      .highlights{
        color: #005b7f ;
      }
      .padd-20{
        padding: 20px !important;
      }
      /*.form{
        height: 100vh;
        overflow-y: scroll;
      }*/
      </style>
    </head>

    <body>
      <div class="container">
        <div class="row mb0">
          <div class="col s12 m6 l6 center details">
            <img src="../img/cover102.jpg" alt="" class="responsive-img">
              <div class="col s12 m12 l12 padd20">
              
                <h3 class="brand-heading">Food Talk India Presents #WWIM14 <img class="fork-img" src="../img/fork.png"/> in partnership with Instagram</h3>
                <h5>AntiSocial, HKV | Time: 3pm- 6pm | Designed by Rani Pink</h5>
                <h5>It's time for the official #WWIM14 and this years its all about Food - in case you haven't been following their awesome blog it's the "World Wide Insta Meet No.14"!</h5>
				        <h4>Food Talk India presents - The Dessert Potluck</h4>
                <h5>Time to Meet and Greet with your favourite Sugary Treats </h5>
                <div class="borderbox">
                  <h4 class="center">Sign up and stand a chance to get invited! Be part of the Tastiest day of the year.</h4>
                <!-- <h5>RSVP and get on the guest list</h5> -->
                </div>
              </div>
              
            </div>
          <div class="col s12 m6 l6 form">
            
            <div class="row mb0">
              <div class="col s12 m11 l11 offset-m1 offset-l1">
                
                <form action="" id="frm">
                  <h4 class="center highlights">Contact Details</h4>
                  <!-- <div class="col s12 m12 l12 mt20">
                    <label for="">Food Talk APP Username </label>
                    <input id="Question1" type="text" name="Question1" class="validate" value="">
                  </div> -->
                  <!-- <h4 class="center highlights">Contact Details</h4> -->
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Name *</label>
                    <input id="name" type="text" name="name" class="validate imp namevalid" value="<?php echo $user['name']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Instagram Handle *</label>
                    <input type="text" class="validate imp" name="insta" id="insta" value="<?php echo $user['instagram_handle']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Email Address *</label>
                    <input id="email" type="email" name="email" class="validate imp" value="<?php echo $user['email']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Phone number *</label>
                    <input id="phone" type="tel" class="validate imp" name="phone" minlength="10" maxlength="10" value="<?php echo $user['contact']; ?>">
                  </div>
                  <!-- <div class="col s12 m12 l12 mt20">
                    <label for="city">City *</label>
                    <select name="city" id="city" class="browser-default">
                      <option value="Delhi">Delhi</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Pune">Pune</option>
                      <option value="Bangalore">Bangalore</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>-->
                   
                  <div class="col s12 m12 l12 mt20">
                    <div class="col s12">
                      <label for="">Not on the Food Talk App? Download now</label>
                    </div>
                    <div class="col s6 l6 m6 padd-20">
                      <a href="https://ad.apps.fm/jmXM2toyVlrwIvmv8VZDkPE7og6fuV2oOMeOQdRqrE125Vg6lhH50uF5NCjHXTL9ndN7N82s3TL60zJZOK6POUBYEUDp6GpykR5a_XD8NGKkdSPWlsFH6ajCbGh5uIRv" target="_blank"><img class="responsive-img" src="../img/app.png" alt="dish reviews, food reviews, restaurant reviews india, food reviews site india"/></a>
                    </div>
                    <div class="col s6 l6 m6 padd-20">
                      <a href="https://ad.apps.fm/9MpxPO99wKQgBEPRqzDo815KLoEjTszcQMJsV6-2VnHFDLXitVHB6BlL95nuoNYfYvrzlFgS_zzkrHYzgzi8dsJvx-g4JaFUTDh_-g1MzffBHpUDVnJfCIp-45MBCvZW0EBbbxphpu_GHoB5DVgsXw" target="_blank"><img class="responsive-img" src="../img/android.png" alt="dish reviews, food reviews, restaurant reviews india, dish reviews site india"/></a>
                    </div>
                  </div>
                  <div class="col s12 m12 l12 mt10">
                    <button class="waves-effect waves-light btn full-btn" id="submit">Register Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
      <script>
        $(document).ready(function() {

          $('select').material_select();
          $('.carousel').carousel();
          
          var e_id = <?php echo $_SESSION['target']; ?>;
          var source = "<?php echo $_SESSION['source']; ?>";
          var id= <?php echo $user['id']; ?>;

          // $('.datepicker').pickadate({
          //   selectMonths: true, // Creates a dropdown to control month
          //   selectYears: 90 // Creates a dropdown of 15 years to control year
          // });

          $('#submit').on('click', function(event) {
            event.preventDefault();           
            if(validateForm() == true && namevalidate() == true){               
                var data = $('#frm').serializeArray();
                // console.log(data[1]['value']);
                
                
                // console.log(dob);
                if($('#name').val() != ''){
                  var name = $('#name').val();
                }else{
                  var name = "<?php echo $user['name']; ?>";
                }
                // console.log(name);
                if($('#email').val() != ''){
                  var email = $('#email').val();
                }else{
                  var email = "<?php echo $user['email']; ?>";
                }
                // console.log(email);
                if($('#phone').val() != ''){
                  var contact = $('#phone').val();
                }else{
                  var contact = "<?php echo $user['contact']; ?>";
                }
                // console.log(contact);
                if($('#insta').val() != ''){
                  var insta = $('#insta').val();
                }else{
                  var insta = "<?php echo $user['instagram_handle']; ?>";
                }
                
                // // console.log(meta);
                // if(meta == null){
                //   var meta = {
                //     FavCocktail: $('#Question').val()
                //   }
                // }else{
                //   if($('#Question').val() != ''){
                //     meta['FavCocktail']= $('#Question').val();
                //   }
                // }
                // var response = {
                //   companyname : $('#name2').val(),
                //   bossname : $('#name3').val(),
                //   age : $('#Question2').val(),
                //   howcool_boss : $('#Question1').val()

                // }
                // console.log(response);
                var URL_INSERT = "http://api.foodtalk.in/user/"+id+"/rsvp";
                var URL_UPDATE = "http://api.foodtalk.in/user/"+id;
                
                // if($('#test6').prop('checked') == true){
                //   var sub = 1;
                // }else{
                //   var sub = 0;
                // }

                var toinsertdata = {events_id: e_id,
                       email: email,
                       contact: contact,
                       source: source,
                       payment_id: '',
                       // response: response,
                       subscribe: 1};
                var toupdate = {name: name,
                       email: email,
                       contact: contact,
                       // metadata : meta,
                       // dob : dob,
                       // city : $('#city').val(),
                       instagram_handle: insta
                       };
                
                //console.log(URL_INSERT);                           
                
                //insert

                 $.ajax({
                   url: "createsession.php",
                   type: 'POST',
                   dataType: 'json',
                   data: {URL_INSERT: URL_INSERT,
                          URL_UPDATE: URL_UPDATE,
                          toinsertdata: toinsertdata,
                          toupdate: toupdate,
                          venue : ''}
                 })
                 .done(function(response) {
                   if(response == 1){
                    $(location).attr('href', 'thanks.php');
                   }
                   
                 })
                 .fail(function(response) {
                   console.log(response);
                   $('#submit').attr('disabled',false);
                 })
                 .always(function() {
                  console.log("complete");
                  //$(location).attr('href', 'http://imojo.in/47vvf9');
                });

                }else{
                  $('#submit').attr('disabled',false);
                }
          });

          function validateForm() {
              var allIsOk = true;
              //Check if empty of not
              $('#frm').find( '.imp' ).each(function () {
                  if ( ! $(this).val() ) { 
                      $(this).addClass('borderR');
                      $(this).focus();
                      allIsOk = false;
                  }
              });
              return allIsOk
          };

          function namevalidate() {
            var allok = true;
            var regex = /^[a-zA-Z ]*$/;
            $('#frm').find('.namevalid').each(function (){
                if( ! regex.test($(this).val())){
                  $(this).addClass('borderR');
                  $(this).focus();
                  allok = false;
                }
            });
            return allok
          }
        });
      </script>
    </body>
  </html>
