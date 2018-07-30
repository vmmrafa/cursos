@extends('layout.app')
@section('title', 'Lista de Cursos')
@section('csspersonalizado')
    <link rel="stylesheet" type="text/css" href="{{URL('/css/cursos/curso.css')}}">
@endsection
@section('content')
<div class="azul">
    <div class=" col-md-12 d-flex flex-column  align-items-left p-4 px-md-4 mb-3 bg-info border-bottom box-shadow">
        <div class="row">
            <div class="col-md-2 text-white">
                <a href="{{URL('curso')}}" class="text-white">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</div>
    <div class="conteudocurso">
        <div class="col-10 card-deck bg-white  ">
            <div class="col-12 card-title">
                <h2>{{$curso->title}}</h2>
            </div>
            <div class="cinzaa">
                <div class="col-12 descricaocurso ">
                    <span>{{$curso->description}}</span>
                </div>
            
                <div class="col-12 descricaocurso ">
                    <i class="far fa-calendar-alt"></i>
                    {{date('d/m/Y', strtotime($curso->startt))}}
                </div>
                <div class="col-12 descricaocurso ">
                    <i class="far fa-clock fa2"></i>
                    {{date('H:i:s', strtotime($curso->startt))}}
                </div>
                <div class="col-12 descricaocurso ">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="#" style="text-decoration: underline;">
                        Av. Barão Homem de Melo
                    </a>
                </div>
                <div class="col-12 descricaocurso ">
                    <i class="fas fa-dollar-sign"></i>    
                    {{$curso->price}}
                </div>
                
                <div class="col-12 descricaocurso ">
                    <i class="fas fa-caret-right"></i>    
                    {{$curso->category}}
                </div><br>
                <div class="col-12 descricaocurso ">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY3hwMs5sOV9ndq_abhaWTGeEmyDy-b3YIfLm7_ZoDVd7lTnWLgQ" />
                    Melinda Perez
                </div>   
            </div>
                <div class="botaoCentro">
                    <button type="button" class="botaoinscricao">INSCRIÇÃO</button>
                </div>
            
        </div>
    </div>
@endsection