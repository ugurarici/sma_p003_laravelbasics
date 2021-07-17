@foreach ($categories as $category)
    <a href="{{ route('categories.show', $category) }}">
        {{ $category->name }}
    </a>
    <ul>
    @foreach ($category->articles as $article)
    <li>
        <a href="/articles/{{ $article->id }}">
            {{ $article->title }}
        </a>
    </li>
    @endforeach
    </ul>
@endforeach
<hr>
<a href="{{ route('categories.create') }}">Yeni Kategori</a>
