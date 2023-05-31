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

    <div class="text-red-500 font-bold">
        @foreach($errors->all() as $error)
            <p class="error">*{{ $error }}</p>
        @endforeach
    </div>

    <div class="flex flex-col">
        <label for="title" class="mt-5 ml-5 font-bold">番組タイトル</label>
        <span class="m-2"><input type="text" size="40" id="title" name="title" value="{{ $tv->title }}"></span>
    </div>
    <div class="flex flex-col">
        <label for="title" class="mt-5 ml-5 font-bold">ジャンル</label><br>
        @foreach($genres as $genre)
            <label><input type="radio" id="{{ $genre->id }}" name="genrename" value="{{ $genre->id }}" @if($tv->genre_id == $genre->id)checked @endif> {{ $genre->genrename }}</label>
            {{-- key:name value:value やからnameを引っ張ったら自然と数字がついてくる--}}
            {{-- バリデーション保持 value="{{ $genre->genrename }}" {{ old('{{ $genre->genrename }}') == $genre->genrename ? 'checked' : '' }} --}}
        @endforeach
        {{-- @if ($errors->has('{{ $genre->genrename }}'))
        <p class="error">*{{ $errors->first('{{ $genre->genrename }}') }}</p>
        @endif --}}
    </div><br>
    <div class="flex flex-col">
        <label for="time" class="mt-5 ml-5 font-bold">放送時間</label>
        <span class="m-2"><input type="time" id="time" name="time" value="{{ $tv->time }}"></span>
    </div>
    <div class="flex flex-col">
        <label for="content" class="mt-5 ml-5 font-bold">番組概要</label>
            <input type="hidden" name="mode" value="check">
            <span class="m-2"><textarea name="content" cols="50" rows="5"><?php print( $tv->content ); ?></textarea></span>
        {{-- <textarea type="text" id="content" name="content" value="{{ $tv->content }}"></textarea> --}}
        {{-- <input type="text" id="content" name="content" value="{{ $tv->content }}"> --}}
    </div>
    <div class="flex justify-around mt-10">
        <input type="submit" value="更新する" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-20 focus:outline-none hover:bg-green-600 rounded text-md">

        <input type="button" value="戻る" onclick="location.href='{{ route('tvshow.show' , $tv->id ) }}'" class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-20 focus:outline-none hover:bg-blue-600 rounded text-md">
    </div>
</form>

</x-app-layout>
