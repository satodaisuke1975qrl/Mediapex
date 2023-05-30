<h1>edit</h1>

<form action="{{ route('tvshow.update' , $t_v_s->id) }}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="title">番組タイトル</label>
        <input type="text" id="title" name="title" value="{{ $t_v_s->title }}">
        @if ($errors->has('title'))
        <p class="error">*{{ $errors->first('title') }}</p>
       @endif
    </div>
    <div>
        <label for="time">放送時間</label>
        <input type="text" id="time" name="time" value="{{ $t_v_s->time }}">
        @if ($errors->has('time'))
        <p class="error">*{{ $errors->first('time') }}</p>
       @endif
    </div>
    <div>
        <label for="content">番組内容</label>
        <input type="text" id="content" name="content" value="{{ $t_v_s->content }}">
        @if ($errors->has('content'))
        <p class="error">*{{ $errors->first('content') }}</p>
       @endif
    </div>
    <form action="{{ route('tvshow.index' )}}">
        <button>戻る</button>
    </form>
    <div>
        <input type="submit" value="更新する">
    </div>
</form>
