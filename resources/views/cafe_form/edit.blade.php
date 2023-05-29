<h1>edit</h1>

<form action="{{ route('cafes.update' , $cafe->id) }}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="name">店名</label>
        <input type="text" id="name" name="name" value="{{ $cafe->name }}">
        @if ($errors->has('name'))
        <p class="error">*{{ $errors->first('name') }}</p>
       @endif
    </div>
    <div>
        <label for="pref">都道府県</label>
        <input type="text" id="pref" name="pref" value="{{ $cafe->pref }}">
        @if ($errors->has('pref'))
        <p class="error">*{{ $errors->first('pref') }}</p>
       @endif
    </div>
    <div>
        <label for="address">市区町村</label>
        <input type="text" id="address" name="address" value="{{ $cafe->address }}">
        @if ($errors->has('address'))
        <p class="error">*{{ $errors->first('address') }}</p>
       @endif
    </div>
    <div>
        <label for="review">評価</label>
        <input type="number" step=0.1 max=5.0 min=1.0 id="review" name="review" value="{{ $cafe->review }}">
    </div><br>

    <div>詳細情報を表示しますか？</div>
    <input type="radio" name="is_visible" value="1" @if($cafe->is_visible==1) checked @endif>表示する
    <input type="radio" name="is_visible" value="0" @if($cafe->is_visible==0) checked @endif >表示しない


    <div><input type="submit" value="更新する"> </div>
