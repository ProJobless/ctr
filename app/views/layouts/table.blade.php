@extends ('layouts.content')
@section('content')
<table class="datatable">
	<thead>
		<tr>
			@yield('tableheaders')
			<!-- display the headers -->
		</tr>
	</thead>
	<tbody>
		@yield('tablecontent')
		<!-- Display rows from the controller -->
	</tbody>
</table>
@stop