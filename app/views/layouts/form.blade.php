@extends ('layouts.content')
@section('content')
{{ Form::open(array('action'=>$postFunc )) }}
	<fieldset>
		@yield('fields')
	</fieldset>
{{ Form::close() }}
@stop