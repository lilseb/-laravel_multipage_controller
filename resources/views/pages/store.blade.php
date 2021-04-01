@extends('layouts.index')
@section('content')

@foreach ($tabl as $table)
<p>{{$table->jour}}</p>
@endforeach
@endsection