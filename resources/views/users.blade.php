@extends('layout')

@section('content')
{{-- @include('header') --}}
{{-- @include('footer') --}}
{{-- <link href="{{ asset('css/style.css')}}"> --}}

@empty($users)
     <p>No hay usuarios registrados</p>
@else
<ul>
@foreach ($users as $user)
    <li> {{ $user }} </li>
@endforeach
</ul>
@endif


@for ($i = 0; $i <10; $i++)
    <li>   el valor actual es  {{ $i }} </li>
@endfor

<?php "hola desde php" ?>

Usuario Actual {{ $actualUser }}

@endsection
