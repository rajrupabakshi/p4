@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $client->name }}
@endsection
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">

    <h3 class="alert alert-danger"> <img src="/images/danger.png" alt="delete icon"> &nbsp;Confirm Deletion</h3>
    <form method='POST' action='/clients/{{ $client->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}
        <h3>Are you sure you want to permanently delete client <em>{{ $client->name }}</em>?</h3>
		<button class="btn btn-danger" type='submit' value='Yes'>YES</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn btn-danger"> <a class='button' href='/clients/'>NO</a></button>
        {{-- <input type='submit' value='Yes'> --}}
        
    </form>
</div>
</div>
</div>
@endsection