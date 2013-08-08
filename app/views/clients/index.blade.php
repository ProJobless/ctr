@extends ('layouts.table')

@section('tableheaders')
 <tr>
	<th>Name</th>
	<th>Phone</th>
	<th>Facebook</th>
	<th>Twitter</th>
	<th>Google+</th>
 </tr>
@stop
@section('tablecontent')
@foreach ($clients as $client):
<tr class="gradeA">
<td>{{ $client->full_name}}</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
@endforeach
@stop