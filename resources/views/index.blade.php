@extends('layout')
@section('content')
<div class ="jumbotron">
    <p class ="h3 text-center py-4 "> Quiz - O que você sabe sobre o Spider-Man!</p >
 </div >
 <div class ="row">
    <div class ="col-md-6 col-sm-6 text-center imagem ">
        <a href ="# " class =" img-thumbnail logo ">
            <img class =" img-fluid " src =" {{ asset ('storage/imagem/logo.jpg')}}"/>
        </a>
    </div>
    <div class ="col-md-6 col-sm-6 text-center py-4">
        <p class ="texto">
            <h4> Este quiz é para saber o quanto voce sabe sobre o incrível <br>
                <strong>HOMEN - ARANHA ! </strong></h4>
        </p>
        <div class ="card-footer py-4 text-center " >
            <a href ="/iniciar" class ="btn btn-primary" role ="button">Iniciar</a >
        </div >
    </div >
 </div >
@endsection