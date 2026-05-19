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
<script src="bootstrap.bundle.min.js"></script>
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
<body class="d-flex flex-column min-vh-100">
<div class="container">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <table style="width:100%;"><tr><td><p align="left"><a class="navbar-brand" href="/index.php"><b><big>EU<font color="gray">.COM.GE</font></big></b></a></p></td><td>
        <p align="right"><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button></p></td></tr></table>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span><a class="nav-link btn btn-light" data-bs-toggle="modal" data-bs-target="#features" href="#">Features</a></span>
                </li>
                <li class="nav-item">
                    <span><a class="nav-link btn btn-light" href="https://ifastnet.com/portal/aff.php?aff=30660">Premium</a></span>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
<main class="flex-grow-1">
<div class="row"><div class="col-md-6">
<form class="block" action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login" >
<p><div class="btn btn-light disabled">Login</div></p>
<p><input class="form-control" placeholder="Username" name="uname" type="text" alt="username" required></p>
<p><input class="form-control" placeholder="Password" type="password" name="passwd" alt="password" required></p>
<p><input type="submit" name="Submit" value="Sign In" class="btn btn-primary"/></p>
</form></br></div>
<div class="col-md-6">
<form class="block" method=post action="http://order.<?echo $yourdomain;?>/register2.php">
<p><div class="btn btn-light disabled">Register</div></p>
<p><table style="width:100%;"><tr><td><input class="form-control" placeholder="Subdomain" type=text name=username value="" pattern="[a-z0-9]{4,16}" minlength="4" maxlength="16" required></td><td><span class="btn btn-default disabled">.<? echo "$yourdomain" ;?></span></td></tr></table></p>
<p><input class="form-control" placeholder="Password" type=password name=password minlength="6" maxlength="16" required></p>
<p><input class="form-control" placeholder="Email Address" type=email name=email pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" value="" required></p>		
<p><input type=hidden name=id value="<?PHP echo $id; ?>">
<p><table><tr><td><img class="btn btn-light disabled" src="http://order.<? echo "$yourdomain" ;?>/image.php?id=<?PHP echo $id; ?>"></td><td>
<input class="form-control" placeholder="Captcha" type=text name=number required></td>
</tr></table></p>
<p align="center"><button type="submit" class="btn btn-primary">Sign Up</button></p>
</form></div></main>
<footer class="bg-light py-3">
<div style="text-align: right;"><p><?php include "counter.php"; ?></p></div>
</div></footer>
    <div class="modal fade" id="features" tabindex="-1" aria-labelledby="featuresLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="featuresLabel">Features</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    5GB Disk Space<hr>
                    Unlimited Traffic<hr>
                    Free Subdomain .<? echo "$yourdomain" ;?><hr>
                    Daily Hits Limit 50000<hr>
                    PHP Version 8.3
                </div>
                  <div class="modal-footer">
                    <b>$</b><font color="red">0.00</font>/mo.
                </div>
            </div>
        </div>
    </div>
</body>
</html>


