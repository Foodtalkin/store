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
     .mt-l{
      margin-top: 20px;
     }
     .drinks{
      height: 24px;
      margin: 0 5px 0 9px;
     }
     .drinks-l{
      font-size: 20px !important;
     }
     input[type="checkbox"]:not(:checked), input[type="checkbox"]:checked {
          position: relative!important;
          left:0!important;
          content: '';
          width: 18px;
          height: 18px;
          z-index: 0;
          border: 2px solid #5a5a5a;
          border-radius: 1px;
          margin-top: 2px;
          transition: .2s;
      }
      
      </style>
    </head>

    <body>
      <div class="intro hide-on-med-and-up">
        <img src="../img/cover81.gif" class="responsive-img">
      </div>
      <div class="container">
        <div class="row hide-on-small-only">
          <div class="col s12 m12 l12">
            <div class="intro">
              <img src="../img/cover81.gif" class="responsive-img">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l12 center">
            <h3>#ContestAlert</h3>
            <p>#StayTrue and show us your Work-Crew </p>
            <h6>Upload a Boomerang video and show us just how cool your Work-Crew is and win a bottle of Ballantine's at the Out Of Office Night</h6>
            <p>Ballantine's Out Of Office Party <br>
              Monkey Bar, Vasant Kunj <br>
              Friday, 6th May, 7:30 pm</p>

                  <h6>To participate all you have to do is: <br>
1. Take a cool Boomerang video with your Office Friends <br>
2. Upload it on Instagram with the hashtag #StayTrue <br>
3. Fill up the form below to register your team</h6>

<p>3 of our favourite video's will win a Bottle of Ballantine's to come Out Of Office and party with us at Monkey Bar</p>
                 
          </div>
          <div class="col s12 m12 l12  red-c">
            <form id="frm">
              <div class="col s12 m12 l12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <label for="name" >Name *</label>
                    <input id="name" type="text" name="name" class="validate imp" value="<?php echo $user['name']; ?>">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="email">Email Address *</label>
                    <input id="email" type="email" name="email" class="validate imp" value="<?php echo $user['email']; ?>">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="phone">Phone number *</label>
                    <input id="phone" type="tel" class="validate imp" name="phone" minlength="10" maxlength="10" value="<?php echo $user['contact']; ?>">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="email" >Date of Birth *</label>
                    <input id="dob" type="date" class="datepicker" class="validate" name="dob" value="<?php echo $user['dob']; ?>">
                  </div>
                  <!-- <div class="col s12 m6 l6">
                    <label for="city">City *</label>
                    <select name="city" id="city" class="browser-default">
                      <option value="Delhi">Delhi</option>
                      <option value="Mumbai">Mumbai</option>
                      <option value="Pune">Pune</option>
                      <option value="Bangalore">Bangalore</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="other">Other</label>
                    <input type="text" id="other" class="validate" name="other">
                  </div> -->
                  <div class="col s12 m6 l6">
                    <label for="insta">Instagram Handle *</label>
                    <input type="text" class="validate imp" name="insta" id="insta" value="<?php echo $user['instagram_handle']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12 l12">
                    <h6>Register your Office Team</h6>
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="c_name" >Company Name *</label>
                    <input type="text" class="validate imp" name="c_name" id="c_name" value="">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="s_name1" >Member 1</label>
                    <input type="text" class="validate" name="s_name1" id="s_name1" value="">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="s_name2" >Member 2</label>
                    <input type="text" class="validate" name="s_name2" id="s_name2" value="">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="s_name3" >Member 3</label>
                    <input type="text" class="validate" name="s_name3" id="s_name3" value="">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="s_name4" >Member 4</label>
                    <input type="text" class="validate" name="s_name4" id="s_name4" value="">
                  </div>
                  <div class="col s12 m6 l6">
                    <label for="s_name5" >Member 5</label>
                    <input type="text" class="validate" name="s_name5" id="s_name5" value="">
                  </div>
                </div>
              </div>
              
              <div class="col s12 m12 l12">
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
        $('select').material_select();
          
          // $('#other').prop('disabled', true);
          // $('#city').on('change', function(event) {
          //   event.preventDefault();
          //   if($('#city').val() == "Other"){
          //     $('#other').prop('disabled', false);
          //     $('#other').focus();
          //     $('#other').addClass('imp');
          //   }else{
          //     $('#other').prop('disabled', true);
          //     $('#other').removeClass('imp');
          //   }
          // });
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
          
          
          if(validateForm() == true){
            //Serialize the form data
              //console.log("validatetrue");
              
              // var data = $('#frm').serializeArray();


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
              // if($('#city').val() == "Other"){
              //   var city = $('#other').val();
              // }else{
              //   var city = $('#city').val();
              // }
              // var meta = <?php echo json_encode($user['metadata']); ?>;


              // console.log(meta);
              // if(meta == null){
              //   var meta = {
              //     VegNonVeg: $('#veg-nv').val()
              //   }
              // }else{
              //   if($('#veg-nv').val() != ''){
              //     meta['VegNonVeg']= $('#veg-nv').val();
              //   }
              // }
              var response = {
                companyName : $('#c_name').val(),
                Team1 : $('#s_name1').val(),
                Team2 : $('#s_name2').val(),
                Team3 : $('#s_name3').val(),
                Team4 : $('#s_name4').val(),
                Team5 : $('#s_name5').val()
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
                     subscribe: 0};
              var toupdate = {name: name,
                     email: email,
                     contact: contact,
                     dob : dob,
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
