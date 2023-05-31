<h1>感想広場</h1>


@foreach ($bbs as $bb)
    {{ $bb->time }}
    <div>{{ $bb->u_name }}>>
    {{ $bb->message }}</div>
@endforeach
<input type="button" value="戻る" onclick="location.href='{{ route('tvshow.index')}}'">

<br>
<hr>
<br>

<div>
    <form action="{{ route('tvshow.bbsstore') }}" method="post">
        @csrf
        <div>
            <label class="font-bold">名前</label>
            <input class="border rounded px-2 ml-2" type="text" name="u_name">
        </div>

        <div>
            <label class="font-bold">本文</label>
            <textarea class="border" name="message"></textarea>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
</div>

