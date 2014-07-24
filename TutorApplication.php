<html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Co   mpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Professor</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

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

<br>Availability
<div class="bodycontainer scrollable">
<table class="table table-hover table-striped table-condensed table-scrollable">
    <tr>
            <th width="17%">Time</th>
            <th width="17%">Monday</th>
            <th width="17%">Tuesday</th>
            <th width="17%">Wednesday</th>
            <th width="17%">Thursday</th>
            <th width="17%">Friday</th>
        </tr>
    <tbody>
    <th width="17%">9am</th>
    <th width="17%"><input type="checkbox" name="monday9AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday9AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday9AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday9AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday9AM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">10am</th>
    <th width="17%"><input type="checkbox" name="monday10AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday10AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday10AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday10AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday10AM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">11am</th>
    <th width="17%"><input type="checkbox" name="monday11AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday11AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday11AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday11AM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday11AM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">10pm</th>
    <th width="17%"><input type="checkbox" name="monday12PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday12PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday12PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday12PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday12PM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">1pm</th>
    <th width="17%"><input type="checkbox" name="monday1PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday1PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday1PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday1PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday1PM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">2pm</th>
    <th width="17%"><input type="checkbox" name="monday2PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday2PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday2PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday2PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday2PM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">3pm</th>
    <th width="17%"><input type="checkbox" name="monday3PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday3PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday3PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday3PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday3PM" value="1"></th>
    </tbody>
    <tbody>
    <th width="17%">4pm</th>
    <th width="17%"><input type="checkbox" name="monday4PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="tuesday4PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="wednesday4PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="thursday4PM" value="1"></th>
    <th width="17%"><input type="checkbox" name="friday4PM" value="1"></th>
    </tbody>
</table>
</div>
<table class="table table-hover table-striped table-condensed">
</table>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>