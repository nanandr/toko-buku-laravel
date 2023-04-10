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
                <input placeholder="Judul" type="text" name="judul" required>
                <input placeholder="Pengarang" type="text" name="pengarang" required>                 
                <input placeholder="Penerbit" type="text" name="penerbit" required>
                <input placeholder="Tanggal Terbit" type="date" name="tanggal_terbit" required>
                <input placeholder="ISBN" type="text" name="isbn" required>
                <input placeholder="Edisi"  type="text" name="edisi" required>
                <input placeholder="Stok" type="text" name="stok" required>
                <input placeholder="Harga (Rp)" type="text" name="harga" required>
                <input placeholder="Deskripsi" type="text" name="deskripsi" required>
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