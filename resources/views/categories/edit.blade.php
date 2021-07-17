<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')
    Kategori Adı: <input type="text" name="name" value="{{ old('name') ?  old('name') : $category->name }}">
    @error('name')
        <br>{{ $message }}
    @enderror
    <br>
    <button type="submit">Kategoriyi Güncelle</button>
</form>
<hr>
<a href="{{ route('categories.show', $category) }}">Kategori Detayına Geri Dön</a>
