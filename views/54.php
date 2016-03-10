<?php
    session_start();
    
    $user =(array) $_SESSION['USER']['result'];
    //var_dump($user);
?>

<!DOCTYPE html>
  <html>
    <head>
       <meta charset="UTF-8"/>
      <title>Ek Bar | Delhi Food Events| Mumbai Food Events | Food Talk India</title>
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
      background-color: #12532B !important;
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
      color: #12532B !important;
      font-size: 21px;
     }
     .borderR{
      border-color: red !important;
     }
    </style>
    </head>
    <body>
      <div class="container">
        <div class="row padd ">
          <div class="intro">
            <img src="../img/cover54.jpg" class="responsive-img">
          </div>
         <div class="col s12 m10 offset-m1 l10 offset-l1 center-align main12">
           <h4>Ek Bar in Ireland</h4>
           <h6>Picklebacks, Irish Slang and a whole lotta Jameson- let's kickstart the St Paddy's celebrations with a little Irish Fun</h6>
              <h6>Join us as we #GoIrish at Ek Bar</h6>
              <div class="col l12 m12 s12" style="font-size:13px">
                <div class="col l4 m4 s6 center-align">
                   <i class="fa fa-calendar-o"></i>
                  <p class="center">Friday, 26th Feb'16</p>
                </div>
                <div class="col l4 m4 s6 center-align">
                   <i class="fa fa-clock-o"></i>
                  <p class="center">9 PM onwards<br></p>
                </div>
                <div class="col l4 m4 s12 center-align">
                   <i class="fa fa-map-marker"></i>
                  <p class="center">Ek Bar, Defence Colony</p>
                </div>
              </div>
         </div> 
         <!-- <div class="col s12 m12 center">
         	<div class="inline" id="only"><h6>Only</h6></div>
           <div id="counter" class="inline"></div>
           <div class="inline" ><h6 id="eleft">Entries left</h6></div>
         </div> -->
          <div class="col s12 m12 l12">
            <div class="red-c ">
              <h6 class="center">RSVP to get on the guest list</h6>
              <h6 class="center">We only have limited room so make sure you RSVP before the bar stools fill up.</h6>
              <form action="#" method="post" id="frm" >
                  <div class="section"></div>
                   <div class="row">
                      <div class="col s12 m12 l12">
                        <div class="col s12 m6 l6">
                          <label for="name">Name *</label>
                          <input type="text" name="name" id="name" class="validate" value="<?php echo $user['name']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="email">Email *</label>
                          <input type="email" name="email" class="validate" id="email" value="<?php echo $user['email']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="phone">Phone Number *</label>
                          <input type="tel" name="phone" class="validate" id="phone" value="<?php echo $user['contact']; ?>" required>
                        </div>
                        <div class="col s12 m6 l6">
                          <label for="dob">Date of Birth *</label>
                          <input type="date" name="dob" id="dob" class="datepicker" value="<?php echo $user['dob']; ?>" required>
                        </div>
                        <div class="col s12 m12 l12">
                          <div class="input-field">
                            <label for="guest">Number of Guests</label>
                            <select name="guest" id="guest" class="browser-default">
                              <option value="0"> 0</option>
                              <option value="1"> 1</option>
                              <option value="2"> 2</option>
                              <option value="3"> 3</option>
                            </select>
                          </div>
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
      <script type="text/javascript" src="../js/moment.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      
      <script>
      $(document).ready(function() {
      	setTimeout(function(){
        	$.ajax({
            url: 'http://api.foodtalkindia.com/event/'+e_id,
            type: 'GET',
            dataType: 'json'
          })
          .done(function(response) {

            var counter = 200-response.result.total_participants;
            //var counter = -12;
            if(counter >= 0){
              $('#counter').html(counter);
            }
            else{
              $('#counter').html("No Seats remaining");
              $('#only').html(" ");
              $('#eleft').html(" ")
            }
          })
          .fail(function() {
            console.log("error");
          }); 
      }, 1000);
        var e_id = <?php echo $_SESSION['target']; ?>;
        //getcount();
        setInterval(function(){
        	$.ajax({
            url: 'http://api.foodtalkindia.com/event/'+e_id,
            type: 'GET',
            dataType: 'json'
          })
          .done(function(response) {

            var counter = 200-response.result.total_participants;
            //var counter = -12;
            if(counter >= 0){
              $('#counter').html(counter);
            }
            else{
              $('#counter').html("No");
              $('#only').html(" ");
            }
          })
          .fail(function() {
            console.log("error");
          }); 
      }, 5000);
        

        var source = "<?php echo $_SESSION['source']; ?>";
        console.log(source);
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
          if(validateForm()== true){
            //Serialize the form data
              console.log("validatetrue");
              
              var data = $('#frm').serializeArray();
              console.log(data);
              var dob = moment(data[3]['value']).format("YYYY-MM-DD");
              
              var URL_INSERT = "http://api.foodtalkindia.com/user/"+id+"/rsvp";
              var URL_UPDATE = "http://api.foodtalkindia.com/user/"+id;
              var responsedata = {
                NumberOfGuest :data[4]['value']
              };
              console.log();
              // if($('#test6').prop('checked') == true){
              //   var sub = 1;
              // }else{
              //   var sub = 0;
              // }
              var toinsertdata = {events_id: e_id,
                     email: data[1]['value'],
                     contact: data[2]['value'],
                     response: responsedata,
                     source: source,
                     payment_id: '',
                     subscribe: 1};
              var toupdate = {name: data[0]['value'],
                     email: data[1]['value'],
                     contact: data[2]['value'],
                     dob: dob};
              
              //console.log(URL_INSERT);
             

              
              

              //insert

               $.ajax({
                 url: "createsession.php",
                 type: 'POST',
                 dataType: 'json',
                 data: {URL_INSERT: URL_INSERT,
                        URL_UPDATE: URL_UPDATE,
                        toinsertdata: toinsertdata,
                        toupdate: toupdate}
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
            $('#frm').find( 'input[type!="hidden"]' ).each(function () {
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