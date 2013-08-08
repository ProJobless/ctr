<link rel="stylesheet" href="{{ URL::asset('http://fonts.googleapis.com/css?family=PT+Sans:regular,bold') }}">
{{ HTML::style('assets/css/style.css'); }}
{{ HTML::style('assets/css/light/theme.css'); }}
{{-- {{ HTML::style('assets/css/ie.css'); }} --}}

<!-- mobile stuff -->
<!-- Apple iOS and Android stuff -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="apple-touch-icon-precomposed" href="assets/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-startup-image" href="assets/img/startup.png" />
	<!-- Apple iOS and Android stuff - don't remove! -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />

<!-- End mobile stuff --> 
<!-- Javascripts -->
<!-- Use Google CDN for jQuery and jQuery UI -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
<!-- Loading JS Files this way is not recommended! Merge them but keep their order -->


<!-- some basic functions -->
	{{ HTML::script('assets/js/functions.js'); }}
           {{ HTML::script('assets/js/plugins.js'); }}
	{{ HTML::script('assets/js/editor.js'); }}
	{{ HTML::script('assets/js/calendar.js'); }}
	{{ HTML::script('assets/js/flot.js'); }}
	{{ HTML::script('assets/js/elfinder.js'); }}
	{{ HTML::script('assets/js/datatables.js'); }}
	{{ HTML::script('assets/js/wl_Alert.js'); }}
	{{ HTML::script('assets/js/wl_Autocomplete.js'); }}
	{{ HTML::script('assets/js/wl_Breadcrumb.js'); }}
	{{ HTML::script('assets/js/wl_Calendar.js'); }}
	{{ HTML::script('assets/js/wl_Chart.js'); }}
	{{ HTML::script('assets/js/wl_Color.js'); }}
	{{ HTML::script('assets/js/wl_Date.js'); }}
	{{ HTML::script('assets/js/wl_Editor.js'); }}
	{{ HTML::script('assets/js/wl_File.js'); }}
	{{ HTML::script('assets/js/wl_Dialog.js'); }}
	{{ HTML::script('assets/js/wl_Fileexplorer.js'); }}
	{{ HTML::script('assets/js/wl_Form.js'); }}
	{{ HTML::script('assets/js/wl_Gallery.js'); }}
	{{ HTML::script('assets/js/wl_Multiselect.js'); }}
	{{ HTML::script('assets/js/wl_Number.js'); }}
	{{ HTML::script('assets/js/wl_Password.js'); }}
	{{ HTML::script('assets/js/wl_Slider.js'); }}
	{{ HTML::script('assets/js/wl_Store.js'); }}
	{{ HTML::script('assets/js/wl_Time.js'); }}
	{{ HTML::script('assets/js/wl_Valid.js'); }}
	{{ HTML::script('assets/js/wl_Widget.js'); }}
	
	<!-- configuration to overwrite settings -->
	{{ HTML::script('assets/js/config.js'); }}
		
	<!-- the script which handles all the access to plugins etc... -->
	{{ HTML::script('assets/js/script.js'); }}
