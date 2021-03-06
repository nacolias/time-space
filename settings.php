<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Space</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="img/font-awesome-4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/timespace.css">
    <script src="validate.js"></script>

<!--    <script>

      $(document).ready(function(){
        $("#submittime").click(function(evt){
          evt.preventDefault();
          validateForm();
        });
        $("#availability_form").submit(function(evt){
          evt.preventDefault();
          validateForm();
        });
      });

    </script>
 -->
  </head>
  <body>
    
    <!--Nav-->
    <div class="fixed sticky"> 
	    	<nav class="top-bar" data-topbar role="navigation">
		    	<div class="row">
		    		<div class="small-centered">
				    	<center>
				    		<i class="fa fa-users fa-2x"></i>
  							<i class="fa fa-search fa-2x"></i>
  							<a href="index.php"><i class="fa fa-home fa-2x"></i></a>
  							<a href="friend_requests.php"><i class="fa fa-user-plus fa-2x"></i></a>
                <a href="settings.html"><i class="fa fa-gear fa-2x"></i></a>
						</center>
					</div>
				</div>
	    	</nav> 
	</div>
	<!--End Nav-->

    <!--Main Body-->

    <div class="row">
        <center><h1>General Settings</h1></center>
    </div>

    <form name="availability_form" id="availability_form" onsubmit="return validateForm()" method="post">
      <div class="row">
        <div class="small-8 small-centered columns person">
          <center><h4>Availability</h4></center>
          <br />
          <br />

          <center>
            <input id="sunday"type="checkbox" name="sunday" value=""><label for="Sunday"><span>S</span></label>
            <input id="monday"type="checkbox" name="monday" value=""><label for="Monday"><span>M</span></label>
            <input id="tuesday"type="checkbox" name="tuesday" value=""><label for="Tuesday">T</label>
            <input id="wednesday"type="checkbox" name="wednesday" value=""><label for="Wednesday">W</label>
            <input id="thursday" type="checkbox" name="thursday" value=""><label for="Thursday">T</label>
            <input id="friday"type="checkbox" name="friday" value=""><label for="Friday">F</label>
            <input id="saturday" type="checkbox" name="saturday" value=""><label for="Saturday">S</label>
          </center>

          <br />
          <div class="row">
            <div class="small-12 small-centered columns">
             <div class="small-6 columns">
                <input id="starttime" name="starttime" type="time" placeholder="Start Time"/>
              </div>

              <div class="small-6 columns">
                <input id="endtime" name="endtime" type="time" placeholder="End Time"/>
              </div> 
            </div>
          </div>

          <div class="row">
            <div class="small-centered small-10 columns buttonarea">
                <center>
                    <a href="#" class="small left button">View Current</a>
                    <div id="submittime" action"" class="small right button">Submit</a>
                </center>
            </div>
        </div>

        </div>
      </div>
    </form>

    <div class="row">
      <a href="setup.php">
       <div class="columns small-8 small-centered person">
            <center><h4>Edit Profile Settings</h4></center>
       </div>
      </a>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
