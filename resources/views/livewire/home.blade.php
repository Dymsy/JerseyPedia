@extends('layouts.app')

@section('content')
<div class="container">
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png')}}" alt="">
    </div>

    <div class="pilih-liga mt-4">
        <h3><strong>Pilih liga</strong></h3>
        <div class="row mt-4">
            @foreach($ligas as $liga)
            <div class="col">
                <a href="{{ route('livewire.product-liga', $liga->id) }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/liga')}}/{{ $liga->gambar }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <section class="products mt-5 mb-5">
        <h3>
            <strong>Best Product</strong>
            <a href="{{ route('livewire.product-index')}}" class="btn btn-dark float-end"><i class="fas fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/jersey')}}/{{ $product->gambar }}" alt="" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h4><strong>{{ $product->nama}}</strong></h4>
                                <p>Rp. {{ number_format($product->harga)}}</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('livewire.product-detail', $product->id)}}" class="btn btn-dark btn-block w-100"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
