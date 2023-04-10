<nav>
    <a href="{{ url('/') }}"><h1>Toko Buku</h1></a>
    <form action="{{ url('search') }}" method="get">
        <input class="search" type="text" name="keyword" placeholder="Search.." value="@if(request('keyword') != null) {{request('keyword')}} @endif">
        <select name="kategori">
            <option value="Kategori" @if(request('kategori') == null) selected @endif disabled>Kategori</option>
            @foreach ($kategori as $r)
                <option value="{{ $r->nama_kategori }}" @if(request('kategori') != null && request('kategori') == $r->nama_kategori) selected @endif>{{ $r->nama_kategori }}</option>                
            @endforeach
        </select>
    </form>
    <div class="nav-left">
        <a href="{{ url('/book/add') }}">Add Book</a>
        <a href="{{ url('/cart') }}">My Cart</a>
        <a href="{{ url('/account') }}">Admin</a>
    </div>
</nav>