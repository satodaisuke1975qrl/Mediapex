<h1>Index</h1>

<table>
    <tr>
      <th>番号</th>
      <th>店名</th>
      <th>評価</th>
      <th>詳細表示</th>
    </tr>
@foreach ($cafes as $cafe)
  <tr>
    <td>{{ $cafe->id }}</td>
    <td>{{ $cafe->name }}</td>
    <td>{{ $cafe->review }}</td>
    <td>
        <form action="{{ route('cafes.show' , $cafe->id) }}" method="get">
            <button>詳細表示</button>
        </form>
    </td>
  </tr>
@endforeach
</table>

<form action="{{ route('cafes.create' )}}">
    <button>新規入力</button>
</form>
