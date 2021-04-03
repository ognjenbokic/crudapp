@extends('layouts.app')
@section('sadrzaj')
<h1>Nase objave</h1>
@if(count($postovi)>0)
    @foreach($postovi as $nasipostovi)
        <div class="card p-4">
            <h3><a href="strposts/{{$nasipostovi->id}}">{{$nasipostovi->title}}</a></h3>
            <small>Napisan je: {{$nasipostovi->created_at}}</small>
        </div>
    </br>
    @endforeach
    {{$postovi->Links()}}
    @else
        <p>Nije pronađena nijedna objava.</p>
    @endif
@endsection