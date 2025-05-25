@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('livewire.home')}}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">History</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row mt-4">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pemesanan</td>
                            <td>Kode Pmesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->created_at }}</td>
                            <td>{{ $pesanan->kode_pemesanan }}</td>
                            <td>
                                <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                @foreach($pesanan_details as $pesanan_detail)
                                    <img src="{{ url('assets/jersey')}}/{{ $pesanan_detail->product->gambar }}" alt="" class="img-fluid" width ="50">
                                    {{ $pesanan_detail->product->nama }}
                                    <br>
                                @endforeach
                            </td>
                            <td>
                                @if($pesanan->status == 1)
                                Belum Lunas
                                @else
                                Lunas
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                        </tr>
                        @empty
                        <tr>
                            <td class="7">Data Kosong</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body" style="background-color: white; border-radius: 15px;">
                        <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini : </p>
                        <div class="media d-flex align-items-center">
                        <img class="mr-3" src="{{ url('assets/bri.png')}}" alt="Bank BRI" width="60">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">BANK BRI</h5>
                                No. Rekening : 012345-678-910 atas nama <strong>Dimas Dwi Prayoga Sirad</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
