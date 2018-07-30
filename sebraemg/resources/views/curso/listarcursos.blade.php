@extends('layout.app')
@section('title', 'Lista de Cursos')
@section('content')

  <div class="col-md-12 d-flex flex-column  align-items-left p-2 px-md-4 mb-2 bg-info border-bottom box-shadow">
    <div class="row">
      <div class="col-md-2 text-white">
        <h2>Cursos</h2>
      </div>
      <div class="col-6 " style="text-align:center">
        <div class="input-group h2">
            <div class="col-12">  
            <form method="POST" action="{{url('curso/buscar')}}">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control text-white" id="busca" name="busca"
              placeholder="Pesquisar curso ou categoria do curso" required value="{{$buscar}}">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white">
                      <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div> 
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="card-deck mb-3 text-left">
      @foreach ($cursos as $curso)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
          <div class="card-subtitle mb-2 ">
            <span class="my-0 font-weight-normal text-muted">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">{{$curso->category}}</font>
              </font>
            </span>
          </div>
          
          <h1 class="card-title pricing-card-title">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">{{$curso->title}}</font>
              </font>
          </h1>
          <h6 class="card-subtitle mb-2 text-muted">
            Cidade
          </h6>
        </div>
        <div class="card-body">
          <div>  
            <div class="row">
              <div class="col-10">
                <span class="text-muted">
                  De {{date('d/m/Y', strtotime($curso->startt))}} a {{date('d/m/Y', strtotime($curso->startt))}}    
                </span>  
              </div>
              
              <div class="col-2" style="text-align: right;">
                  <a href="{{URL('curso')}}/{{$curso->id}}">
                    <i class="far fa-calendar-alt fa-2x"></i> 
                  </a>
              </div>
            </div>
          </div>
        </div>
          
        </div>
      </div>
      @endforeach
      
    </div> 
  </div>
@endsection
