
<?php 
include("includes/db.php");
?>
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
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Log In Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="post">
                    
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <div class="wthree-text">
                       
                        <div class="clear"> </div>
                    </div>
                  <input type="submit" name="login" value="login">
                </form>

                
        <?php 
    if(isset($_POST['login'])){
    
        $c_email = $_POST['email'];
        $c_pass = $_POST['pass'];
        
        $sel_c = "select * from student_details where email='$email' AND password='$password'";
        
        $run_c = mysqli_query($con, $sel_c);
        
        $check_student = mysqli_num_rows($run_c); 
        
        if($check_student==0){
        
        echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
        exit();
        }
        $ip = getIp(); 
        
        $sel_cart = "select * from cart where ip_add='$ip'";
        
        $run_cart = mysqli_query($con, $sel_cart); 
        
        $check_cart = mysqli_num_rows($run_cart); 
        
        if($check_customer>0 AND $check_cart==0){
        
        $_SESSION['customer_email']=$c_email; 
        
        echo "<script>alert('You logged in successfully, Thanks!')</script>";
        echo "<script>window.open('customer/my_account.php','_self')</script>";
        
        }
        else {
        $_SESSION['customer_email']=$c_email; 
        
        echo "<script>alert('You logged in successfully, Thanks!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
        
        
        }
    }
    ?>
                <p>Don't have an Account? <a href="signup.php"> Sign Up Now!</a></p>
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