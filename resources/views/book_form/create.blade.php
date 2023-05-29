お問合せ内容の確認<br>

<form action="{{ route('books.store') }}" method="post">
    @csrf
    <div>タイトル: {{ $request->title }}</div>
    <div>価格: {{ $request->price }}</div>

    <input type="hidden" name="title" value="{{ $request->title }}" />
    <input type="hidden" name="price" value="{{ $request->price }}" />

    <button>送信</button>

</form>
