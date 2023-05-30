感想広場

@foreach ($bbs as $bb)
    <div>{{ $bb->u_name }} {{ $bb->message_title }}</div>
    <div>{{ $bb->message }}</div>
@endforeach
<form action="{{ route('tvshow.destroy',$bb->id)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="削除">
</form>
<hr>

<div>
    <form action="" method="POST">
        @csrf
        <div>
            <p class="font-bold">名前</p>
            <input class="border rounded px-2 ml-2" type="text" name="u_name">
        </div>
        <div>
            <p class="font-bold">件名</p>
            <input class="border rounded px-2 ml-2 flex-auto" type="text" name="message_title">
        </div>
        <div>
            <p class="font-bold">本文</p>
            <textarea class="border" name="message"></textarea>
        </div>
        <div>
            <input type="submit" value="投稿">
        </div>
    </form>
</div>

