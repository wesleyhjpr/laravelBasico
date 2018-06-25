@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe abaixo as informações do cliente
                    <a class="float-right" href="{{url('clientes')}}">listagem Cliente</a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <script>
                        $( document ).ready(function() {
                            $(".alert").fadeTo(3500, 500).slideUp(500, function(){
                            $(".alert").slideUp(500);
                            });
                        });                   
                    </script>
                    @if(Session::has('mensagem_sucesso'))
                        <div  class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif
                    @if (Request::is('*/editar'))                        
                        {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}                        
                    @else
                        {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif
                        
                    {!! Form::label('nome', 'Nome') !!}                        
                    {!! Form::text('nome', null, ['autofocus', 'class' => 'form-control', 'placeholder' => 'nome']) !!}
                    
                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'endereço']) !!}

                    {!! Form::label('numero', 'Número') !!}
                    {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => 'número']) !!}                     
                    
                    
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary test']) !!}
                    
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
