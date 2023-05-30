<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            index
        </h2>
    </x-slot>

<table class="table-auto w-full text-left whitespace-no-wrap">

<thead>
    <tr>
      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">放送時間</th>
      <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">番組名</th>
      <th>詳細表示</th>
    </tr>
</thead>
<tbody>
@foreach ($tvs as $tv)
  <tr>
    <td class="px-4 py-3">{{ $tv->time }}</td>
    <td class="px-4 py-3">{{ $tv->genre->genrename }} : {{ $tv->title }}</td>
    <td class="text-center">
        <form action="{{ route('tvshow.show' , $tv->id) }}" method="get">
            <button>詳細表示</button>
        </form>
    </td>
  </tr>
@endforeach
</tbody>
</table>

<form action="{{ route('tvshow.create' )}}">
    <button>新規入力</button>
</form>

</x-app-layout>
