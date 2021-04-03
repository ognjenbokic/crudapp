@extends('layouts.app')
@section('sadrzaj')
    </br>
    <a class="btn btn-primary" href="{{URL::previous()}}">Vrati se nazad</a>
    <hr>
    <div class="card">
        <div class="card-header">
            <h1>{{$jednaobjava->title}}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{$jednaobjava->body}}</p>
        </div>
        <hr>
        <small>Napisan je: {{$jednaobjava->created_at}}</small>
    </div>
    </br>
    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $jednaobjava->id], 'method'=>'DELETE'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Izbrisi Objavu', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection