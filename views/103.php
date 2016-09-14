<?php
   session_start();
    
   $user =(array) $_SESSION['USER']['result'];
    
    $metadata = (array) $user['metadata'];
    $toinsertdata = array('events_id' => $_SESSION['target'],
                        'email'=> $user['email'],
                        'contact'=> $user['contact'],
                        'source'=> $_SESSION['source'],
                        'payment_id'=>'');
    $toinsertdata = json_encode($toinsertdata);
    $toupdate = array('name'=> $user['name'],
      'email'=>$user['email']);
    $toupdate = json_encode($toupdate);
    
              
    $_SESSION['toinsertdata'] = $toinsertdata;
    $_SESSION['toupdate'] = $toupdate;
    $_SESSION['URL_UPDATE'] = "http://api.foodtalk.in/user/".$user['id'];
    $_SESSION['URL_INSERT'] = "http://api.foodtalk.in/user/".$user['id']."/participation";
    //var_dump($metadata['pincode']);
    $link = "https://www.instamojo.com/foodtalk/ballantines-out-of-office?embed=form&data_name=";
    $link .= $user['name'];
    $link .= "&data_email=";
    $link .= $user['email'];
    // $link .= "&data_phone=";
    // $link .= $user['contact'];
    
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="../source/jquery.fancybox.css">
      <link type="text/css" rel="stylesheet" href="../css/custom.css"  media="screen,projection"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script>
    function LoginProcess () {
      var url = '<?php echo $link; ?>';
      var link = document.getElementById('modelid');
      link.setAttribute('href', url);
                  //alert(link.getAttribute('href'));
      link.click();
    }

    </script>
    <style>
    #dropdown2{
    margin-top: 64px;
    }
    .list li{
      list-style: circle;
      margin-left: 30px;
    }
    .fa{
      font-size: 24px;
    }
    .address div .fa{
      margin-top: 10px;
    }
    .address div p{
      margin-top: 14px;
    }
    .intro{
    width: 100%;
    height: auto;
    }
    .no-padd{
		padding: 0 !important;
    }
    </style>
    </head>

    <body>
      <div class="head hide-on-small-only"></div>
      <div class="head1 hide-on-med-and-up">
        <img class="responsive-img intro" src="../img/cov103.jpg"/>
      </div>
      <div class="container main">
        <div class="row hide-on-small-only">
          <div class="col l12 m12 s12">
            <img class="responsive-img intro" src="../img/cover103.jpg"/>
          </div>
        </div>
        
        <div class="row">
          <div class="col l12 m12 s12 left-align">
            <h4>Ballantine's Out Of Office</h4>
            <h6>Feat. Vir Das' Alien Chutney</h6>
          </div>
        </div>
        <div class="row">
          <div class="col l12 m12 s12">
            <div class="col l7 m7 s12" style="font-size:12px">
	            <div class="col l6 m6 s12 no-padd">
	            	<div class="col l6 m6 s6 center-align">
	                <i class="fa fa-calendar-o"></i>
	                <p>Friday, 16th Sept' 2016</p>
	              </div>
	              <div class="col l6 m6 s6 center-align">
	                <i class="fa fa-clock-o"></i>
	                <p>7:00 pm onwards</p>
	              </div>
	            </div>
	            <div class="col s12 l6 m6 no-padd">
	            	<div class="col l6 m6 s6 center-align">
	                <i class="fa fa-map-marker"></i>
	                <p>  Dimcha, Epicuria, Nehru Place</p>
	              </div>
	              <div class="col l6 m6 s6 center-align">
	                <i class="fa fa-inr"></i>
	                <p> 1150 Ai per head</p>
	              </div>
	            </div>
            </div>
            <div class="col l5 m5 s12 center-align pur">
              <a class="waves-effect waves-light btn-large custom-btn right button  hide-on-small-only" href="#" onclick="LoginProcess();">   Book  Now </a>
              <a class="waves-effect waves-light btn-large custom-btn center button hide-on-med-and-up" href="<?php echo $link; ?>">   Book  Now </a>
              <a class="various" data-fancybox-type="iframe" href="" style="display:none;" id="modelid">Iframe</a>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col l5 m5 s12 center-align hide-on-med-and-up">
              <div class="card">
                <div class="col m12 l12 s12 partner">
                  <h5>Offer Includes</h5>
                    <ul class="list">
                      <li class="left-align">2 Small Ballantine's serves</li>
                        <li class="left-align"> A Pass to watch Vir Das' awesome band Alien Chutney</li>
                        <li class="left-align">Opening Act by PANIC !</li>
                    </ul>
                </div>
              </div>
            </div>

          <div class="col l7 m7 s12 center-align">
            <div class="card">
                <div class="col m12 s12 l12 hide-on-small-only justify">
                  <h5>Ballantine's Out Of Office</h5>
                  <h6>Feat. Vir Das' Alien Chutney</h6>
                  <br>
                  <p>For Those who Work hard, Play Harder </p>
                  <p>So Hey! Grab your colleagues and come join us for a night of Cocktails and rib-tickling music!</p>
                  <p>Let's get #OutOfOffice</p>
                  <p><strong>Ballantine's Out Of Office Feat. Vir Das' Alien Chutney</strong></p>
                  <p><strong>T&C Apply:</strong></p>
                  <p>Age Limit 25 years and above</p>
                  <p>Seating arrangement on first come first serve basis only.</p>
                  <p>Tickets once booked cannot be exchanged or refunded.</p>
                  <p>We recommend that you arrive by 7pm at the venue to pick up your physical tickets & drink coupons</p>
                  <h6>Date:  16th Sept' 2016 <br>
                      Time: 7:00 pm onwards <br>
                      Venue:  The People & Co., Cyber Hub Gurgaon
                      <br>Cost: Rs 1150 Ai per head.
                  </h6>
                  
                  <h6>Book Now!</h6>
                  
                  <!-- <h6>**Dress Code-Keep it paint friendly.</h6> -->
                 
                </div>
                <div class="col m12 s12 l12 flow-text hide-on-med-and-up justify">
                  <h5>Ballantine's Out Of Office</h5>
                  <h6>Feat. Vir Das' Alien Chutney</h6>
                  <br>
                  <p>For Those who Work hard, Play Harder </p>
                  <p>So Hey! Grab your colleagues and come join us for a night of Cocktails and rib-tickling music!</p>
                  <p>Let's get #OutOfOffice</p>
                  <p><strong>Ballantine's Out Of Office Feat. Vir Das' Alien Chutney</strong></p>
                  <p><strong>T&C Apply:</strong></p>
                  <p>Age Limit 25 years and above</p>
                  <p>Seating arrangement on first come first serve basis only.</p>
                  <p>Tickets once booked cannot be exchanged or refunded.</p>
                  <p>We recommend that you arrive by 7pm at the venue to pick up your physical tickets & drink coupons</p>
                  <h6>Date:  16th Sept' 2016 <br>
                      Time: 7:00 pm onwards <br>
                      Venue:  The People & Co., Cyber Hub Gurgaon
                      <br>Cost: Rs 1150 Ai per head.
                  </h6>
                  
                  <!-- <h6>**Dress Code-Keep it paint friendly.</h6> -->
                      
                </div>
                <div class="col l12 s12 m12 address">
                  <div class="col l1 m1 s1 left-align">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="col l11 m11 s11 right left-align">
                    <h6>The People & Co., Cyber Hub Gurgaon</h6>
                  </div>
                </div>
            </div>
          </div>
            <div class="col l5 m5 s12 center-align hide-on-small-only">
              <div class="card">
                <div class="col m12 l12 s12 partner">
                  <h5>Includes</h5>
                    <ul class="list">
                       <li class="left-align">2 Small Ballantine's serves</li>
                        <li class="left-align"> A Pass to watch Vir Das' awesome band Alien Chutney</li>
                        <li class="left-align">Opening Act by PANIC !</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col l5 m5 s12 center-align">
              <div class="card">
                <div class="col l12 m12 s12">
                  <h5>Event Partners</h5>
                  <ul>
                    <li><img src="../img/partners/dimcha.png" alt=""></li>
                    <!-- <li><img src="../img/partners/hoegaarden.png" alt=""></li> -->

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12 hide-on-med-and-up center-align">
            <a class="waves-effect waves-light btn-large custom-btn center button hide-on-med-and-up" href="<?php echo $link; ?>">   Book  Now </a>
            <div class="section"></div>
          </div>
          <div class="row">
          <div class="col s12 l12 m12">
            <div class="footer">
              <div class="col s12 m4 l3 center-align">&copy Digtal Food Talk Pvt Ltd</div>
              <div class="col s12 m2 l2 center-align offset-m6 offset-l7"><a href="event_document.html">Legal</a></div>
            </div>
          </div>
        </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../source/jquery.fancybox.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".dropdown-button").dropdown({ hover: false });
          $(".button-collapse").sideNav();
          $(window).load(function(){
            $('#preloader').fadeOut('slow',function(){$(this).remove();});
          });
          $(".fancybox").fancybox();
          $(".various").fancybox({
            maxWidth  : 500,
            maxHeight : 800,
            fitToView : false,
            width   : '100%',
            height    : '90%',
            autoSize  : true,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
          });
        });
        
      </script>
    </body>
  </html>