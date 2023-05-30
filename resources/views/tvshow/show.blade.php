<h1>show</h1>

<div>{{ $tv->id }}</div>
<div>{{ $tv->time }}</div>
<div>{{ $tv->title }}</div>
<div>{{ $tv->content }}</div><br>
@endif

<a href="{{ route('tvshow.edit' , $tv->id) }}">編集</a><br>

<a href="{{ route('tvshow.index') }}">一覧に戻る</a><br>

<form action="{{ route('tvshow.destroy',$tv->id)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
</form>
