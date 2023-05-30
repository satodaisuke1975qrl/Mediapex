<h1>Index</h1>

<table>
    <tr>
      <th>番号</th>
      <th>番組名</th>
      <th>詳細表示</th>
    </tr>
@foreach ($t_v_s as $tv)
  <tr>
    <td>{{ $tv->id }}</td>
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
