<!DOCTYPE html>
<html>
<head>

<title>YM-Proxy</title>
<style type="text/css">

html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 15px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:180px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:15px 15px;
	background-color:#4d53ff;

	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 16px;
}
.button2 {
  background-color: #f44336;; /* Green */
  border: none;
  color: white;
  padding: 9px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 8px;
}
</style>

</head>

<body>


<div id="container">
    <div style="  display: block; margin-left: auto; margin-right: auto;">
        <img src="https://server-ym.000webhostapp.com/templates/logoym.png"><br><br>
	</div>
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- IMP (Form Feed) -->
	
		<form action="index.php" method="post" style="margin-bottom:0; ">
			<input name="url" type="text" style="font-size: 20px; width:400px; height:30px;  border-radius: 8px;" autocomplete="off" placeholder="Proxy Search (Enter URL Only)" />
			<input class="button2" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>



</body>
</html>