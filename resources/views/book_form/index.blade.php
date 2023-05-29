<h1>入力画面</h1>

<form action="{{ route('books.store')}}" method="get">
    <div>
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title')}}">
    </div>
    <div>
        <label for="price">価格</label>
        <input type="number" id="price" name="price" value="{{ old('price')}}">
    </div>
    <div>
        <input type="submit" valur="送信">
    </div>
</form>

@foreach ($books as $book)
    <a href="{{ route('books.show' , $book -> id)}}">{{ $book -> id }}</a>
    {{ $book -> title }}<br>
@endforeach
