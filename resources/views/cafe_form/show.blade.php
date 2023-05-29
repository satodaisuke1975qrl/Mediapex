<h1>show</h1>

@if($cafe->is_visible == 1)
<div>{{ $cafe->name }}</div>
<div>{{ $cafe->pref }}</div>
<div>{{ $cafe->address }}</div>
<div>{{ $cafe->review }}</div><br>
@endif

@if($cafe->is_visible == 0)
<div>詳細情報は非公開になっています</div><br>
@endif


<a href="{{ route('cafes.edit' , $cafe->id) }}">編集</a><br>

<a href="{{ route('cafes.index') }}">一覧に戻る</a><br>

<form action="{{ route('cafes.destroy',$cafe->id)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
</form>



