<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
<head>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css"  />
<link href="CSS/menu.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>

<body>
<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
	
    <nav>
   	  <ul>
        	<li> <a href="#">Login </a></li>
            <li> <a href="#">Register </a></li>
            <li> <a href="#">Forgot Password</a></li>
        </ul>
    </nav>
</div>            
<div id="Content">
	<div id="PageHeading">
	  <h1>Registration Form</h1>
	</div>
	<div id="ContentLeft">
	  <h2>Please Fill the details</h2><br>
	</div>
	<div id="ContentRight">
  <form id="RegisterForm" name="RegisterForm" method="post" action="">
    <table width="400" border="0" align="center">
      <tr>
        <td><table width="0" border="0">
          <tr>
            <td><h6><span id="sprytextfield1">
              <label for="FName"></label>
              First Name:<br />
              <br />
  <input name="FName" type="text" class="StyleTxtField" id="FName" />
            </span></h6>
              <span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
            <td><h6><span id="sprytextfield2">
              <label for="LName"></label>
              Last Name:<br />
              <br />
  <input name="LName" type="text" class="StyleTxtField" id="LName" />
            </span></h6>
              <span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h6><span id="sprytextfield3">
          <label for="Email"></label>
          Email:<br />
  <br />
  <input name="Email" type="text" class="StyleTxtField" id="Email" />
        </span></h6>
          <span><span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h6><span id="sprytextfield4">
          <label for="UserName"></label>
          User Name:<br />
          <br />
  <input name="UserName" type="text" class="StyleTxtField" id="UserName" />
        </span></h6>
          <span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="0" border="0">
          <tr>
            <td><h6><span id="sprypassword1">
              <label for="Password"></label>
              Password
              <br />
              <br />
  <input name="Password" type="password" class="StyleTxtField" id="Password" />
            </span></h6>
              <span><span class="passwordRequiredMsg">A value is required.</span></span></td>
            <td><h6><span id="spryconfirm1">
              <label for="PasswordConfirm"></label>
              Confirm Password<br />
              <br />
  <input name="PasswordConfirm" type="password" class="StyleTxtField" id="PasswordConfirm" />
            </span></h6>
              <span><span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><input type="submit" name="RegisterButton" id="RegisterButton" value="Register" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "Password");
</script>
</body>
</html>