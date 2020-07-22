<form action="{{route('article.save')}}" method="post">
    <label for="author"> input author</label>
    <input type="text" name="author">
    <br>
    <br>
    <label for="title">input title</label>
    <input type="text" name="title">
    <br>
    <br>
    <br>
    <label for="content"> input content</label>
    <textarea name="conten">Enter text here...</textarea>

    <button type="submit"> save </button>
    {{csrf_field()}}
</form>