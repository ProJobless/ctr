<!doctype html>
<HTML lang="en-us">
	<HEAD>
		<meta charset="utf-8">
		<TITLE> CTR | Create Account</TITLE>
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
		{{Form::open(array('action'=>$postFunc))}}
		    <fieldset>
		    	<section>
				<label for="full_name">Full Name</label>
				<div><input type="text" id="full_name" class="full_name" placeholder="Full Name"/></div>
			</section>
			<section>
				<label for="username">Email</label>
				<div><input type="text" id="email" class="email"  placeholder="Email Address"/></div>
			</section>
			<section>
				<label for="username">Password</label>
				<div><input type="password" id="password" class="password" /></div>
			</section>
			<section>
				<div>
					<button class="fr submit">Create Account</button>
				</div>
			</section>
		   </fieldset>
		{{ Form::close() }}
	</section>
</body>
</HTML>
