<h1>詳細画面</h1>

<div>{{ $book -> id }}</div>
<div>{{ $book -> title }}</div>
<div>{{ $book -> price }}</div>

<table>
    <tr>
        <th><a href="{{ route('books.edit', $book -> id )}}">編集</a><br></th>
        <th>
            <form action="{{ route('books.destroy' , $book -> id) }}" method="post">
                <input type="submit" value="削除">
                </form>
        </th>
        <th><a href="{{ route('books.index') }}">一覧に戻る</a></th>
    </tr>
</table>


