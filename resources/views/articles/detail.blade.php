<h1>{{ $article->title }}</h1>
<small>
    <a href="{{ route('categories.show', $article->category) }}">
        {{ $article->category->name }}
    </a>
</small>
<hr>
<p>
    {{ $article->content }}
</p>
<hr>
<a href="/articles">Article Listesi</a>
