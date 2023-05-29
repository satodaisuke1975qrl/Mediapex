<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index()
    {
        // ORMモデルファイル
        // 出力がインスタンスになっている
        // これを使うようにする
        // クエリビルダ + 独自機能（リレーション、スコープ etc）
        // リレーションが使える

        // all()とかfind()などはここで確定している
        // しかし、all()は負荷がかかるため、滅多に使わない
        $eloquent = Contact::all();
        $eloquentFind = Contact::find(1);

        // 他のメソッド select() は末尾にget()かfirst()を書かないとクエリが確定しない
        // toArray() : Collection -> 配列に置き換える
        // toSql // SQL文を表示
        $eloquentSelect = Contact::select('id', 'name');
        $where = $eloquentSelect -> where('id', 1) -> get();


        // 出力がインスタンスになっている

        // それぞれが

        // DBファサード
        // クエリビルダのみ
        // joinの仕方が違う join()と書く
        // tableを複数joinする場合やsubQueryなどの複雑なクエリの時はこっちを使う
        $queryBuilderGet = DB::table('contacts')->get();      // Collection
        $queryBuilderFirst = DB::table('contacts')->first();  // Collectionの中の一つ

        $collection = collect(['aaa', 'bbb']);
        // Collection

        dd($eloquent, $queryBuilderGet,
        $queryBuilderFirst, $collection);
    }
}
