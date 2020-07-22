<form action="{{route('article.save_update', $article->id )}}" method="post">
    <label for="author"> input author</label>
    <input type="text" name="author" value="{{$article->author}}">
    <br>
    <br>
    <label for="title">input title</label>
    <input type="text" name="title" value="{{$article->title}}">
    <br>
    <br>
    <br>
    <label for="content"> input content</label>
    <textarea name="conten">{{$article->content}}</textarea>

    <button type="submit"> save </button>
    {{csrf_field()}}
</form>