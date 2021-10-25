
	<div class="container">
		<form class="sign-in-form" action="#">
			<div class="card">
				<div class="card-body">
					<a href="#" class="brand text-center d-block m-b-20">
						<img src="../assets/img/qt-logo%402x.png" alt="QuantumPro Logo" />
					</a>
					<h5 class="sign-in-heading text-center m-b-20">Sign in to your account Now</h5>
					<div class="form-group">
						<label for="inputname" class="sr-only"> User Name</label>
						<input type="text" id="nam" class="form-control" placeholder="User Name" required="">
					</div>

					<div class="form-group">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="pass" class="form-control" placeholder="Password" required="">
					</div>
					<div class="checkbox m-b-10 m-t-20">
						<div class="custom-control custom-checkbox checkbox-primary form-check">
							<input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
							<label class="custom-control-label" for="stateCheck1">	Remember me</label>
						</div>
						<!-- <a href="auth.forgot-password.html" class="float-right">Forgot Password?</a> -->
					</div>
					<button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="button" id="submit">Sign In</button>
				 <p class="text-muted m-t-25 m-b-0 p-0"></p>
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').click(function(e) {
            e.preventDefault();

            var nam = $("#nam").val();
            var pass = $("#pass").val();
           

            var datastring = {
               
                nam: nam,
                pass: pass,
                
            };

            $.ajax({
                url: "<?=base_url();?>home/checking/",
                dataType: 'json',
                method: "POST",
                data: datastring,
                catch: false,
                success: function(data) {
					if (data.status == '0') {
                    location.replace(
                        '<?=base_url();?>/home/land');
                } else if (data.status == '2') {
                    alert('Please Enter Correct Details!!');
                } else {
                    alert('Try again');
                }
       
                }
            });
        });
    });
    </script>
	