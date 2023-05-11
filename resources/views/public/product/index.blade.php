@extends('layouts.app')

@section('title', 'Product List Page')

@section('scripts')
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
@endsection

@section('content')
    <h5 class="fw-bold">Products</h5>
    <div class="row">
        @foreach ($products as $item)
            <div class="col-sm-3 col-md-4">
                <div class="card" style="width: 18rem;">
                    @if ($item->photo != null)
                        <img src="{{ asset('storage/' . $item->photo) }}" class="card-img-top" alt="...">
                    @else
                        <p class="text-info">Foto tidak tersedia</p>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">
                            Stock : {{ $item->stocks . ' ' . $item->fkProductDetail->unit }}
                        </p>
                        <p class="card-text">
                            Price : Rp. {{ number_format($item->price) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
