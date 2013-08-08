@extends ('layouts.form')
<!-- Form Fields-->
@section('fields')

<label>Client Details</label>
<section>
{{ Form::label('full_name', 'Full Name'); }}
<div>{{ Form::text('full_name', null, array('placeholder'=>'Full Name' )); }}</div>
</section>

<section>
{{ Form::label('phone', 'Phone Number'); }}
<div>{{ Form::text('phone', null, array('placeholder'=>'Phone Number' )); }}</div>
</section>

<section>
{{ Form::label('twitter', 'Twitter'); }}
<div>{{ Form::text('twitter', null, array('placeholder'=>'Twitter' )); }}</div>
</section>

<section>
{{ Form::label('facebook', 'Facebook'); }}
<div>{{ Form::text('facebook', null, array('placeholder'=>'Facebook' )); }}</div>
</section>

<section>
{{ Form::label('google_plus', 'Google +'); }}
<div>{{ Form::text('google_plus', null, array('placeholder'=>'Google+' )); }}</div>
</section>

<section>
	<label></label>
	<div>{{ Form::button('Save Contact', array('class'=>'submit')); }}</div>
</section>
@stop
<!-- End form fields -->