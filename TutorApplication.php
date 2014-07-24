

<div id='fg_membersite'>
<form id='register' action='<?php echo placeholder->yo; ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>



<div class='container'>
    <label for='firstName' >First Name*: </label><br/>
    <input type='text' name='firstName' id='firstName' value='<?php echo htmlentities($_POST[$firstName]) ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='lastName' >Last Name*: </label><br/>
    <input type='text' name='lastName' id='lastName' value='<?php echo htmlentities($_POST[$lastName]) ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='email' name='email' id='email' value='<?php echo  htmlentities($_POST[$email]) ?>' /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='gpa' >GPA*:</label><br/>
    <input type='number' step='any' name='gpa' id='gpa' value='<?php echo htmlentities($_POST[$gpa]) ?>' /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='telephone' >Telephone*:</label><br/>
    <input type='tel' name='telephone' id='telephone' value='<?php echo htmlentities($_POST[$telephone]) ?>' /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='telephone' >Degree Level*:</label><br/>
    <input type="radio" name="degree" value="1">Graduate<br/>
    <input type="radio" name="degree" value="0">UnderGraduate<br/>
    <span id='register_username_errorloc' class='error'></span>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>