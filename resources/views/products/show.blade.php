@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            {{ $product->name }}
        </h2>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Editar</a>
        <p>
            {{ $product->short }}
        </p>
        {!! $product->body !!}
    </div>
    <div class="col-sm-4">
        @include('products.partials.aside')
    </div>
@endsection
