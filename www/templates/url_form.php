<script src="https://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">

#top_form1 {
	position: fixed;
	top:0px;
	left:0px;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	border-bottom:1px solid #151515;
    background:#4d53ff;
	
	height:45px;
	line-height:45px;
}

#top_form1 input[name=url] {
	width: 550px;
	height: 20px;
	padding: 5px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	border-radius: 8px;
	background: none repeat scroll 0% 0% #FFF;
}

.button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 6.5px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 8px;
}
.button2 {
  background-color: #f44336;; /* Green */
  border: none;
  color: white;
  padding: 6.5px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 8px;
}
</style>

<div id="top_form1" class = "top_form1" >

	<div style="width:800px; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" value="Home" class="button1" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" class="button2" value="Go">
		</form>
		
	</div>
	
</div>

<script type="text/javascript">
(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".top_form1").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 10) {
                $('.top_form1').fadeIn();
            } else {
                $('.top_form1').fadeOut();
            }
        });
    });

});
  }(jQuery));
</script>