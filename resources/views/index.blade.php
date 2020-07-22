<div class="header">
        <a href="{{route('article.get_form')}}" id="get_form" style="color: green">
            Create New Article
        </a>

    </div>
    <br>
    <table border="1 px" style="border: 1px solid green">
        <thead>
        <th>No</th>
        <th>Author</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created Date</th>
        <th>Action</th>
        </thead>
        <tbody>
        @foreach($articles as $key => $item)
            <tr>
                <td> {{$key +1}}</td>
                <td> {{$item->author}} </td>
                <td> {{$item->title}}</td>
                <td> {{$item->content}}</td>
                <td> {{$item->created_at}}</td>
                <td>
                    <button class="delete" style="color: red" data-remote="{{route('article.destroy', $item->id)}}"> Delete </button>
                    <a class="update btn btn-xs" style="color: #0a6aa1" href="{{route('article.update', $item->id)}}"> update </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>