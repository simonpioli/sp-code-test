@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>All Products</h2>

                <div class="card-deck">
                    @foreach($products as $product)
                        <div class="card">
{{--                            <img src="{{ $product[''] }}" alt="" class="card-img-top">--}}
                            <div class="card-body">
                                <h3 class="card-title">{{ $product['name'] }}</h3>
                                <a href="{{ route('product.show', $product['slug']) }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <pre>{!! var_dump($products) !!}</pre>
@endsection
