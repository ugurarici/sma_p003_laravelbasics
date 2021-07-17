<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    Kategori Adı: <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <br>{{ $message }}
    @enderror
    <br>
    <button type="submit">Kategori Ekle</button>
</form>
<hr>
<a href="{{ route('categories.index') }}">Kategori Listesine Geri Dön</a>
