<html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Co   mpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Tutor Schedual Finder</title>

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
<legend>Schedual Finder</legend>

<div class='container'>
    <label for='gtId' >GTiD*: </label><br/>
    <input type='number' name='gtId' id='gtId' value='<?php echo htmlentities($_POST[$firstName]) ?>' maxlength="9" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>


</fieldset>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>