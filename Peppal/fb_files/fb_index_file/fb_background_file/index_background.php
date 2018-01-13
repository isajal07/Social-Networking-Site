<html>
<head>

<script>
	function open_sajal_details()
	{
		document.getElementById("sajal_details").style.display='block';
		document.getElementById("sajal_name").style.textDecoration = "underline"
	}
	function close_sajal_details()
	{
		document.getElementById("sajal_details").style.display='none';
		document.getElementById("sajal_name").style.textDecoration = "none"
	}
	function open_sudip_details()
	{
		document.getElementById("sudip_details").style.display='block';
		document.getElementById("sudip_name").style.textDecoration = "underline"
	}
	function close_sudip_details()
	{
		document.getElementById("sudip_details").style.display='none';
		document.getElementById("sudip_name").style.textDecoration = "none"
	}
</script>
</head>
<body>


	 <!--head background-->
	<div style="position:absolute;left:0%;top:0%; height:10.2%; width:100%; z-index:-1; background:#001A33">  </div>
	<!--text: peppal -->
<div class="logo"> <img src="./logo.png" style="width:14%; height:9%;position:absolute;left:13.5%; top:1%;"/></div>
	<!--div style="position:absolute;left:13.5%; top:2.5%; font-size:40; font-weight:900; color:#FFFFFF; font-weight:bold;"> <font face="myFbFont">  peppal </font> </div-->
	<!--body background-->
	<div style="position:absolute;left:0%;top:10.2%; height:90%; width:100%; z-index:-1; background:#eff5f9">   </div>
	<!--bottam background-->
	<div style="position:absolute;left:0%;top:120%; height:1%; width:100%; z-index:-1; background:#FFFFFF">   </div>
    <div style="position:absolute;left:5%;top:105%;"><font face="myFbFont"> Developers: <span style=" color:#001A33;" onMouseOver="open_sajal_details()" onMouseOut="close_sajal_details()" id="sajal_name">  Sajal Shrestha  </span>   &
<span style=" color:#001A33;" onMouseOver="open_sudip_details()" onMouseOut="close_sudip_details()" id="sudip_name">  Sudip Sharma </span></font>  </div>
</html>
