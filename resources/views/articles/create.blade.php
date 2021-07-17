<form action="/articles" method="POST">
    @csrf

    Kategori<br>
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <hr>

    Başlık<br>
    <input type="text" name="title"  value="{{ old('title') }}">
    @error('title')
    <br>{{ $message }}
    @enderror
    <hr>

    İçerik<br>
    <textarea name="content">{{ old('content') }}</textarea>
    @error('content')
    <br>{{ $message }}
    @enderror

    <br>
    <button type="submit">Ekle</button>

</form>
<hr>
<a href="/articles">İptal</a>
