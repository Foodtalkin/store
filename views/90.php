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
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
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
        margin: 10px 0;
        width: 97%
      }
      select{
        border: 2px solid #32004b;
        border-radius: 5px;
        padding: 5px;
        height: 3rem;
        margin: 10px 0;
        width: 100%;
        background-color: inherit;
      }
      .borderbox{
          margin-top: 20px;
          margin-bottom: 20px;
          width: 100%;
          padding: 10px;
          border: 3px solid #32004b;
          color: #32004b;
         
      }
      select:focus, input:focus{
        outline: none;
      }
      .mt20{
        margin-top: 20px;
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
        margin-top: 20px;
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
      </style>
    </head>

    <body>
      <div class="container">
        <div class="row mb0">
          <div class="col s12 m6 l6 center details">
            <img src="../img/cover73.jpg" alt="" class="responsive-img">
              <div class="col s12 m12 l12 padd20">
                <h3>The Sexiest Plate in Town</h3>
              <h5>#Bangalore it's time to get you Farzified</h5>
              <div class="borderbox">
                <h5>Farzi Cafe, UB City</h5>
                <h5>Friday, 24th June, 8pm onwards</h5>
              </div>
              <h6>Bold Favours & a Visual Delight! Bangalore get ready to get a taste of the Sexiest plate in town.</h6>
              <h6>The much loved Farzi Cafe is finally making it's way to Bangalore. <br>
  Food Talk India is looking to invite some awesome folks from Bangalore for a special peek at what Farzi has in store for the city.</h6>
              <h5>Fill up the form and stand a chance to get on the exclusive Food Talk Guest list!</h5>
              <h5>#GetOnTheList</h5>
              </div>
          </div>
          <div class="col s12 m6 l6">
            
            <div class="row">
              <div class="col s12 m11 l11 offset-m1 offset-l1">
                <h4 class="center highlights">Contact Details</h4>
                <form action="">
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Name *</label>
                    <input id="name" type="text" name="name" class="validate imp" value="<?php echo $user['name']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Email Address *</label>
                    <input id="email" type="email" name="email" class="validate imp" value="<?php echo $user['email']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Phone number *</label>
                    <input id="phone" type="tel" class="validate imp" name="phone" minlength="10" maxlength="10" value="<?php echo $user['contact']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Date of Birth *</label>
                    <input id="dob" type="date" class="datepicker" class="validate" name="dob" value="<?php echo $user['dob']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="">Instagram Handle *</label>
                    <input type="text" class="validate imp" name="insta" id="insta" value="<?php echo $user['instagram_handle']; ?>">
                  </div>
                  <div class="col s12 m12 l12 mt20">
                    <label for="city">City *</label>
                    <select name="city" id="city" class="browser-default">
                      <!-- <option value="Delhi">Delhi</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Pune">Pune</option> -->
                      <option value="Bangalore">Bangalore</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="col s12 m12 l12 mt20">
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
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script>
        $(document).ready(function() {
          $('select').material_select();

          var e_id = <?php echo $_SESSION['target']; ?>;
          var source = "<?php echo $_SESSION['source']; ?>";
          var id= <?php echo $user['id']; ?>;

          $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 90 // Creates a dropdown of 15 years to control year
          });

          $('#submit').on('click', function(event) {
            event.preventDefault();           
            if(validateForm() == true){               
                var data = $('#frm').serializeArray();
                // console.log(data[1]['value']);

                if($('#dob').val() != ''){
                  var dob = moment($('#dob').val()).format("YYYY-MM-DD");
                }else{
                  var dob = <?php if($user['dob'] == null){
                    echo "0000-00-00";
                  }else{
                    echo $user['dob'];
                  } ?>;
                }
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
                // console.log(insta);
                // if($('#address').val() != ''){
                //   var address = $('#address').val();
                // }else{
                //   var address = "<?php echo $user['address']; ?>";
                // }
                // if($('#city').val() == "Other"){
                //   var city = $('#other').val();
                // }else{
                //   var city = $('#city').val();
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
                // var response = {
                //   ans1 : $('#Question1').val()

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
                       subscribe: 0};
                var toupdate = {name: name,
                       email: email,
                       contact: contact,
                       dob : dob,
                       city : $('#city').val(),
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
        });
      </script>
    </body>
  </html>
