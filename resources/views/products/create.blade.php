@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo producto
        </h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Listado</a>

        @include('products.partials.error')

        {!! Form::open(['route' => 'products.store']) !!}
        <br>
        @include('products.partials.form')
        {!! Form::close() !!}

    </div>
    <div class="col-sm-4">
        @include('products.partials.aside')
    </div>
@endsection
