<?php include('header.php');
$obj->client_login();
?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="#"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">Register</span>
<h2 class="entry-title">Register Page</h2>
</div>
</div>
</div>
</div>
</div>


<div id="content">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-6 col-lg-offset-3">
<div class="login">
<div class="login-form-container">
<div class="login-text">
<h3>Login</h3>
<p>.</p>
</div>

<form class="login-form" role="form" method="post">
<div class="form-group">
<div class="controls">
<input type="text" class="form-control" name="email" placeholder="Enter Email">
</div>
</div>

<div class="form-group">
<div class="controls">
<input type="Password" class="form-control" placeholder="Enter Password" name="psw">
</div>
</div>
 
<div class="button-box">
<button type="submit" class="btn btn-common log-btn" name="btn_login">Login</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>



<?php include('footer.php');?>