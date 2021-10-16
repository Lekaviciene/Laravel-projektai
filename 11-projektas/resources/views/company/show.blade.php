@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{company->description}} {{$company->title}}</h2>
        <p>{{$company->id}}</p>
        <img scr="{{ $company->image_url }}" alt="{{ "company->title }}">


    </div>

@endsection
