<form action="/articles" method="POST">
    @csrf

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
