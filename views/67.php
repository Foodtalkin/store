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
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        .p-b{
        margin-bottom: 20px;
      }
      .mar{
        margin-top: 64px !important;
      }
      .red-c{
        /*background-color: rgb(210,35,42) !important;*/
        color: #3c3c3c;
        font-family: roboto;
        font-weight: 400;
      }
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
      }
      .red-c label{
        font-size: 15px;
        color: #3c3c3c;
        position: relative !important;
        
      }
      .red-c input,.red-c select{
        border: 1px solid #CECACA;
        margin-top: 10px;
        padding: 2px 5px;
      }
      .red-c textarea{
        height: 100px;
        border: 0px;
        border: 1px solid #CECACA;
      }

     .btn{
      background-color: #3e2723 !important;
      margin-top: 30px;
      float: right;
     }
     .padd{
      margin: 20px 0;
      color: #3c3c3c;
     }
     
     .intro img{
      width: 100%;
      height: auto;
     }
     .spac{
      margin-bottom: 30px;
      font-family: titillium3;
     }
     
     .main12{
      color: #3c3c3c;
     }
     
    h6{
      font-size: 18.5px;
      line-height: 1.8rem;
      color: #000;
    }
    h6 , h5{
      color : #3c3c3c !important;
    }
    .fa{
      font-size: 18px;
    }
    .radio{
      padding-left: 50px;
    }
     #counter{
          margin: 10px;
    padding: 5px 0px;
    /*background-color: #e0e0e0;*/
    font-size: 28px;
    color: #12532B !important;
     }
     .inline{
      display: inline;
     }
     .inline h6{
      display: inline;
     }
     .fa{
      color: #3c3c3c !important;
      font-size: 21px;
     }
     
        .list li{
          list-style: circle;
        }
        .mt-mid{
          margin-top: 30px;
        }
        .mb-mid{
          margin-bottom: 30px;
        }
        .borderR{
      border-color: red !important;
     }
      </style>
    </head>

    <body>
      <div class="intro hide-on-med-and-up">
        <img src="../img/cover67.jpg" class="responsive-img">
      </div>
      <div class="container">
        <div class="row hide-on-small-only">
          <div class="col s12 m12 l12">
            <div class="intro">
              <img src="../img/cover67.jpg" class="responsive-img">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l12 center">
            <h4 class="">Win a Jameson Bottle #GoIrish <h4>
          </div>
          <div class="col s12 m10 offset-m1 l10 offset-l1 center">
            <p>#ContestAlert Come party with #Jameson at DLF CyberHub</p>
            <p>Here's your chance to win a bottle of Jameson Irish Whiskey & join in the festivities at 2 of the coolest joints at Cyber Hub! </p>
            <p>4 Lucky winners will each win a bottle of Jameson at one of the 2 venues and a chance to party with their lads tomorrow night at the St Paddy's Festival.</p>
            <p>Let Jameson & Food Talk India show you how to #GoIrish and celebrate the Craziest Fu*#ing Festival ever!</p>
          </div>
          <div class="col s12 m10 l10 offset-l1 offset-m1 red-c">
            <form id="frm">
              <div class="col s12 m10 l10 offset-l1 offset-m1">
                <div class="col s12 m12 l12 center mt-mid">
                  <h6 class="mb-mid">Leave Your Details to Win</h6>
                </div>
                <div class="col s12 m6 l6">
                  <label for="name" data-error="wrong" data-success="">Name *</label>
                  <input id="name" type="text" name="name" class="validate imp" value="<?php echo $user['name']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="email" data-error="wrong email" data-success="">Email Address *</label>
                  <input id="email" type="email" name="email" class="validate imp" value="<?php echo $user['email']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="phone" data-error="invalid Number" data-success="">Phone number *</label>
                  <input id="phone" type="tel" class="validate imp" name="phone" minlength="10" maxlength="10" value="<?php echo $user['contact']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="insta" data-error="wrong" data-success="">Instagram handle *</label>
                  <input id="insta" type="text" name="insta" class="validate imp" value="<?php echo $user['instagram_handle']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="email" data-error="wrong" data-success="">Date of Birth *</label>
                  <input type="date" class="datepicker" class="validate" name="dob" value="<?php echo $user['dob']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="insta" data-error="wrong" data-success="">Pincode *</label>
                  <input id="insta" type="number" name="insta" class="validate imp" value="<?php echo $metadata['pincode']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="guest1" data-error="wrong" data-success="">What's your favourite way to drink Jameson?*</label>
                  <input id="guest1" type="text" name="guest1" class="validate imp" >
                </div>
                <!--
                <div class="col s12 m6 l6">
                  <label for="guest2" data-error="wrong" data-success="">Name of your Guest 2 *</label>
                  <input id="guest2" type="text" name="guest2" class="validate imp" >
                </div>
                <div class="col s12 m6 l6">
                  <label for="guest3" data-error="wrong" data-success="">Name of your Guest 3 *</label>
                  <input id="guest3" type="text" name="guest3" class="validate imp" >
                </div> -->
              </div>
              <div class="col s12 m10 offset-m1 l10 offset-l1 ">
                <p>
                  <input type="checkbox" id="test6" checked="checked" name="sub"/>
                  <label for="test6">Yes, Subscribe me to your mailer list</label>
                </p>
              </div>
              <div class="col s12 m10 l10 offset-l1 offset-m1">
                <button class="waves-effect waves-light btn right" id="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/moment.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script>
      $(document).ready(function() {
        var e_id = <?php echo $_SESSION['target']; ?>;
        
        var source = "<?php echo $_SESSION['source']; ?>";
        var id= <?php echo $user['id']; ?>;
        
        
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 90 // Creates a dropdown of 15 years to control year
        });
        //console.log("ready");
        $('#submit').on('click', function(event) {
          event.preventDefault();
          console.log("submit");
          $(this).attr("disabled", 'disabled');
          if(validateForm() == true){
            //Serialize the form data
              //console.log("validatetrue");
              
              var data = $('#frm').serializeArray();

              if(data[4]['value'] != ''){
                var dob = moment(data[4]['value']).format("YYYY-MM-DD");
              }else{
                var dob = <?php if($user['dob'] == null){
                  echo "0000-00-00";
                }else{
                  echo $user['dob'];
                } ?>;
              }
              var meta = <?php echo json_encode($user['metadata']); ?>;
              //console.log(meta);
              if(meta == null){
                var meta = {
                  pincode: data[5]['value']
                }
              }else{
                if(data[5]['value'] != ''){
                  meta['pincode']= data[5]['value'];
                }
              }
              if(data[0]['value'] != ''){
                var name = data[0]['value'];
              }else{
                var name = "<?php echo $user['name']; ?>";
              }
              if(data[1]['value'] != ''){
                var email = data[1]['value'];
              }else{
                var email = "<?php echo $user['email']; ?>";
              }
              if(data[2]['value'] != ''){
                var contact = data[2]['value'];
              }else{
                var contact = "<?php echo $user['contact']; ?>";
              }
              if(data[3]['value'] != ''){
                var instagram_handle = data[3]['value'];
              }else{
                var instagram_handle = "<?php echo $user['instagram_handle']; ?>";
              }
              // if(data[6]['value'] != ''){
              //   var address = data[6]['value'];
              // }else{
              //   var address = "<?php echo $user['address']; ?>";
              // }
              
              
              var response = {
                JamsonDrink : data[6]['value']
              }
              console.log(data);
              var URL_INSERT = "http://api.foodtalkindia.com/user/"+id+"/rsvp";
              var URL_UPDATE = "http://api.foodtalkindia.com/user/"+id;
              if($('#test6').prop('checked') == true){
                var sub = 1;
              }else{
                var sub = 0;
              }

              var toinsertdata = {events_id: e_id,
                     email: email,
                     contact: contact,
                     source: source,
                     payment_id: '',
                     response:response,
                     subscribe: sub};
              var toupdate = {name: name,
                     email: email,
                     contact: contact,
                     instagram_handle: instagram_handle,
                      metadata: meta,
                      dob : dob};
              
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
        //SET UP THE URLS FOR BOTH INSERT AND UPDATE QUERIES
        //function to validate form, Don't call this function anywhere, it will validate the form when it's submitted
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
