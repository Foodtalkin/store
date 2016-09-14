<?php 
  session_start(); 
  $SOURCE = $_SESSION['source'];
  $FBID = $_SESSION['fbid'];
 $USER = $_SESSION['username'];
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Store Food Talk India | Food Events | Blind Plate Tasting</title>
      <meta name="description" content="Food Talk India is one of the best social food community situated in Delhi. Here member read and share their true food experiences they have.">
      <meta name="keyword" content="food talk india, food groups delhi, restaurant reviews, food events delhi, cocktail events, blind tasting, blind folded dinner, best brunches in delhi, food community delhi, delhi food events, mumbai food events, restaurant marketing, cocktail making workshops, largest food community india, cooking classes delhi, delhifood, sharing, restaurant, zomato, restaurant delhi, near, discover, times city, events, blind tasting, street, burrp, yelp, delhi event, mumbai event"> 
      <meta charset="UTF-8"/>
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"/>
      <link rel="shortcut icon" href="../../img/favicon.png" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <style>
    .venue{
    	margin-top: 10px;
    	font-weight: bold;
    	color: #3c3c3c;
    }
    .venue p{
    	font-size: 14px !important;
    }
    .card-title{
    	    padding: 0 15px !important;
    	    width: 100% !important;
		    /*position: relative !important;*/
		    background: #000;
		    font-size: 20px !important;
		   	/*margin-top: -8px !important;*/
    }
    .card-content{
    	padding: 15px 15px 0 15px !important;
    }
    .card-action{
    	padding: 7px !important;
	    text-align: right !important;
	    /*margin-top: -15px !important;*/
    }
    .venue .fa{
    	font-size: 16px;
    	padding-right: 5px;
    }
    .details{
    	padding: 5px 0;
    }
    .details .fa{
    	font-size: 16px !important;
    }
    .details h6{
    	font-size: 12px !important;
    }
    .intro{
    	width: 100%;
    }
    .intro img{
    	width: 100%;
    	height: auto;
    }
    </style>
    </head>
    <body>
    	<div class="intro">
    		<img src="../img/header.jpg" alt="">
    	</div>
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
          	<?php 


			$url = "http://api.foodtalk.in/event/upcomming";
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response);
			$response = (array) $response;
			$result = (array) $response['result'];
			$data = (array) $result['data'];
			foreach ($data as $key) {
				$event = (array) $key;
        if($event['active']== true){
				$date =explode(" ", $event['start_date']);
				
			
			 ?>
			  <div class="col s12 m6 l4 mycard">
		          <div class="card">
		            <div class="card-image">
		            	<img src="<?php echo "../img/".$event['cover_url']; ?>">
		              <div class="card-title"><?php echo $event['name']; ?></div>
		            </div>
		            <div class="card-content">
		            	
		            	<div class="row">
		            		<div class="col s12 m12 l12 details">
		            			<div class="col s4 m4 l4 center-align">
		            				<i class="fa fa-calendar-o"></i>
		            				<h6><?php echo $date[0]; ?></h6>
		            			</div>
		            			<div class="col s4 m4 l4 center-align">
		            				<i class="fa fa-clock-o"></i>
		            				<h6><?php echo $event['timings']; ?></h6>
		            			</div>
		            			<div class="col s4 m4 l4 center-align">
		            				<i class="fa fa-inr"></i>
		            				<h6><?php echo $event['cost']." AI /per head"; ?></h6>
		            			</div>
		            		</div>
		            		<div class="col s12 m12 l12">
		            			<p><?php echo $event['description']; ?></p>
		            		</div>
		            		<div class="col s12 m12 l12 venue">
		            			<p><i class="fa fa-map-marker"></i><?php echo $event['venue']; ?></p>
		            		</div>
		            	</div>
		              
		            </div>
		            <div class="card-action">
		              <a href="../index.php?source=<?php echo $SOURCE; ?>&target=<?php echo $event['id']; ?>&fbid=<?php echo $FBID; ?>&uname=<?php echo $USER; ?>&type=rsvp">Book Now</a>
		            </div>
		          </div>
		        </div>

			<?php }} ?>
     <!-- contest -->
          <?php 


      $url1 = "http://api.foodtalk.in/contest/ongoing";
      $ch1 = curl_init();
      curl_setopt($ch1,CURLOPT_URL,$url1);
      curl_setopt($ch1,CURLOPT_RETURNTRANSFER,true);
      $response1 = curl_exec($ch1);
      curl_close($ch1);
      $response1 = json_decode($response1);
      $response1 = (array) $response1;
      $result1 = (array) $response1['result'];
      $data1 = (array) $result1['data'];
      foreach ($data1 as $key1) {
        $event1 = (array) $key1;
        if($event1['active']== true){
        $date1 =explode(" ", $event1['start_date']);
        
      
       ?>
        <div class="col s12 m6 l4 mycard">
              <div class="card">
                <div class="card-image">
                  <img src="<?php echo "../img/".$event1['cover_url']; ?>">
                  <div class="card-title"><?php echo $event1['name']; ?></div>
                </div>
                <div class="card-content">
                  
                  <div class="row">
                    <div class="col s12 m12 l12 details">
                      <div class="col s4 m4 l4 center-align">
                        <i class="fa fa-calendar-o"></i>
                        <h6><?php echo $date1[0]; ?></h6>
                      </div>
                      <div class="col s4 m4 l4 center-align">
                        <i class="fa fa-clock-o"></i>
                        <h6><?php echo $event1['timings']; ?></h6>
                      </div>
                      <div class="col s4 m4 l4 center-align">
                        <i class="fa fa-inr"></i>
                        <h6><?php echo $event1['cost']." AI /per head"; ?></h6>
                      </div>
                    </div>
                    <div class="col s12 m12 l12">
                      <p><?php echo $event1['description']; ?></p>
                    </div>
                    <div class="col s12 m12 l12 venue">
                      <p><i class="fa fa-map-marker"></i><?php echo $event1['venue']; ?></p>
                    </div>
                  </div>
                  
                </div>
                <div class="card-action">
                  <a href="../index.php?source=<?php echo $SOURCE; ?>&target=<?php echo $event1['id']; ?>&fbid=<?php echo $FBID; ?>&uname=<?php echo $USER; ?>&type=contest">Participate</a>
                </div>
              </div>
            </div>

      <?php }} ?>
          </div>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

    </body>
  </html>