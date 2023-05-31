<x-app-layout>
    <x-slot name="header" class="">
        <a href="https://www.tv-asahi.co.jp/" target="_blank"><img src="https://seekvectorlogo.com/wp-content/uploads/2022/01/tv-asahi-vector-logo.png" class="w-30 h-20" /></a>
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            編集画面
        </h2>
    </x-slot>

<form action="{{ route('tvshow.update' , $tv->id) }}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="title">番組タイトル</label>
        <input type="text" size="40" id="title" name="title" value="{{ $tv->title }}">
        @if ($errors->has('title'))
        <p class="error">*{{ $errors->first('title') }}</p>
       @endif
    </div>
    <div>
        <label for="time">放送時間</label>
        <input type="time" id="time" name="time" value="{{ $tv->time }}">
        @if ($errors->has('time'))
        <p class="error">*{{ $errors->first('time') }}</p>
       @endif
    </div>
    <div>
        <label for="content">番組内容</label>
            <input type="hidden" name="mode" value="check">
            <textarea name="content" cols="50" rows="5"><?php print( $tv->content ); ?></textarea>
        {{-- <textarea type="text" id="content" name="content" value="{{ $tv->content }}"></textarea> --}}
        {{-- <input type="text" id="content" name="content" value="{{ $tv->content }}"> --}}
        @if ($errors->has('content'))
        <p class="error">*{{ $errors->first('content') }}</p>
       @endif
    </div>
    <div>
        {{-- <input type="button" value="更新する" onclick="location.href='{{ route('tvshow.index' , $tv->id ) }}'"> --}}
        <input type="submit" value="更新する">
    </div>
</form>

<input type="button" value="戻る" onclick="location.href='{{ route('tvshow.show' , $tv->id ) }}'">

</x-app-layout>
