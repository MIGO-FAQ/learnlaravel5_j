<table class="table">
    <thead>
    <th>Title</th>
			<th>Body</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->title !!}</td>
			<td>{!! $article->body !!}</td>
            <td>
                <a href="{!! route('articles.edit', [$article->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('articles.delete', [$article->id]) !!}" onclick="return confirm('Are you sure wants to delete this Article?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
