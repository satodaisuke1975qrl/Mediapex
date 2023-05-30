<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規登録
        </h2>
    </x-slot>

<form action="{{ route('tvshow.store') }}" method="post">
    @csrf
    <div>
        <label for="title">番組タイトル</label>
        <input type="text" size="40" id="title" name="title" value="{{ old('title')}}">
        @if ($errors->has('title'))
        <p class="error">*{{ $errors->first('title') }}</p>
       @endif
    </div>
    <div>
        <label for="time">放送時間</label>
        <input type="time" id="time" name="time" value="{{ old('time')}}">
        @if ($errors->has('time'))
        <p class="error">*{{ $errors->first('time') }}</p>
       @endif
    </div>
    <div>
        <label for="content">番組情報</label>
        <textarea type="textbox" id="content" name="content" value="{{ old('content')}}"></textarea>
        @if ($errors->has('content'))
        <p class="error">*{{ $errors->first('content') }}</p>
       @endif
    </div>
    <div>
        <form action="{{ route('tvshow.index' )}}">
            <button>送信</button>
        </form>
    </div>
    <div>
    <input type="button" value="戻る" onclick="location.href='{{ route('tvshow.index')}}'">

    {{-- <input type="submit" value="送信"> --}}
    </div>
</form>

</x-app-layout>
