@extends('app')
@section('nav')
    @include('components/nav')
@endsection
@section('content')
    <div class="container">
        <div class="">
            <div class="section">
                <div class="title">
                    <h2>You searched for "{{ request('keyword') }}"</h2>
                </div>
                <div class="list">
                    @foreach ($data as $r)
                        <a href="{{ url('book/description/'.$r->id_buku) }}">  
                            <div class="card">  
                                <img src="{{ asset('uploads/'.$r->cover) }}">
                                <h3>{{ $r->judul }}</h3>
                                <p>{{ $r->pengarang }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('components/footer')
@endsection