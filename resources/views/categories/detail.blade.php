<h1>{{ $category->name }}</h1>
<ul>
    @foreach ($category->articles as $article)
    <li>
        <a href="/articles/{{ $article->id }}">
            {{ $article->title }}
        </a>
    </li>
    @endforeach
    </ul>
<hr>
<a href="{{ route('categories.edit', $category) }}">Düzenle</a> |
 <a href="{{ route('categories.index') }}">Kategori Listesine Geri Dön</a> |
 <form action="{{ route('categories.destroy', $category) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Sil</button>
</form>
