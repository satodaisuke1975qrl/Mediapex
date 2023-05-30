<h1>番組詳細</h1>

<div>放送時間<br>
    {{ $tv->time }}</div>
<div>番組名<br>
    {{ $tv->title }}</div>
<div>番組概要<br>
    {{ $tv->content }}</div><br>


{{-- 管理者でログインした場合のみ編集ボタンを表示 --}}
@can('admin')
    <input type="button" value="編集" onclick="location.href='{{ route('tvshow.edit', $tv->id) }}'">
@endcan

{{-- <a href="{{ route('tvshow.edit' , $tv->id) }}">編集</a><br> --}}
<input type="button" value="一覧に戻る" onclick="location.href='{{ route('tvshow.index') }}'">

{{-- <a href="{{ route('tvshow.index') }}">一覧に戻る</a><br> --}}

{{-- 管理者でログインした場合のみ削除ボタンを表示 --}}
@can('admin')
    <form action="{{ route('tvshow.destroy', $tv->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="削除">
    </form>
@endcan
