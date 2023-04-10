@extends('app')
@section('nav')
    @include('components/nav')
@endsection
@section('content')
    <div class="container">
        <div class="desc">  
            <div>
                <img src="{{ asset('uploads/'.$data->cover) }}">
                <h2 style="color: black;">{{ $data->judul }}</h2>
                <h3>{{ $data->pengarang }}</h3>
                <h1 style="text-align: right;">Rp.{{ $data->harga }}</h1>
                <form action="{{ url('buku/beli') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $data->id }}">
                    @if($data->stok == 0)
                        <input class="beli unavailable" style="text-align: center;" disabled value="Stok Tidak Tersedia">
                    @else
                        <input class="beli" type="submit" value="Beli">
                    @endif
                </form>
            </div>
            <div class="desc-content">
                <p><b>Penerbit:</b> {{ $data->penerbit }}</p>
                <p><b>Tanggal Terbit:</b> {{ $data->tanggal_terbit }}</p>
                <p><b>ISBN:</b> {{ $data->isbn }}</p>
                <p><b>Edisi:</b> {{ $data->edisi }}</p>
                <p><b>Stok:</b> {{ $data->stok }}</p>
                <p><b>Deskripsi:</b> {{ $data->deskripsi }}</p>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('components/footer')
@endsection