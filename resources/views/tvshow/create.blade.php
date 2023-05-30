<h1>create</h1>

<form action="{{ route('tvshow.store') }}" method="post">
    @csrf
    <div>
        <label for="title">番組タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title')}}">
        @if ($errors->has('title'))
        <p class="error">*{{ $errors->first('title') }}</p>
       @endif
    </div>
    <div>
        <label for="time">放送時間</label>
        <input type="text" id="time" name="time" value="{{ old('time')}}">
        @if ($errors->has('time'))
        <p class="error">*{{ $errors->first('time') }}</p>
       @endif
    </div>
    <div>
        <label for="content">番組情報</label>
        <input type="textbox" id="content" name="content" value="{{ old('content')}}">
        @if ($errors->has('content'))
        <p class="error">*{{ $errors->first('content') }}</p>
       @endif
    </div>
    <div>
        <form action="{{ route('tvshow.index' )}}">
            <button>戻る</button>
        </form>
    </div>
    <div>
        <input type="submit" value="送信">
    </div>
</form>
