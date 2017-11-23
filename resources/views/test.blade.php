@extends('layout.app')

@section('content')
<h1>this is test for layout</h1>
@include('pages.contact')

<hr>
@if(count($arr))

<ul>
	
	@foreach($arr as $val)

		<li>{{ $val }}</li>

	@endforeach

</ul>

@endif

@endsection

@section('footer')
	<script>alert('hello')</script>
@endsection

