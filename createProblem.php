
<!DOCTYPE html>
<html>
<head>
<title>Log In Form</title>
<link rel="stylesheet" type="text/css" href="css1/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body >
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Report Generate Form</h1>
     
        <div class="main-agileinfo">
            <div class="agileits-top">
                   <h4 style="color: #FFCC00  " >Submit your problem publicly</h4>
                <form action="userProfile.php" method="post">
                    
                    <input class="text " type="text" name="problemtitle" placeholder="Problem Title" required="">
                    <input class="text" type="text" name="problemdescription" placeholder="Problem Description" required="">
                    <input class="text" type="text" name="suggested solution" placeholder="Suggested Solution" required="">

                    <div style="margin-top: 10px" class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>If not public submit anonymously</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                  <input type="submit" value="SUBMIT">
                </form>
               
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2020 </p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>
</html>