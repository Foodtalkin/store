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
        font-family: myFirstFont;
        src: url(verlag/Verlag-Book.woff);
      }
      body{
        background-color: #f2e9fc;
        color: #404040;
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
      }
      input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea{
        border: 2px solid #32004b;
        border-radius: 5px;
        padding: 5px;
        height: 2rem;
        margin: 7px 0;
        width: 97%
      }
      select{
        border: 2px solid #32004b;
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
          border: 3px solid #32004b;
          color: #32004b;
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
        border: 2px solid #32004b;
        border-radius: 5px;
        color: #32004b;
        background-color: inherit;
        margin-top: 15px;
        margin-bottom: 10px;
      }
      .full-btn:hover, .full-btn:active{
        background-color: #32004b;
        color: #fff;
      }
      .details{
        min-height: 100vh;
        background-color: #fff;
        padding: 0 !important;
      }
      .padd20{
        padding: 0 20px !important;
      }
      .highlights{
        color: #32004b;
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
            <img src="../img/cover101.jpg" alt="" class="responsive-img">
              <div class="col s12 m12 l12 padd20">
                <h3>Boss by Day, Buddy by Night</h3>
                <h5>Date: Friday, 16th September'16</br>Time: 7:00 PM Onwards</h5>
                <h5>A​​ Boss, A Mentor, A Buddy- not everyone is lucky to have someone this awesome in their life.
So come and let us spoil your boss with a VIP Treatment. 

                </br>Nominate your #AwesomeBoss for a VIP treatment - and we will host you a table of 6</h5>
                <!-- <h5>We are throwing a #Dessert Party and everyone's invited! </h5> -->
                <!--  <h5>Sunday, 31st July | 6PM Onwards | Perch, Vasant Vihar</h5> -->
                <div class="borderbox">
                  <h4 class="center">Let's get #OutOfOffice with an #AwesomeBoss</h4>
                  
                </div>
                <h5>​Ballantine's Out Of Office<br>Feat, Vir Das' Alien Chutney</h5>
                <!-- <h5>Chi Asian Cookhouse is now open in Mall of India, Noida</h5> -->
              
                <!-- <h5>RSVP and get on the guest list</h5> -->
              </div>
              
          </div>
          <div class="col s12 m6 l6 form">
            
            <div class="row mb0">
              <div class="col s12 m11 l11 offset-m1 offset-l1">
                
                <form action="" id="frm">
                  <h4 class="center highlights">Nominate your Boss here:</h4>
                  <!-- <div class="col s12 m12 l12 mt20">
                    <label for="">Food Talk APP Username </label>
                    <input id="Question1" type="text" name="Question1" class="validate" value="">
                  </div> -->
                  <!-- <h4 class="center highlights">Contact Details</h4> -->
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Your Name *</label>
                    <input id="name" type="text" name="name" class="validate imp" value="<?php echo $user['name']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Company Name *</label>
                    <input id="name2" type="text" name="name2" class="validate imp" value="<?php echo $user['name2']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Name your #AwesomeBoss *</label>
                    <input id="name3" type="text" name="name3" class="validate imp" value="<?php echo $user['name3']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Tell us how awesome he/she is- on a scale of One to Fun *</label>
                    <input id="Question1" type="text" name="Question1" class="validate imp" value="<?php echo $user['name4']; ?>">
                  </div>
                  
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Your Age? *</label>
                    <input id="Question2" type="text" name="Question2" class="validate imp" value="<?php echo $user['name5']; ?>">
                  </div>
                  <h4 class="center highlights">Contact Details</h4>
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
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Instagram Handle *</label>
                    <input type="text" class="validate imp" name="insta" id="insta" value="<?php echo $user['instagram_handle']; ?>">
                  </div> -->
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Not on the Food Talk App? Download now</label>
                    <div class="col s6 l6 m6 padd-20">
                      <a href="https://ad.apps.fm/jmXM2toyVlrwIvmv8VZDkPE7og6fuV2oOMeOQdRqrE125Vg6lhH50uF5NCjHXTL9ndN7N82s3TL60zJZOK6POUBYEUDp6GpykR5a_XD8NGKkdSPWlsFH6ajCbGh5uIRv" target="_blank"><img class="responsive-img" src="../img/app.png" alt="dish reviews, food reviews, restaurant reviews india, food reviews site india"/></a>
                    </div>
                    <div class="col s6 l6 m6 padd-20">
                      <a href="https://ad.apps.fm/9MpxPO99wKQgBEPRqzDo815KLoEjTszcQMJsV6-2VnHFDLXitVHB6BlL95nuoNYfYvrzlFgS_zzkrHYzgzi8dsJvx-g4JaFUTDh_-g1MzffBHpUDVnJfCIp-45MBCvZW0EBbbxphpu_GHoB5DVgsXw" target="_blank"><img class="responsive-img" src="../img/android.png" alt="dish reviews, food reviews, restaurant reviews india, dish reviews site india"/></a>
                    </div>
                  </div>
                  <div class="col s12 m12 l12 mt10">
                    <button class="waves-effect waves-light btn full-btn" id="submit">Submit</button>
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
            if(validateForm() == true){               
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
                // if($('#insta').val() != ''){
                //   var insta = $('#insta').val();
                // }else{
                //   var insta = "<?php echo $user['instagram_handle']; ?>";
                // }
                // console.log(insta);
                // if($('#address').val() != ''){
                //   var address = $('#address').val();
                // }else{
                //   var address = "<?php echo $user['address']; ?>";
                // }
                
                // var meta = <?php echo json_encode($user['metadata']); ?>;


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
                var response = {
                  companyname : $('#name2').val(),
                  bossname : $('#name3').val(),
                  age : $('#Question2').val(),
                  howcool_boss : $('#Question1').val()

                }
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
                       response: response,
                       subscribe: 1};
                var toupdate = {name: name,
                       email: email,
                       contact: contact,
                       // metadata : meta,
                       // dob : dob,
                       // city : $('#city').val(),
                       // instagram_handle: insta
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
        });
      </script>
    </body>
  </html>
