@extends('layouts.house_plantilla')
@php
    session_start();    
@endphp
@section('content')
<div class="container">
    <div class= "row">
        <div class="col-md-4">
                <img src="{{$house[0]->hou_img}}" alt="" width="250px" height="325px">
        </div>
        <div class="col-md-8">
            <div class="row">
                <h3>{{$house[0]->hou_title}}</h3>
            </div>
            <p>Localidad: {{$loc_description}}</p>
            <p>{{$house[0]->hou_description}}</p>
            <section>Precio: {{$house[0]->hou_price}}</section>
            <p>Oferta: {{$house[0]->hou_ofe}}</p>
            <button><a href="{{route('tuto')}}">Return</a></button>
        </div>
    </div>
</div>
@endsection
@section('comments')
    @if (isset($_SESSION['user']))
    <div>
        <h6>Añadir comentario</h6>
        <form action="{{route('comment', $house[0]->hou_id)}}" method="GET">
            <textarea name="com_desc" cols="30" rows="10">

            </textarea>
            <button type="submit">Enviar comentario</button>
        </form>
    </div>
    @endif
    <div>
        @if (strlen($comments) < 4)
            <div>
                No hay commentarios!
            </div>
        @endif
        @foreach ($comments as $comment)
            <div>
                <h5>Author: {{$comment->com_author}}</h5>
                <p>-> {{$comment->com_desc}}</p>
                <p>Date: {{$comment->com_date}}</p>
            </div>
        @endforeach
    </div>
@endsection