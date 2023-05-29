お問合せページです

{{-- foreach($errors->all() as $error)でまとめてエラーを出す --}}
@foreach ($errors->all() as $error)
    <li><span xlass="error">{{ $error }}</span></li>
@endforeach

{{-- Laravelのformのactionはマスタッシュにし、name()で改名した内容にする --}}
{{-- form の真下に @csrf とつける --}}
<form action="{{ route('contact.confirm')}}" method="post">
    @csrf
    <div>
      <label for="name">お名前</label>
      <input type="text" id="name" name="name" value="{{ old('name')}}">
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
      </div>
    <div>
      <label for="email">メールアドレス</label>
      <input type="text" id="email" name="email" value="{{ old('email')}}">
    </div>
    <div>
      <label>性別</label>
      <input type="radio" name="gender" value="0">男性
      <input type="radio" name="gender" value="1">女性
      <input type="radio" name="gender" value="2">その他
    </div>
    <div>
      <label for="age">年齢</label>
      <input type="number" id="age" name="age" value="{{ old('age')}}">
    </div>
    <div>
      <label for="messeage">お問合せ内容</label>
      <textarea name="message">{{ old('message')}}</textarea>
    </div>
    <div>
      <input type="submit" value="送信"/>
    </div>
  </form>

{{-- blade $contactはインスタンス（レコード毎）--}}

@foreach ($contacts as $contact)
    <a href="{{ route('contact.show' , $contact -> id) }}">{{ $contact -> id }}</a>
    {{ $contact -> name }}<br>
@endforeach
