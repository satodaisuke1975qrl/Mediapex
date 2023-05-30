<h1>Index</h1>

<table>
    <tr>
      <th>放送時間</th>
      <th>番組名</th>
      <th>詳細表示</th>
    </tr>
@foreach ($tvs as $tv)
  <tr>
    <td>{{ $tv->time }}</td>
    <td>{{ $tv->title }}</td>
    <td>
        <form action="{{ route('tvshow.show' , $tv->id) }}" method="get">
            <button>詳細表示</button>
        </form>
    </td>
  </tr>
@endforeach
</table>

<form action="{{ route('tvshow.create' )}}">
    <button>新規入力</button>
</form>
