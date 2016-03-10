<?php
    session_start();
    
    $user =(array) $_SESSION['USER']['result'];
    //var_dump($user);
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
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
      
      <div class="container">
        <div class="intro">
          <img src="../img/cover.jpg" class="responsive-img">
        </div>
        <div class="row">
          <form  id="frm">

              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input placeholder="Name" id="name" type="text" class="validate" name="name" value="<?php echo $user['name']; ?>">
                  <label for="name">Name</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input placeholder="abc@xyz.com" id="email" type="email" class="validate" name="email" value="<?php echo $user['email']; ?>">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input id="phone" placeholder="9876543210" type="tel" class="validate" name="phone" value="<?php echo $user['contact']; ?>">
                  <label for="phone">Phone</label>
                </div>
                <div class="input-field col s12 m6 l6">
                  <input type="text" id="textarea1" name="response">
                  <label for="textarea1">Question</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input type="hidden" class="validate" id="eid" name="e_id" value="<?php echo $_SESSION['target']; ?>">
                </div>
                <div class="input-field col s12 m6 l6">
                  <input type="hidden" class="validate" id="uid" name="u_id" value="<?php echo $user['id']; ?>">
                </div>
                <div class="input-field col s12 m12 l12">
                  <button class="btn waves-effect waves-light right" type="button" id="submit">Submit
                  </button>
                </div>
              </div>
              
          </form>
        </div>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script>
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
              var data = $('#frm').serializeArray();
              console.log(data);
              var URL_INSERT = "http://api.foodtalkindia.com/user/"+id+"/participation";
              var URL_UPDATE = "http://api.foodtalkindia.com/user/"+id;
              console.log(URL_INSERT);
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
                    contact: data[2]['value']})
              })
              .done(function(response) {
                //console.log(response.message);
                if(response.message == "Success"){
                  update = true;
                  if(insert == true){
                    $(location).attr('href', '../logout.php');
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
                data: JSON.stringify({events_id: data[4]['value'],
                    email: data[1]['value'],
                    contact: data[2]['value'],
                    response: data[3]['value']})
              })
              .done(function(response) {
                //console.log(response.message);
                if(response.message == "Success"){
                  insert = true;
                  if(update == true){
                    $(location).attr('href', '../logout.php');
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