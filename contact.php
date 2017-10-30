<?php
if(isset($_POST['submit']))
{
alert("Thanks, We Will COntact You Soon!!") ;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->

     <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>
      <link rel="stylesheet" href="home.css">
      <link rel="stylesheet" href="contact.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="utf-8">
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
    <div class="Top">
        <a href="home.html">
          <div><img src="logo.png" alt="Herbalife Logo" height="110%" width="110%"></div>
        </a>
        <div class="Top-1" >Contact US</div>
    </div>


  <nav class="navbar-default navbar-fixed-default">

    <ul class="nav nav-tabs">
      <ul class="nav nav-pills " >
        <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target ="#bs-example-navbar-collapse-1" aria-expanded="false" name="button"></button> -->
        <!-- <span class="sr-only">Toggle Navigation</span> -->
        <!-- <span class="icon-bar"></span> -->
        <!-- <span class="icon-bar"></span> -->
        <!-- <span class="icon-bar"></span> -->
        <!-- </button> -->
        <li role="presentation"  ><a href="home.html">Home</a></li>

        <li role="presentation">
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Our Products
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Food products</a></li>
          <li><a href="#">Energy and Fitness</a></li>
          <li><a href="#">Targetted Nutrition</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
          </ul>
          </div>
        </li>
        <li role="presentation" class="active"><a href="contact.html">Contact us</a></li>
          </ul></ul></nav>


      
      </div>
        <!-- <div class="mid"> --><!--  -->
       <div class="container">

<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type=hidden name='captcha_settings' value='{"keyname":"captcha","fallback":"true","orgId":"00D7F000000zI7R","ts":""}'>
<input type=hidden name="oid" value="00D7F000000zI7R">
<input type=hidden name="retURL" value="https://sancool1995.000webhostapp.com/contact.php">
<!-- <label for="first_name"><div class="error"><strong>Enter Your Name</strong> <p></p></div></label><input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" /><br> -->


<label for="first_name">First Name</label><input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" required /><br>

<label for="last_name">Last Name</label><input  id="last_name"  class="form-control" maxlength="80" name="last_name" size="20" type="text" required/><br>

<label for="email">Email</label><input  id="email" maxlength="80" class="form-control"  name="email" size="20" type="email" required /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40"  class="form-control" name="phone" size="20" type="number" required/><br>

<label for="city">City</label><input  id="city" maxlength="40" class="form-control"  name="city" size="20" type="text" required/><br>

<label for="state">State/Province</label><input  id="state" maxlength="20" class="form-control"  name="state" size="20" type="text" required /><br>

<label for="country">Country</label><input  id="country" maxlength="40" class="form-control"  name="country" size="20" type="text" required /><br>

<label for="zip">Zip</label><input  id="zip" maxlength="20" name="zip"  class="form-control" size="20" type="number" required/><br>

<label for="Issue">Query/Issue</label><textarea  class="form-control" name="description" required></textarea><br>

<label for="Are You Satisfied With Our Products">Are You Satisfied With Our Products</label><select  class="form-control"  id="rating" name="rating" required><option value="">--None--</option><option value="Satisfied">Satisfied</option>
<option value="Dissatisfied">Dissatisfied</option>
<option value="Neutral">Neutral</option>
</select><br>



<input type="submit"  class="form-control" name="submit" required>

</form>
<!-- <label for="last_name">Last Name</label><input  id="last_name" class="form-control"  maxlength="80" name="last_name" size="20" type="text" /><br>

<label for="email">Email</label><input  id="email"  class="form-control" maxlength="80" name="email" size="20" type="text" /><br>

<label for="phone">Phone</label><input  id="phone"  class="form-control" maxlength="40" name="phone" size="20" type="text" /><br>

<label for="city">City</label><input  id="city" class="form-control"  maxlength="40" name="city" size="20" type="text" /><br>

<label for="state">State/Province</label><input  id="state" class="form-control"  maxlength="20" name="state" size="20" type="text" /><br>

<label for="country">Country</label><input  id="country" class="form-control" maxlength="40" name="country" size="20" type="text" /><br>

<label for="zip">Zip</label><input  id="zip" class="form-control"  maxlength="20" name="zip" size="20" type="text" /><br>

<label for="description">Description</label><textarea class="form-control"  name="description"></textarea><br>

Are You Satisfied With Our Products?:<select  id="00N7F000003dFjX" name="00N7F000003dFjX" title="Product Interest" class="form-control"><option value="">--None--</option><option value="Satisfied">Satisfied</option>
<option value="Dissatisfied">Dissatisfied</option>
<option value="Neutral">Neutral</option>
</select><br>
<br>
<input type="submit" name="submit" class="form-control">

 -->
</form>
<footer style="padding: 20px; border-top: 1px solid #eee; margin-top: 25px;">
  <div class="container">
  <div class="text-muted text-center">
    Copyright © Sanchit Aggarwal<br><center>#9560766238</center>
  </div>
    </div>
</footer>
  </body>
</html>
