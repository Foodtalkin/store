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
    $_SESSION['URL_UPDATE'] = "http://api.foodtalkindia.com/user/".$user['id'];
    $_SESSION['URL_INSERT'] = "http://api.foodtalkindia.com/user/".$user['id']."/participation";
    //var_dump($metadata['pincode']);
    $link = "https://www.instamojo.com/foodtalk/le-wild-event?embed=form&data_name=";
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
    </style>
    </head>

    <body>
      <div class="head hide-on-small-only"></div>
      <div class="head1 hide-on-med-and-up">
        <img class="responsive-img intro" src="../img/cover62.jpg"/>
      </div>
      <div class="container main">
        <div class="row hide-on-small-only">
          <div class="col l12 m12 s12">
            <img class="responsive-img intro" src="../img/cover62.jpg"/>
          </div>
        </div>
        
        <div class="row">
          <div class="col l12 m12 s12 left-align">
            <h4>Mystery Meal Vol. 3</h4>
          </div>
        </div>
        <div class="row">
          <div class="col l12 m12 s12">
            <div class="col l7 m7 s12" style="font-size:12px">
              <div class="col l3 m3 s6 center-align">
                <i class="fa fa-calendar-o"></i>
                <p>Tuesday, 8th March'16</p>
              </div>
              <div class="col l3 m3 s6 center-align">
                <i class="fa fa-clock-o"></i>
                <p>8:30 PM onwards</p>
              </div>
              <div class="col l3 m3 s6 center-align">
                <i class="fa fa-map-marker"></i>
                <p>It's a secret ;)</p>
              </div>
              <div class="col l3 m3 s6 center-align">
                <i class="fa fa-inr"></i>
                <p>1,000/person</p>
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
                  <h5>Cost Includes</h5>
                    <ul class="list">
                      <li class="left-align">fabulous meal </li>
                      <li class="left-align">Chandon Cocktails</li>
                      <!-- <li class="left-align">Chandon Rose</li> -->
                    </ul>
                </div>
              </div>
            </div>

          <div class="col l7 m7 s12 center-align">
            <div class="card">
                <div class="col m12 s12 l12 hide-on-small-only justify">
                      <p>Food Talk India is back with another edition of the #MysteryMeal series and this time around we are celebrating all the fabulous women that dare to do it different.</p>

                      <p>Clueless diners and a feast to remember. We are looking for women with hunger for good conversation and good food as we raise a toast to all you lovely ladies! Dare to dine our way?</p>
                      <p>Ladies join us for a fabulous meal & some Chandon Cocktails and raise a toast to you.</p>
                    
                    <p>Book Now:<br>
                    Charges: Rs 1,000 AI /per head
                    </p>
                    
                   
                </div>
                <div class="col m12 s12 l12 flow-text hide-on-med-and-up justify">
                      <p>Food Talk India is back with another edition of the #MysteryMeal series and this time around we are celebrating all the fabulous women that dare to do it different.</p>

                      <p>Clueless diners and a feast to remember. We are looking for women with hunger for good conversation and good food as we raise a toast to all you lovely ladies! Dare to dine our way?</p>                    
                      <p>Ladies join us for a fabulous meal & some Chandon Cocktails and raise a toast to you.</p>
                    <p>Book Now:<br>
                    Charges: Rs 1,000 AI /per head
                    </p>
                    
                 
                </div>
                <div class="col l12 s12 m12 address">
                  <div class="col l1 m1 s1 left-align">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="col l11 m11 s11 right left-align">
                    <h6>It's a secret ;)</h6>
                    <!-- <p>D-17, Near Bharat Petroleum Petrol Pump, Defence Colony, New Delhi 110024</p> -->
                  </div>
                </div>
            </div>
          </div>
            <div class="col l5 m5 s12 center-align hide-on-small-only">
              <div class="card">
                <div class="col m12 l12 s12 partner">
                  <h5>Cost Includes</h5>
                    <ul class="list">
                      <li class="left-align">fabulous meal </li>
                      <li class="left-align">Chandon Cocktails</li>
                      <!-- <li class="left-align">Chandon Rose</li> -->
                    </ul>
                </div>
              </div>
            </div>
            <div class="col l5 m5 s12 center-align">
              <div class="card">
                <div class="col l12 m12 s12">
                  <h5>Event Partners</h5>
                  <ul>
                    <li><img src="../img/partners/chandon.png" alt=""></li>
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
