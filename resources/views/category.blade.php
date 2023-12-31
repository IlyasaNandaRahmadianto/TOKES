@extends('layout.main')

@section('container')

    <br>
    <br>
    <h1 class="mt-5">Product by Category : {{ $header }}</h1>

    <div class="row justify-content-center mb-5 mt-5">
        @foreach ($categories as $item)
            <div class="col-md-2">
                <div class="card">
                    <img src="{{ $item->image }}" alt="">
                    <div class="card-body">
                        <a href="" class="badge badge-warning text-white">{{ $item->category->name }}</a>
                        <div class="card-title">{{ $item->title }}</div>
                        <div class="card-title">Rp. {{ $item->price }}</div>
                        <a href="/product/{{ $item->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection