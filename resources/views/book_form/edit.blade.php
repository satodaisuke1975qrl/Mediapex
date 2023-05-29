<h1>編集画面</h1>

<form action="{{ route('books.update', $book -> id )}}" method="post">
    @csrf
    @method('put')
    <div>
      <label for="title">タイトル</label>
      <input type="text" id="title" name="title" value="{{ $book -> title }}">
      </div>
    <div>
      <label for="price">価格</label>
      <input type="text" id="price" name="price" value="{{ $book -> price }}">
    </div>

      <input type="submit" value="更新する"/>
    </div>
  </form>
