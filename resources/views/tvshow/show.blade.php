<x-app-layout>
    <x-slot name="header">
        <a href="https://www.tv-asahi.co.jp/" target="_blank"><img src="https://seekvectorlogo.com/wp-content/uploads/2022/01/tv-asahi-vector-logo.png" class="w-30 h-20" /></a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            番組詳細
        </h2>
    </x-slot>
    <br>

            <div class="p-0 w-full">
            <div class="relative">
              <label for="name" class="font-black px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">放送時間</label>
              <div class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">{{ $tv->time }}</div>
            </div>
            </div>

            <div class="p-0 w-full">
            <div class="relative">
              <label for="name" class="font-black px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">番組名（ジャンル）</label>
              <div class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">{{ $tv->title }} ({{ $tv->genre->genrename }})</div>
            </div>
            </div>

            <div class="p-0 w-full">
            <div class="relative">
              <label for="name" class="font-black px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">番組概要</label>
              <div class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">{{ $tv->content }}</div>
            </div>
            </div>
<br>

{{-- 管理者でログインした場合のみ編集ボタンを表示 --}}
<div class="flex justify-around">
    <div>
        @can('admin')
        <input type="button" value="編集" onclick="location.href='{{ route('tvshow.edit', $tv->id) }}'" class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-20 focus:outline-none hover:bg-blue-600 rounded text-md">
        @endcan
    </div>
    <div>
        <input type="button" value="一覧に戻る" onclick="location.href='{{ route('tvshow.index') }}'" class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-20 focus:outline-none hover:bg-blue-600 rounded text-md">
    </div>
    <div>
        @can('admin')
        <form action="{{ route('tvshow.destroy', $tv->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="削除" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-20 focus:outline-none hover:bg-red-600 rounded text-md">
        </form>
        @endcan
    </div>

</x-app-layout>
