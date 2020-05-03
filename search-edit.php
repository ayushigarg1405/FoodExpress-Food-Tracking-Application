<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style_002.htm" rel="stylesheet" type="text/css">

<style type="text/css">
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    background-color: #ffff80;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('food.jpg');
    height: 275px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>
  <div class="bgimg-1">
    
  </div>
<?php include("header.php"); ?>
<script language="javascript">
function validate()
  {
 if (document.form1.track.value == "" )
		 {
			alert("Consignment No is required.");
			document.form1.track.focus( );
			return false;
		}
	}
</script>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="780">
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
      <tbody><tr>
        <td class="Partext1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style></td>
      </tr>
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
            <form action="new_track_submit.php" method="post" name="form1" id="form1" onsubmit="return validate()"></form>
              <tbody><tr>
                <td colspan="2" class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> <br>
                  <br>
                  Enter Consignment Number <br>
                              </strong></div></td>
              </tr>
              <tr>
                <td colspan="2" class="bottom" valign="middle">&nbsp;</td>
              </tr>
              
              <tr bgcolor="EFEFEF">
                <td colspan="2" class="aalpha" bgcolor="#FFFFFF" height="34" valign="top"><div class="gentxt" align="center"><strong>Key in the Shipment Number to MODIFY the data. This is helpful if you have made spelling errors while adding the shipment.</strong><br>
                  <br>
                </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                
              </tr>
              <tr bgcolor="EFEFEF">
			  <form action="search-courier.php" method="post">
                <td valign="top"><div align="right">Enter Consignment number </div></td>
                <td valign="top"><div align="left">
                  <input name="Consignment" class="gentxt" id="track" maxlength="50" type="text">
                </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td height="41" valign="top">&nbsp;</td>
                <td valign="top"><div align="left">
                  <input name="Submit" class="gentxt" value="Submit" type="submit">
                </div></td>
              </form>
			  </tr>
              <tr bgcolor="EFEFEF">
                <td colspan="2" class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
      </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>