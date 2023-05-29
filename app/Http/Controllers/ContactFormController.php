<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // モデルファイル Eloquent ORM phpでDB操作

class ContactFormController extends Controller
{
    public function index()
    {
        //モデル（Eloquent）
        $contacts = Contact::all();
        // dd($contacts);

        // 変数をcontroller -> view に渡す compact()
        return view('contact_form.index', compact('contacts'));

    }

    // DI（依存性注入）：引数にクラスを渡したら自動的にインスタンス化している
    // メソッド名（クラス名 インスタンスを入れる変数の名前）
    public function confirm(Request $request)  //formで渡ってきた情報+α
    {
        // バリデーション
        $validatedData = $request -> validate(
            [
                'name' => ['required' , 'min:2' , 'max:20']
            ]);


        // dd() : var_dump + die 中身を表示しつつ、ここで処理を終了
        // $request -> key (form の name)
        // dd($request);

        // PHPでいうところの$_POST('name')と一緒

        // 戻るボタン
        if($request -> has('back'))
        {
            return redirect('/contact_form') -> withInput();
        }


        // 変数をview側に渡したい時は
        // compact() というphpの関数を第２引数に入れる
        return view('contact_form.confirm' , compact('request'));
    }

    // 確認画面で送信ボタンを押すとstore(DB)にデータが格納される
    public function store(Request $request)
    {
        // 本来はバリデーションを書く

        // DB保存処理
        // インスタンス化するやり方
        // phpだったらステートメント、バインド、プレースホルダーが必要だった
        // ORMを使うとこれだけで良い
        // 裏側でPDOが動いているが、気にしなくて良い

        $contact = new Contact;
        // インスタンスのプロパティ（変数）= フォームから渡ってきている情報
        $contact -> name = $request -> name;
        $contact -> email = $request -> email;
        $contact -> gender = $request -> gender;
        $contact -> age = $request -> age;
        $contact -> message = $request -> message;

        // 保存 save();
        $contact -> save();

        // 保存の後はリダイレクトをかける必要がある（エラーが出るため）
        return redirect('contact_form');
    }

    public function show($id)
    {
        // $id でisが1番なら「1」という数字が入っている
        // DBから情報を取りたい
        // 1件の情報なので、変数は単数形で表記
        // find() , findOrFail()
        // SQL文だと、select * from contents where id = X; と同意
        $contact = Contact::find($id);

        return view('contact_form.show' , compact('contact'));
    }

    public function edit($id){

        $contact = Contact::find($id);

        return view('contact_form.edit' , compact('contact'));

    }

    // 更新は引数２個（formの値, ルートパラメータ）
    public function update(Request $request, $id)
    {
        // 新規作成はnewしたが、更新はfindで読み込む
        $contact = Contact::find($id);
        $contact -> name = $request -> name;
        $contact -> email = $request -> email;
        $contact -> gender = $request -> gender;
        $contact -> age = $request -> age;
        $contact -> message = $request -> message;

        // 保存 save();
        $contact -> save();

        // 保存の後はリダイレクトをかける必要がある（エラーが出るため）
        // フラッシュメッセージ（１回だけ表示する機能「更新しました」）
        return redirect('contact_form');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);

        $contact -> delete();
        // これだけで消えるが、本来は「本当に消しますか？」的なダイアログが必要

        return redirect('contact_form');
    }

}
