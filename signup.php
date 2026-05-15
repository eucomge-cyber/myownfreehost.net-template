<?PHP
$id = md5(rand(6000,PHP_INT_MAX));
?>
<?
include('geturl.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?echo $yourdomain;?></title>
<meta name="description" content="Free web hosting with PHP and MySQL">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"> 
<link href="bootstrap.min.css" rel="stylesheet">
<style>
.block { background-color: #f1f1f1; border: 1px; border-style: solid; border-color: #e1e1e1; border-radius: 5px 5px 5px 5px; padding: 5px; margin: 5px; }
</style>
<script type="text/javascript">
var searchWinHref = window.location.href;
   if(searchWinHref.indexOf("?i") > -1) { 
   window.location.href = window.location.href.split('?')[0];
   }
</script>
</head>
<body>
<a href="/index.php" class="btn btn-primary btn-block"><?echo $yourdomain;?></a><br>
<div class="container"><div class="row"><div class="col-md-6"><p>
<form class="block" action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login" >
<p><div class="btn btn-secondary disabled">Login</div></p>
<p><input class="form-control" placeholder="Username" name="uname" type="text" alt="username" required></p>
<p><input class="form-control" placeholder="Password" type="password" name="passwd" alt="password" required></p>
<p><input type="submit" name="Submit" value="Sign In" class="btn btn-primary"/></p>
</form></p></br></div>
<div class="col-md-6"><p>
<form class="block" method=post action="http://order.<?echo $yourdomain;?>/register2.php">
<p><div class="btn btn-secondary disabled">Register</div></p>
<p><table style="width:100%;"><tr><td><input class="form-control" placeholder="Subdomain" type=text name=username value="" pattern="[a-z0-9]{4,16}" minlength="4" maxlength="16" required></td><td><span class="btn btn-default disabled">.<? echo "$yourdomain" ;?></span></td></tr></table></p>
<p><input class="form-control" placeholder="Password" type=password name=password minlength="6" maxlength="16" required></p>
<p><input class="form-control" placeholder="Email Address" type=email name=email pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" value="" required></p>		
<p><input type=hidden name=id value="<?PHP echo $id; ?>">
<p><table><tr><td><img class="btn btn-secondary disabled" src="http://order.<? echo "$yourdomain" ;?>/image.php?id=<?PHP echo $id; ?>"></td><td>
<input class="form-control" placeholder="Captcha" type=text name=number required></td>
</tr></table></p>
<center><p><button type="submit" class="btn btn-primary">Sign Up</button></p></center>
</form></br></p></br></div></br>
</br></div></br>
<footer class="footer navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-inner navbar-content-center" style="padding-top:15px;">
            <ul class="navbar-left list-inline text-center text-muted credit"><li>&copy; 2026 <a href="http://<? echo "$yourdomain" ;?>"><small><? echo "$yourdomain" ;?></small></a></li></ul>
            </ul>
             <ul class="navbar-right list-inline text-center text-muted credit">
                <li>
                <!-- TOP.GE ASYNC COUNTER CODE -->
                <div id="top-ge-counter-container" data-site-id="116491"></div>
                <script async src="//counter.top.ge/counter.js"></script>
                <!-- / END OF TOP.GE COUNTER CODE -->
                </li>
            </ul> 
</div>
</body>
</html>


