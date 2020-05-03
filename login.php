<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script></head>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: black;
    line-height: 1.8;
    background-color: #ffff80;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('food.jpg');
    min-height: 700px;
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

<body onLoad="document.form1.txtusername.focus();">
<div class="bgimg-1 ">
<div class="w3-top">
  <div class="w3-bar w3-black" id="myNavbar">
    <a class="w3-bar-item w3-button w3-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="track-status.php" class="w3-bar-item w3-button w3-hide-small">STATUS</a>
  </div>
</div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
  </div>
</div>

		



      
    
                  <tr>
                    <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="500">
                      <tbody><tr>
                        <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
                          <td><table bgcolor="#ffffb3" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <br><br><br>
                                <td colspan="3" class="smalltextgrey w3-card w3-orange">
								<div class="headtext13" align="center" style="font-size: 20px;color: black"><strong>Administrator Login Area </strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" height="10">
								<font color="#FF0000" style="font-size:12px;">
								<?php echo $error; ?>
								</font>
								</td>
                                </tr>
                              <tr>
                                <td width="50">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Username</font></td>
                                <td width="5">:</td>
                                <td width="200">
								<input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="text"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password"></td>
                              </tr>
							  <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Office</font></td>
                                <td>:</td>
                                <td>
								<select name="OfficeName">
			<?php 
			while($data = dbFetchAssoc($result)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
			</select>
								</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input name="Submit" class="green-button" value="Login Now" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  </td>
                        
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </tbody></table></td>
              <td background="images/boxrightBG.gif"></td>
            </tr>
            <tr>
              <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
              <td background="images/boxbtmBG.gif" width="734"></td>
              <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
            </tr>
          </tbody></table>
          <br>
          <br></td>
      </tr>
      <tr>
        <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
 </table></td>
  </tr>
</tbody></table>
</td></tr></tbody></table></body></html>