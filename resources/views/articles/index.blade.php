<h1>Article Listesi</h1>
<ul>
    @foreach ($articles as $article)
    <li>
        <a href="/articles/{{ $article->id }}">
            {{ $article->title }}
        </a>
    </li>
    @endforeach
</ul>
<hr>
<a href="/articles/new">Yeni Article Ekle</a>
