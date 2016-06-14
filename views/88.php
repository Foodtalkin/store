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
      .mainque label{
		display: inline;
		width: auto;
		font-size: 1.2em;
		    float: left;
      }

      .mainquecon{
			border: 1px solid #3c3c3c;
			padding: 20px 10px !important;
      }
      </style>
    </head>

    <body>
      <div class="intro hide-on-med-and-up">
        <img src="../img/cover88.jpg" class="responsive-img">
      </div>
      <div class="container">
        <div class="row hide-on-small-only">
          <div class="col s12 m12 l12">
            <div class="intro">
              <img src="../img/cover88.jpg" class="responsive-img">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 l12 center mt-l">
            <h5>IOrderFresh Do you?</h5>
            <p>#ContestAlert</p>
            <p>5 Lucky winners will get a chance to win a voucher worth Rs. 1500 from IOrderFresh to order some amazing products -delivered right to your doorstep.</p>
			
			<br>
			
          </div>
         
          
          <div class="col s12 m12 l12  red-c">
          <dov class="col s12 m12 l12 center">
            <h5>Participate Now:</h5>
          </dov>
            <form id="frm">
              <div class="col s12 m12 l12">
                <div class="col s12 m6 l6">
                  <label for="Question1"><h6>Tell us what's your favourite thing to order from IOrderFresh? *</h6></label>
                    <input id="Question1" type="text" name="Question1" class="validate imp" >
                </div>
                <div class="col s12 m12 l12">
                  <label for="Question2"><h6>What do you love most about the IOrderFresh service? *</h6></label>
                     	<p>
					      <input name="Question2" type="radio" id="test1" value="Delivered To Your Doorstep" checked />
					      <label for="test1">Delivered To Your Doorstep</label>
					    </p>
					    <p>
					      <input name="Question2" type="radio" id="test2" value="Convenience- Now everything is just a few clicks away" />
					      <label for="test2">Convenience- Now everything is just a few clicks away</label>
					    </p>
					    <p>
					      <input name="Question2" type="radio" id="test3" value="Super Cool product line- Naturals Ice Cream, Depaul's, Artisan Meats, L'Opera, etc "  />
					      <label for="test3">Super Cool product line- Naturals Ice Cream, Depaul's, Artisan Meats, L'Opera, etc </label>
					    </p>
					      <p>
					        <input name="Question2" type="radio" id="test4" value="Fresh, Preservative-free Fruit's & Vegetables" />
					        <label for="test4">Fresh, Preservative-free Fruit's & Vegetables</label>
					    </p>
                </div>
                <div class="col s12 m12 l12 mt-l center">
                	<h5><a href=" https://www.iorderfresh.com/">About IOrderFresh</a></h5>
					<p>IOrderFresh is an easy to use app and website where you can order everything from your fresh morning milk & artisan breads to freshly ripened {preservative free} fruits and vegetables and a wide variety of meats and seafood.</p>
					<p>All this goodness delivered straight to your doorstep, simply with a few clicks! </p>
					<p>But wait, the fun doesn’t stop here! Not just limited to groceries, through iOrderFresh, you get access to exclusive offerings like Natural Ice Cream, Cold-Pressed Juices, Organic Homemade Dips and Butter and you can enjoy them all at home!</p>
                	<h5>Contact Details:</h5>
                </div>
                <div class="col s12 m6 l6">
                  <label for="name" ><h6>Name *</h6></label>
                  <input id="name" type="text" name="name" class="validate imp" value="<?php echo $user['name']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="email"><h6>Email Address *</h6></label>
                  <input id="email" type="email" name="email" class="validate imp" value="<?php echo $user['email']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="phone"><h6>Phone number *</h6></label>
                  <input id="phone" type="tel" class="validate imp" name="phone" minlength="10" maxlength="10" value="<?php echo $user['contact']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="email" ><h6>Date of Birth *</h6></label>
                  <input id="dob" type="date" class="datepicker" class="validate" name="dob" value="<?php echo $user['dob']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="insta"><h6>Instagram Handle *</h6></label>
                  <input type="text" class="validate imp" name="insta" id="insta" value="<?php echo $user['instagram_handle']; ?>">
                </div>
                <div class="col s12 m6 l6">
                  <label for="address"><h6>Address *</h6></label>
                  <input type="text" class="validate imp" name="address" id="address" value="<?php echo $user['address']; ?>">
                </div>
                <!-- <div class="col s12 m6 l6">
                  <label for="city"><h6>City *</h6></label>
                  <select name="city" id="city" class="browser-default">
                    <option value="Delhi">Delhi</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bangalore">Bangalore</option>
                  </select>
                </div> -->
                <!-- 
                <div class="col s12 m6 l6">
                  <label for="other">Other</label>
                  <input type="text" id="other" class="validate" name="other">
                </div> -->
                
                <!-- 
                <div class="col s12 m6 l6">
                  <label for="veg-nv">Veg or Non-Veg? *</label>
                  <select name="veg-nv" id="veg-nv" class="browser-default" >
                    <option value="Veg"><span><img src="../img/drinks/veg.png" class="drinks " alt=""></span> Veg</option>
                    <option value="Non-veg"><span><img src="../img/drinks/nonveg.png" class="drinks " alt=""></span> Non-veg</option>
                  </select>
                </div> -->
                <!-- <div class="col s12 m6 l6">
                  <label for="response" >question *</label>
                  <input type="text" class="validate imp" name="response" id="response" value="">
                </div> -->
                
              </div>
              <div class="col s12 m12 l12">
                <!-- <h6 class="greyy-text">
                  ***All Participants must be above the legal drinking age of 25
                </h6> -->
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
              if($('#address').val() != ''){
                var address = $('#address').val();
              }else{
                var address = "<?php echo $user['address']; ?>";
              }
              // if($('#city').val() == "Other"){
              //   var city = $('#other').val();
              // }else{
              //   var city = $('#city').val();
              // }
              var meta = <?php echo json_encode($user['metadata']); ?>;


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
                ans1 : $('#Question1').val(),
                ans2 : data[1]['value']
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
                     city : 'Delhi NCR',
                     metadata : meta,
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
