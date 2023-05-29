<h1>create</h1>

<form action="{{ route('cafes.store') }}" method="post">
    @csrf
    <div>
        <label for="name">店名</label>
        <input type="text" id="name" name="name" value="{{ old('name')}}">
        @if ($errors->has('name'))
        <p class="error">*{{ $errors->first('name') }}</p>
       @endif
    </div>
    <div>
        <label for="pref">都道府県</label>
        <input type="text" id="pref" name="pref" value="{{ old('pref')}}">
        @if ($errors->has('pref'))
        <p class="error">*{{ $errors->first('pref') }}</p>
       @endif
    </div>
    <div>
        <label for="address">市区町村</label>
        <input type="text" id="address" name="address" value="{{ old('address')}}">
        @if ($errors->has('address'))
        <p class="error">*{{ $errors->first('address') }}</p>
       @endif
    </div>
    <div>
        <label for="review">評価</label>
        <input type="number" step=0.1 max=5.0 min=1.0 id="review" name="review" value="{{ old('review')}}">
    </div><br>

    <div>詳細情報を表示しますか？</div>
    <input type="radio" name="is_visible" value="1" checked>表示する<br>
    <input type="radio" name="is_visible" value="0">表示しない

    <div>
        <input type="submit" value="送信">
    </div>
</form>
