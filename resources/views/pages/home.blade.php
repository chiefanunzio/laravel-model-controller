@extends('layouts.main-layout')
@section('content')


<div>

    <ul>
        @foreach ($move as $item)
            
        <li>
            <a href="{{route('elem',$item ->id )}}">{{$item -> id}}  {{$item -> title}}</a>
        </li>
        @endforeach
    </ul>
</div>


@endsection