<?php
    session_start();
    
    $user =(array) $_SESSION['USER']['result'];
    //var_dump($user);
?>

<!DOCTYPE html>
  <html>
    <head>
       <meta charset="UTF-8"/>
      <title>Niche | Delhi Food Events| Mumbai Food Events | Food Talk India</title>
      <meta name="description" content="Food talk India organize each events like hand-crafted and customized it with a special theme, an innovative concept and an elaborate menu.">
      <meta name="author" content="Food Talk India">
      <meta name="keyword" content="food talk india, food groups delhi, restaurant reviews, food events delhi, cocktail events, blind tasting, blind folded dinner, best brunches in delhi, food community delhi, delhi food events, mumbai food events, restaurant marketing, cocktail making workshops, largest food community india, cooking classes delhi, delhifood, sharing, restaurant, zomato, restaurant delhi, near, discover, times city, events, blind tasting, street, burrp, yelp, delhi event, mumbai event"> 
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"/>
      <link rel="shortcut icon" href="../img/favicon.png" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
      background-color: #ED6D22 !important;
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
    input[type=text], input[type=passput[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {height: 2rem !important}
     
      </style>
    </head>
    <body>
      <div class="container">
      	<div class="row padd ">
          <div class="intro">
            <img src="../img/nichecover.jpg" class="responsive-img">
          </div>
         <div class="col s12 m10 offset-m1 l10 offset-l1 center-align main12">
           <h4>#NewInTown</h4>
           <h6>Delhi's heart just got skipped a beat with {Niche}, a new restaurant in CP that just raised the pulse (pun intended!) Promising a world class cocktail menu and food with the most whimsical twist, they have definitely delivered. Because Food Talkers do it first, we're calling 60 Food talkers to find their niche at {Niche}</h6>
              <div class="col l12 m12 s12" style="font-size:13px">
                <div class="col l4 m4 s6 center-align">
                   <i class="fa fa-calendar-o"></i>
                  <p class="center">Wednesday, 10th Feb`16</p>
                </div>
                <div class="col l4 m4 s6 center-align">
                   <i class="fa fa-clock-o"></i>
                  <p class="center">8 PM onwards<br></p>
                </div>
                <div class="col l4 m4 s12 center-align">
                   <i class="fa fa-map-marker"></i>
                  <p class="center">Niche, CP</p>
                </div>
              </div>
         </div> 
          <div class="col s12 m12 l12">
            <div class="red-c ">
              <h6 class="center">Fill out the form below and await an invite for you and your +1</h6>
              <form action="#" method="post" id="frm" >
                  <div class="section"></div>
                   <div class="row">
                      <div class="col s12 m12 l12">
                        <div class="col s12 m6 l6">
                          <label for="name">Name</label>
                          <input type="text" name="name" id="name" class="validate" value="<?php echo $user['name']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="validate" id="email" value="<?php echo $user['email']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="phone">Phone Number</label>
                          <input type="tel" name="phone" class="validate" id="phone" value="<?php echo $user['contact']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="validate" id="address" value="<?php echo $user['address']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="dob">Date Of Birth</label>
                          <input type="date" name="dob" id="dob" class="validate" value="<?php echo $user['dob']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="insta">Instagram Handle</label>
                          <input type="text" name="insta" id="insta" class="validate" value="<?php echo $user['instagram_handle']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="plus1">Name of your +1</label>
                          <input type="text" name="plus1" id="plus1" class="validate" required>
                        </div>
                      </div>
                      <div class="col s12 m6 l6">
                         	<div class="input-field col s12 m6 l6">
			                  <input type="hidden" class="validate" id="eid" name="e_id" value="<?php echo $_SESSION['target']; ?>">
			                </div>
			                <div class="input-field col s12 m6 l6">
			                  <input type="hidden" class="validate" id="uid" name="u_id" value="<?php echo $user['id']; ?>">
			                </div>
			                <div class="input-field col s12 m6 l6">
			                  <input type="hidden" class="validate" id="sid" name="s_id" value="<?php echo $_SESSION['source']; ?>">
			                </div>
                      </div>
                    </div>
                 
                  <div class="col s12 m12 l12">
                    <button class="btn waves-effect waves-light" type="button" id="submit">Submit
                    </button>
                  </div>
              </form>
            </div>
           <div id="modal2" class="modal">
      <div class="modal-content">
        <h4>Oops!</h4>
        <p>Something Went Wrong</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div>
          </div>
        </div>
      </div>
  

  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      
      <script type="text/javascript">
       $(document).ready(function() {
        //console.log("ready");
        $('#submit').on('click', function(event) {
          event.preventDefault();
          //console.log("submit");
          $(this).attr("disabled", 'disabled');
          if(validateForm()== true){
            //Serialize the form data
              //console.log("validatetrue");
              var id= $('#uid').val();
              var eid = $('#eid').val();
              var sid = $('#sid').val();
              var data = $('#frm').serializeArray();
              console.log(data);
              var responsedata = {
              	'plusone': data[6]['value'],
                'source' : sid
              };
              var URL_INSERT = "http://api.foodtalkindia.com/user/"+id+"/participation";
              var URL_UPDATE = "http://api.foodtalkindia.com/user/"+id;
              console.log(responsedata);
              var update = false;
              var insert = false;
              //put
              $.ajax({
                url: URL_UPDATE,
                type: 'PUT',
              contentType: 'application/json',
              dataType: 'json',
                data: JSON.stringify({name: data[0]['value'],
                    email: data[1]['value'],
                     contact: data[2]['value'],
                    address: data[3]['value'],
                	dob: data[4]['value'],
                	instagram_handle: data[5]['value']})
              })
              .done(function(response) {
                //console.log(response.message);
                if(response.message == "Success"){
                  update = true;
                  if(insert == true){
                    $(location).attr('href', '../thanks.php');
                  }
                }
              })
              .fail(function(response) {
                console.log(response);
                $('#submit').attr('disabled',false);
              });


              //insert
              $.ajax({
                url: URL_INSERT,
                type: 'POST',
              contentType: 'application/json',
              dataType: 'json',
                data: JSON.stringify({events_id: eid,
                    email: data[1]['value'],
                    contact: data[2]['value'],
                    source: sid,
                    response: responsedata})
              })
              .done(function(response) {
                //console.log(response.message);
                if(response.message == "Success"){
                  insert = true;
                  if(update == true){
                    $(location).attr('href', '../thanks.php');
                  }
                }
              })
              .fail(function(response) {
                console.log(response);
                $('#submit').attr('disabled',false);
              });


              }else{
                $('#submit').attr('disabled',false);
              }
        });
        //SET UP THE URLS FOR BOTH INSERT AND UPDATE QUERIES
        //function to validate form, Don't call this function anywhere, it will validate the form when it's submitted
        function validateForm() {
            var allIsOk = true;
            // Check if empty of not
            $('#frm').find( 'input[type!="hidden"]' ).each(function () {
                if ( ! $(this).val() ) { 
                    $(this).addClass('borderR').focus();
                    allIsOk = false;
                }
            });
            return allIsOk
        };
      });
      </script>
    </body>
  </html>