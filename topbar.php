<style>
	.logo {
    margin: auto;
    font-size: 20px;
    /*background: white;*/
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-money-check-alt"></span>
  			</div>
  		</div>
      <div class="col-md-4 mt-2 float-left text-white">
        <large><b>Loan Management System</b></large>
      </div>
      <div class="col-md-2 mt-2 float-right text-white">
        <a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?>
        <a href="ajax.php?action=logout" class="text-white"><i class="fa fa-power-off"></i> Logout </a>
      </div>
    </div>
  </div>
  
</nav>