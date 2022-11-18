<h1>all articles</h1>
@foreach ($articles as $article)

    <li>{{$article->title}}</li>
    <li>{{$article->texte}}</li>
    <li>{{$article->lien}}</li>

    
@endforeach