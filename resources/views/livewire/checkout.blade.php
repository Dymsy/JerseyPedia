@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('livewire.home')}}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('livewire.keranjang')}}">Keranjang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('livewire.keranjang') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h4>Informasi Pembayaran</h4>
                <hr>
                <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini <br>sebesar : <strong> Rp. {{ number_format( $total_harga)}}</strong></p>
                <div class="media d-flex align-items-center">
                <img class="mr-3" src="{{ url('assets/bri.png')}}" alt="Bank BRI" width="60">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">BANK BRI</h5>
                        No. Rekening : 012345-678-910 atas nama <strong>Dimas Dwi Prayoga Sirad</strong>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>Informasi Pengiriman</h4>
                <hr>
                <form wire:submit.prevent="checkout">
                    <div class="form-group">
                        <label for="">No. Hp</label>
                        <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" wire:model="nohp" value="{{ old('nohp') }}" autocomplete="nohp" autofocus>

                        @error('nohp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn block w-100 mt-4"><i class="fas fa-arrow-right"></i> Checkout</button>

                </form>
            </div>
        </div>
    </div>
@endsection
