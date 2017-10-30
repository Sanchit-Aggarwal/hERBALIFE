<?php
$fnameerror='';
$lnameerror='';
$emailerror='';
$phoneerror='';
$cityerror='';
$stateerror='';
$countryerror='';
$ziperror='';
$descriptionerror='';
if(isset($_POST["submit"]))
{
//FIRST NAME VALIDATION
if(!empty($_POST['first_name']))
{
 if(!preg_match("/^[A-Za-z. ]*$/",$_POST['first_name']))
  {
      $fnameerror="ONLY ALPHABETS AND WHITE SPACES ARE ALLOWED";
  }
}
//lAST NAME VALIDATION 
if(!empty($_POST['last_name']))
{
 if(!preg_match("/^[A-Za-z. ]*$/",$_POST['last_name']))
  {
      $lnameerror="ONLY ALPHABETS AND WHITE SPACES ARE ALLOWED";
  }
}
}
function viewmessage($data)
{
return $data;
}
?>




<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="validation.css">
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">   <!-- salesforce linkage -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

<!-- <div class="navbar-header"> -->
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
          </ul>


      
      </div>
        <!-- <div class="mid"> -->
       <div class="container">

<form action="validation.php" method="POST">

<input type=hidden name="oid" value="00D7F000000sO42">
<input type=hidden name="retURL" value="contact.html">





<label for="first_name"><div class="error"><strong>First Name *</strong><span class="fontcorr"><?php echo $fnameerror;?></span><p></p></div></label><input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" placeholder="Enter First Name" required/><br>


<label for="last_name">Last Name *</label><span class="errcol"><?php echo $lnameerror;?></span><input  id="last_name" class="form-control"  maxlength="80" name="last_name" size="20" type="text"  placeholder="Enter Last Name" required/><br>

<label for="email">Email</label><input  id="email"  class="form-control" maxlength="80" name="email" size="20" type="text" placeholder="Enter Email ID" required /><br>

<label for="phone">Phone</label><input  id="phone"  class="form-control" maxlength="40" name="phone" size="20" type="text" placeholder="Enter Phone No." required /><br>

<label for="city">City</label><input  id="city" class="form-control"  maxlength="40" name="city" size="20" type="text" placeholder="Enter City" required /><br>

<label for="state">State/Province</label><input  id="state" class="form-control"  maxlength="20" name="state" size="20" type="text" placeholder="Enter State" required /><br>

<label for="country">Country</label><input  id="country"  class="form-control" maxlength="40" name="country" size="20" type="text"  placeholder="Enter Country" required/><br>

<label for="zip">Zip</label><input  id="zip" class="form-control"  maxlength="20" name="zip" size="20" type="text"  placeholder="Enter Zip Code" required/><br>

<label for="description">Description</label><textarea class="form-control"  name="description" placeholder="Describe Your Query" required></textarea><br>

Are You Satisfied With Our Products?:<select  id="00N7F000003dFjX" name="00N7F000003dFjX" title="Product Interest"><option value="">--None--</option><option value="Satisfied">Satisfied</option>
<option value="Dissatisfied">Dissatisfied</option>
<option value="Neutral">Neutral</option>
</select><br>

<input type="submit" name="submit">

</form>

  </body>
</html>
