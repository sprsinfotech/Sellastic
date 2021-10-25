<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register page| Sign Up</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/vendor/switchery-npm/index.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/icons/line-awesome.min.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/icons/material-design-iconic-font.min.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/layouts/vertical/menu-type/default.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/layouts/vertical/themes/theme-a.css">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=JQAbrcy49KyxFteiWLPt7-tdhMCpp0irs3F4_2Ke9qP5VPm8s-eZT2Fd2h6zJT1DYl0xQbO8UF6gAnf8gU658JwizYZd1Lf9NZH1bGqnM2bChr6rd4atQoxk2d82Te8U" charset="UTF-8"></script></head>

<body>
	<div class="container">
		<form class="sign-in-form" action="index.html">
			<div class="card">
				<div class="card-body">
					<a href="index.html" class="brand text-center d-block m-b-20">
						<img src="<?=base_url();?>/assets/img/qt-logo@2x.png" alt="QuantumPro Logo" />
					</a>
					<h5 class="sign-in-heading text-center m-b-20">Create an account</h5>
					<div class="form-group">
						<label for="sponser-id" class="sr-only" width="50%">Sponsor Id</label>
						<input type="charecter" id="inputName" class="form-control" placeholder="Sponsor Id" required="">
					</div>
					<div class="form-group">
						<label for="input-name" class="sr-only" width="50%">Sponsor Name</label>
						<input type="text" id="inputName" class="form-control" placeholder="Sponsor Name" required="">
					</div>
					<div class="form-group">
						<label for="user-id" class="sr-only">User Id</label>
						<input type="charecter" id="inputPassword" class="form-control" placeholder="User Id" required="">
					</div>
					<div class="form-group">
						<label for="input-name" class="sr-only">First Name</label>
						<input type="text" id="inputConfirmPassword" class="form-control" placeholder="First Name" required="">
					</div>
					
						<div class="form-group">
						<label for="inputname" class="sr-only">Last Name</label>
						<input type="text" id="inputName" class="form-control" placeholder="Last Name" required="">
					</div>
					<div class="form-group">
						<label for="inputEmail" class="sr-only">E-mail</label>
						<input type="email" id="inputName" class="form-control" placeholder="E-mail" required="">
					</div>
					<div class="form-group">
						<label for="inputEmail" class="sr-only">Mobile No</label>
						<input type="phone-number" id="inputName" class="form-control" placeholder="Mobile No" required="">
					</div>
					<div class="form-group">
					<label for="inputEmail" class="sr-only">Select State</label>
					<select name="ddlState" id="ddlState" class="form-control" placeholder="Select State" aria-invalid="false">
<option selected="selected" value="Select State" > Select State
</option>
<option value="11">ANDHRA PRADESH</option>
<option value="32">ANDOMAN NIKOBAR</option>
<option value="27">ARUNACHAL PRADESH</option>
<option value="28">ASSAM</option>
<option value="6">BIHAR</option>
<option value="30">CHANDIGARH</option>
<option value="18">CHHATTISGARH</option>
<option value="79">DAMAN</option>
<option value="78">DELHI</option>
<option value="20">GUJRAT</option>
<option value="7">HARYANA</option>
<option value="17">HIMANCHAL PRADESH</option>
<option value="13">J &amp; K</option>
<option value="12">JHAR KHAND</option>
<option value="14">KARNATAKA</option>
<option value="15">KERALA</option>
<option value="31">LAKSHADWEEP</option>
<option value="3">M.P.</option>
<option value="9">MAHARASHTRA</option>
<option value="26">MANIPUR</option>
<option value="22">MEGHALAYA</option>
<option value="23">MIJORAM</option>
<option value="24">NAGALAND</option>
<option value="5">NEW DELHI</option>
<option value="10">ORISSA</option>
<option value="2">PUNJAB</option>
<option value="8">RAJASTHAN</option>
<option value="21">SIKKIM</option>
<option value="16">TAMIL NADU</option>
<option value="80">TELANGANA</option>
<option value="25">TRIPURA</option>
<option value="1">UTTAR PRADESH</option>
 <option value="4">UTTARAKHAND</option>
<option value="19">WEST BENGAL</option>

</select>
						
					</div>
					<div class="form-group">
						<label for="inputEmail" class="sr-only">Country Name</label>
						<input type="text" id="inputName" class="form-control" placeholder="Country Name" required="">
					</div>
					<div class="form-group">
						<label for="inputEmail" class="sr-only">City Name</label>
						<input type="text" id="inputName" class="form-control" placeholder="City Name" required="">
					</div>
					<div class="form-group">
						<label for="inputpassword" class="sr-only">Password</label>
						<input type="password" id="inputName" class="form-control" placeholder="Password" required="">
					</div>
					<div class="form-group">
						<label for="inputpassword" class="sr-only">Re-type Password</label>
						<input type="password" id="inputName" class="form-control" placeholder="Re-type Password" required="">
					</div>
					<div class="checkbox m-b-10 m-t-15">
						<div class="custom-control custom-checkbox checkbox-primary form-check">
							<input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
							<label class="custom-control-label" for="stateCheck1">	I accept the <a href="javascript:void(0)">terms and conditions</a></label>
						</div>
					<div>
					<button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Create My Account</button>
					 <p class="text-muted m-t-25 m-b-0 p-0">Already have an account?<a href="auth.sign-in.html"> Sign In</a></p>
				</div>

			</div>
		</form>
	</div>

	<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
	<script src="<?=base_url();?>/assets/vendor/modernizr/modernizr.custom.js"></script>
	<script src="<?=base_url();?>/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url();?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url();?>/assets/vendor/js-storage/js.storage.js"></script>
	<script src="<?=base_url();?>/assets/vendor/js-cookie/src/js.cookie.js"></script>
	<script src="<?=base_url();?>/assets/vendor/pace/pace.js"></script>
	<script src="<?=base_url();?>/assets/vendor/metismenu/dist/metisMenu.js"></script>
	<script src="<?=base_url();?>/assets/vendor/switchery-npm/index.js"></script>
	<script src="<?=base_url();?>/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- ================== GLOBAL APP SCRIPTS ==================-->
	<script src="<?=base_url();?>/assets/js/global/app.js"></script>

</body>

</html>