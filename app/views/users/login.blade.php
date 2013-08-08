<!doctype html>
<HTML lang="en-us">
	<HEAD>
		<meta charset="utf-8">
		<TITLE> CTR | Login</TITLE>
		@include('layouts.includes')
		<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	</HEAD>

  <body id="login" style="opacity: 1;">
	<header>
		<div id="logo"><a href=""></a></div>
	</header>
	<section id="content">
		{{ Form::open(array('route'=>'login', 'id'=>'loginform', 'method'=>'POST')) }}
		    <fieldset>
			<section>
				<label for="username">Email</label>
				<div><input type="text" id="email" class="email" /></div>
			</section>
			<section>
				<label for="username">Password</label>
				<div><input type="password" id="password" class="password" /></div>
				<!-- Remember Me widget-->
				<div>
					<div id="uniform-remember" class="checker">
						<span>
							<input type="checkbox" id="remember" name="remember" style="opacity: 0;" />
						</span>
					</div>
					<label for="remember" class="checkbox">remember me</label>
				</div>
			</section>
			<section>
				<div>
					<button class="fr submit">login</button>
				</div>
			</section>
		   </fieldset>
		</form>
	</section>
</body>
</HTML>
