<?php 
session_start();
  $toredirect = $_SESSION['target'];
  $toins = $_SESSION['toinsertdata'];
  //var_dump($toins ["payment_id"]);
    if($_SESSION['source'] != null || isset($_SESSION['source'])){
        if($_GET['payment_id'] != null || isset($_GET['payment_id'])){
          $toins = json_decode($_SESSION['toinsertdata']);
          $toins = (array)$toins;
         $toins ["payment_id"] = $_GET['payment_id'];
        }
          $toupdate = json_encode($_SESSION['toupdate']);
          $ch = curl_init($_SESSION['URL_UPDATE']);                                                                      
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");                                                                     
          curl_setopt($ch, CURLOPT_POSTFIELDS, $toupdate);                                                                  
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
              'Content-Type: application/json',                                                                                
              'Content-Length: ' . strlen($toupdate))                                                                       
          );                                                                                                                   
          $result = curl_exec($ch);
          curl_close($ch);

          $toinsertdata = json_encode($toins);
          $ch1 = curl_init($_SESSION['URL_INSERT']);                                                                      
          curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
          curl_setopt($ch1, CURLOPT_POSTFIELDS, $toinsertdata);                                                                  
          curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);                                                                      
          curl_setopt($ch1, CURLOPT_HTTPHEADER, array(                                                                          
              'Content-Type: application/json',                                                                                
              'Content-Length: ' . strlen($toinsertdata))                                                                       
          );                                                                                                                   
          $result1 = curl_exec($ch1);
          curl_close($ch1);
    }
    $icon = "";
    $msg = "";
      if ($_SESSION['type'] == "rsvp") {
        $icon = "../img/seeyou.png";
        $msg = "Your name is on 'The List' <br>
                Please Note: Club Rules Apply**";
      } elseif ($_SESSION['type'] == "contest") {
        $icon = "../img/goodluck.png";
        $msg = "Now that was a piece of cake right? <br>
                Stay tuned to know if you made it to 'The List'";
      } else{
        $icon = "../img/thankyou.png";
        $msg1 = "You just booked yourself a Food Talk Event <br>
      It's going to be one helluva ride";
      $msg="";
      } 
      echo $eventid;
      if($toredirect == 97){
        $icon = "../img/seeyou.png";
        $msg = "Your name is on 'The List' <br>
                Pass code to enter: <STRONG>  FONDANT NAZI </STRONG>";
      }


?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Food Talk India | Food Events | Blind Plate Tasting</title>
      <meta name="description" content="Food Talk India is one of the best social food community situated in Delhi. Here member read and share their true food experiences they have.">
      <meta name="keyword" content="food talk india, food groups delhi, restaurant reviews, food events delhi, cocktail events, blind tasting, blind folded dinner, best brunches in delhi, food community delhi, delhi food events, mumbai food events, restaurant marketing, cocktail making workshops, largest food community india, cooking classes delhi, delhifood, sharing, restaurant, zomato, restaurant delhi, near, discover, times city, events, blind tasting, street, burrp, yelp, delhi event, mumbai event"> 
      <meta charset="UTF-8"/>
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"/>
      <link rel="shortcut icon" href="img/favicon.png" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <!-- Facebook Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '503737936461532');
      fbq('track', 'CompleteRegistration');</script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=503737936461532&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
      <style type="text/css" media="screen">
          .background-img{
            background-image: url('../img/background.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center center;
          }
          .Food_Talk {
        font-size: 16px;
        color: rgb(212, 215, 222) !important;
        line-height: 2;
        text-align: center;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 0);
        z-index: 12;
      }
      .Rounded_Rectangle_1 {
        border-style: solid;
        border-width: 1px;
        border-color: rgb(51, 51, 51);
        border-radius: 15px;
        background-color: #f1f1f1;
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 50%;
        width: 757px;
        height: 462px;
        z-index: 5;
      }
      .logo{
        margin-top: 20px;
        margin-bottom: 6px;
        width: 170px;
        height: auto;
      }
      .top-text{
        font-size: 22px;
        color: rgb(20, 29, 45);
        line-height: 1.6;
        text-align: center;
        z-index: 10;
      }
      .bottomtext{
        font-size: 18px;
        color: rgb(98, 98, 98);
        font-weight: 300;
          line-height: 2;
          margin: 25px 0;
          text-align: center;
          z-index: 11;
      }
      .Can_t_log_in {
        font-size: 16.667px;
        color: rgb(64, 132, 252);
        line-height: 4.5;
        z-index: 9;
        margin-right: 20%;        
      }
      .login{
        margin: 9px;
      }
      .Download_App {
        font-size: 16.667px;
        color: rgb(64, 132, 252);
        line-height: 4.5;
        z-index: 8;
        margin-left: 20%;
        
      }
      .Can_t_log_in1 {
        font-size: 16.667px;
        color: rgb(64, 132, 252);
        line-height: 2.5;
        z-index: 9;
        margin: 4px 0;
      }
      .login1{
        margin: 10px 0;
        width: 250px;
        height: auto;
      }
      .Download_App1 {
        font-size: 16.667px;
        color: rgb(64, 132, 252);
        line-height: 2.5;
        z-index: 8;
        margin: 4px 0;
      }
      #backg{
        background-color: #f1f1f1 !important;
      }
      @media only screen and (max-width : 600px) {
        .background-img{
            background-color: #f1f1f1 !important;
            background-image:none !important;;
          }
          .top-text{
        font-size: 21px;
      }
      .bottomtext{
        font-size: 16px;
      } }

      .not-active {
       pointer-events: none;
       cursor: default;
      }
      strong{
        font-size: 28px;
        color: #f39aca;
      }
    </style>
    </head>
    <body class="background-img">
      <div class="container">
        <div class="row hide-on-small-only">
          <div class="col s12 m12 l12">
            <div class="Rounded_Rectangle_1">
              <div class="center-align col s12 m12 l12">
                <img src="<?php echo $icon; ?>" alt="" class="logo">
                <h4 class="top-text">
                  <?php echo $msg;?>
                </h4>
                <div class="col s12 m6 l6">
                  <a href="http://foodtalk.in/download.html" title="" class="Download_App not-active" >Download App</a>
                </div>
                <div class="col s12 m6 l6">
                  <a href="https://www.facebook.com/notes/food-talk-india/contest-tc/808169439312376?__mref=message_bubble" title="" class="Can_t_log_in" >Terms & conditions</a>
                </div>  
              </div>
            </div>
          </div>
          <div class="Food_Talk center-align">
            Food Talk 2016
          </div>
        </div>
        <div class="row hide-on-med-and-up" id="backg">
          <div class="col s12 m12 l12 center-align" >
            <img src="<?php echo $icon; ?>" alt="" class="logo">
            <h4 class="top-text">
              <?php echo $msg; ?>
            </h4>
            <div class="col s12 m6 l6 center-align">
              <a href="https://www.facebook.com/notes/food-talk-india/contest-tc/808169439312376?__mref=message_bubble" title="" class="" >Terms & conditions</a>
            </div>
          </div>
          <div class="Food_Talk center-align">
            Food Talk 2016
          </div>
        </div>
      </div>
      <script>
          // var a = <?php echo $toredirect; ?>;
          // if(a==88){
          //   window.location = "https://www.iorderfresh.com/";
          // }
          
      </script>
    </body>

  </html>
  <?php 
    
   $_SESSION['source'] = null;
  $_SESSION['target'] = null;
  $_SESSION['USER'] = null;
  session_unset();
  ?>