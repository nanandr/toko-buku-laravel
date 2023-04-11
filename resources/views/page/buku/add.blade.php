@extends('app')
@section('nav')
    @include('components/nav')
@endsection
@section('content')
    <div class="container">
        <h2>Add New Book</h2>  
        <div class="desc">
            <form method="post" class="add" action="{{ url('book/add/loading') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @foreach($fillable as $r)
                    <input placeholder="{{ ucfirst($r) }}" type="text" name="{{ $r }}" required>
                @endforeach
                @foreach($numberFillable as $r)
                    <input placeholder="{{ ucfirst($r) }}" type="number" name="{{ $r }}" required>
                @endforeach
                <select name="id_kategori">
                    <option value="Kategori" @if(request('kategori') == null) selected @endif disabled>Kategori</option>
                    @foreach ($kategori as $r)
                        <option value="{{ $r->id_kategori }}" @if(request('kategori') != null && request('kategori') == $r->nama_kategori) selected @endif>{{ $r->nama_kategori }}</option>                
                    @endforeach
                </select>
                <input type="file" name="cover" required>
                <input class="submit" type="submit" value="Add">
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('components/footer')
@endsection