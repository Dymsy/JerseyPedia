@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('livewire.home')}}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <h2>{{ $title }}</h2>
            </div>
            <div class="col-md-3">
                <div class="input-group flex-nowrap">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search. . ." aria-label="Search" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>

        <section class="products mb-5">
            <div class="row mt-4">
                @foreach($products as $product)
                <div class="col-md-3 mb-4">
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

        <div class="row">
            <div class="col">
                <nav>
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
                </nav>
            </div>
        </div>

    </div>
@endsection
