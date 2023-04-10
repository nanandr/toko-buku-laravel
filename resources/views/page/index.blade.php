@extends('app')
@section('nav')
    @include('components/nav')
@endsection
@section('content')
    <div class="container">
        <div class="banner">
            <img src="{{ asset('img/banner.png') }}">
        </div>
        <div class="">
            <div class="section">
                <div class="title">
                    <h2>Buku Terbaru</h2>
                </div>
                <div class="list">
                    @foreach ($recent as $r)
                        <a href="{{ url('book/description/'.$r->id_buku) }}">  
                            @if($r->stok == 0)
                                <div class="card unavailable">                         
                            @else
                                <div class="card">
                            @endif
                            <img src="{{ asset('uploads/'.$r->cover) }}">
                            <h3>{{ $r->judul }}</h3>
                            <p>{{ $r->pengarang }}</p>
                        </div>       
                        </a>
                    @endforeach
                </div>
            </div>
        </div>       
        <div class="section">
            <div class="title">
                <h2>Terlaris</h2>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('components/footer')
@endsection