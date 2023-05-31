<x-app-layout>
    <x-slot name="header" class="">
        <a href="https://www.tv-asahi.co.jp/" target="_blank"><img src="https://seekvectorlogo.com/wp-content/uploads/2022/01/tv-asahi-vector-logo.png" class="w-30 h-20" /></a>
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            感想広場
        </h2>
    </x-slot>


@foreach ($bbs as $bb)
    <div class="font-bold">
        <div>
            {{ $bb->time }}
        </div>
    </div>
        <div>
            {{ $bb->u_name }} >> {{ $bb->message }}
        </div>

@endforeach

<br>
<hr>
<br>

<div>
    <form action="{{ route('tvshow.bbsstore') }}" method="post">
        @csrf
        <div class="flex flex-col">
            <label class="font-bold">名前</label>
            <input class="mt-2 mb-10" type="text" name="u_name">
        </div>
        <br>
        <div class="flex flex-col">
            <label class="font-bold">本文</label>
            <textarea class="mt-2 block w-full shadow-sm" name="message"></textarea>
        </div>
        <br>
        <div class="flex justify-around">
            <input type="submit" value="投稿" class="flex mx-auto text-white bg-green-500 border-0 py-2 px-20 focus:outline-none hover:bg-green-600 rounded text-md">

            <input type="button" value="戻る" onclick="location.href='{{ route('tvshow.index')}}'" class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-20 focus:outline-none hover:bg-blue-600 rounded text-md">
        </div>
</form>
</div>

</x-app-layout>
