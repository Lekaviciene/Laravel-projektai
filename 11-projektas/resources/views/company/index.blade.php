@extends('layouts.app')

@section('content')

<div class="container">

<a class="btn btn-primary" href="{{route('company.create')}}">Create Company</a>
<table class="table table->striped">

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
      

    </tr>

    @foreach($companies as $company)
    <tr>
        <td>{{$company->id}}</td>
        <td>{{$company->title}}</td>
        <td>{{$company->description}}</td>
        {{--<td>
            <a class="btn btn-primary" href="{{route('company.show',[&company])}}">Show</a>
        </td>--}}
      {{--<td><img scr="{{ $company->image_url }}" alt="{{ "company->title }}"/></td>--}}
    </tr>
    @endforeach

</table>
</dv>



@endsection


