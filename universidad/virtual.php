<?php  
	$active = "CAMPUS VIRTUAL";
	include('../php/init.php');
	include('../widgets/head_uni.php');
	include('../widgets/header_uni.php');
?>

<section class="img-section2">
	<img src="<?php echo $direction; ?>/assets/images/lic/titulo_virtual.png" width="100%">
</section>

<section>
	<div class="container mt-5 mb-5" style="font-weight: bold;">
		<iframe src="https://app.box.com/embed/s/y041u18rw8dduhoye42l?sortColumn=date&view=list" width="500" height="400" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe>
	</div>
	<div id="lms_widget_container"> 
	  <div id="lms_widget_header">
	    <h1>Online School</h1>
	  </div>
	  
	  <div id="lms_widget_inner">


	    <form name="form1" method="post" action="https://hallerizcalli.neolms.com/log_in/submit" target="_blank">
	      <label for="userid">User ID</label>
	      <input type="text" name="userid" id="userid" class="lms_widget_border">

	      <label for="password">Password</label>
	      <a href="http://hallerizcalli.neolms.com/log_in/forgot_password" target="_blank">(forgot?)</a><br>
	      <input type="password" name="password" id="password" class="lms_widget_border"><br>

	      <button type="submit" value="Submit">Log in</button>

	      <input type="checkbox" name="remember" id="remember">
	      <label for="remember">Remember me?</label>
	    </form>
	  </div>
	</div>
</section>


<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300); /* include Roboto font from Google fonts */

    #lms_widget_container {
      width: 300px; /* width of box */
      height: auto;
      border: 1px solid #c6c5c5; /* border thickness, border style, border color */
      background:#fff; /* background color */
      font-family: 'Roboto', Helvetica, Arial, sans-serif; /* font family */
      text-align:left; /* general text alignment */
      font-size:16px; /* general font size */
      color:#222; /* general text color */
      border-radius: 4px
    }

    #lms_widget_header {
      background: #c0c1c1; /* background color of heading section */
      width: 100%; /* width of widget */
      border-bottom: 1px solid #c6c5c5; /* header bottom border thickness, style and colour */
    }

    #lms_widget_container h1 {
      padding: 15px 8px 14px 8px; /* positioning of header */
      font-size: 19px; /* font size */
      font-weight: normal; /* font weight */
      margin: 0;
      color:#fff; /* text color */
      text-align:center; /* text alignment */
    }

    #lms_widget_inner {
      margin: 25px;  /* widget inner spacing */
    }

    #lms_widget_container input[type="text"], #lms_widget_container input[type="password"] {
      margin: 8px 0 18px; /* space around input boxes */
      padding: 12px 10px 11px; /* space within input boxes */
      color:#222; /* input text color */
      font-family: 'Roboto', Helvetica, Arial, sans-serif; /* font family */
      font-size:16px; /* font size */
      border-radius: 5px; /* rounded corner size */
      box-shadow: inset 3px 3px 3px rgba(0,0,0,0.1); /* inner shadow */
      width: 100%; /* width */
      -moz-box-sizing: border-box; /* don't adjust */
      box-sizing: border-box; /* don't adjust */
    }

    .lms_widget_border {
      border: 1px #c6c5c5 solid; /* border around input field, width, color, style */
    }

    #lms_widget_container a {
      color: #a7a7a7; /* link color */
      font-size: 15px; /* font size */
    }

    #lms_widget_container a:hover {
      color:#5e5f5f; /* rollover link color */
      text-decoration:underline;
    }

    #lms_widget_container button {
      outline:none;
      border: 0;
      color: #fff;  /* color of button text */
      margin: 0 0 14px 0; /* space around button */
      padding: 12px 3px; /* space within button */
      display: block;
      width: 100%;  /* width */
      font-family: 'Roboto', Helvetica, Arial, sans-serif; /* font family */
      font-size:16px; /* font size */
      background: #c0c1c1; /* background color */
      border-radius: 5px; /* rounded corner size */
      cursor: pointer;
    }

    #lms_widget_container button:hover {
      background: #b4b4b4; /* button rollover color */
    }

    #lms_widget_container input[type="checkbox"] {
      position: relative; /* checkbox alignment */
      top: -1px; /* checkbox top alignment */
      margin-right: 5px;  /* gap to the right of the checkbox */
    }

    #lms_widget_container label[for="remember"] {
      font-size: 15px; /* 'remember me' font size */
    }
</style>

<?php  
	include('../widgets/footer_uni.php');
?>