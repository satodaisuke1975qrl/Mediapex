<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\CafeController;
use App\Models\Coach;
use App\Models\Team;
use App\Models\Player;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');

Route::get('/contact_form', [ContactFormController::class, 'index'])
->name('contact.index'); // 名前付きルート name()

// 新規入力して確認画面
Route::post('/contact_form/confirm', [ContactFormController::class, 'confirm'])
->name('contact.confirm');

// 確認画面で送信を押すと、DBに登録してindexに戻る
Route::post('/contact_form/complete', [ContactFormController::class, 'store'])
->name('contact.store');

// 1人ずつ詳細表示
Route::get('/contact_form/{id}', [ContactFormController::class, 'show'])
->name('contact.show');

// 編集画面
Route::get('/contact_form/{id}/edit', [ContactFormController::class, 'edit'])
->name('contact.edit');

// DBに更新したものを保存（DB保存など、DBをいじる作業はpost）
Route::post('/contact_form/{id}', [ContactFormController::class, 'update'])
->name('contact.update');

// DB削除
Route::post('/contact_form/{id}/delete', [ContactFormController::class, 'delete'])
->name('contact.delete');

// url と 表示するviewとかcontroller
// view() ... Laravelが作っている関数（へルパ関数）

// view は resources/views/ の中

Route::get('/', function () {
    return view('welcome');
});

// 第１引数 url, 第２引数 関数
Route::get('/hello', function () {
    return view('hello');
});

Route::get('/blade_variable', function () {
    return view('blade_variable');
});

Route::get('/blade_variable', function () {
    return view('blade_variable');
});

Route::resource('books', BookController::class);

Route::middleware('auth')->group(function()
{
	Route::resource('cafes', CafeController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// 1対1
Route::get('/coach', function(){
    /* Coach モデルを通じて、coaches テーブルの内容をすべて取得 */
    $all_coaches = Coach::all();
    foreach($all_coaches as $coach){
        /* $coach->teamで、関連付けされたteams テーブルのレコードの内容を取得できる */
        print("<p>監督名： {$coach->name} (担当チーム名： {$coach->team->name})</p>");
    }
});

// １対他
Route::get('/team', function(){
    /* Team モデルを通じて、teams テーブルのデータをすべて取得 */
    $all_teams = Team::all();
    // dd($all_teams) ... 複数のインスタンス情報（Collection）

    foreach($all_teams as $team){
        /* $team->playersで、関連付けされたteams テーブルのレコードの内容を取得できる */
        print("<h2>チーム名： {$team->name}</h2>");
        print("<p>所属プレイヤー</p>");
        print('<ul>');

        // dd($team) ... team1つ
        // dd($team->players) ... Playerのインスタンス

            /* Team モデルとPlayer モデルのリレーションは一対多(hasMany)
             * 複数データが取得されるため、foreachでループしてひとつずつ処理する
             */
            foreach($team->players as $player) {
                print("<li>{$player->name}</li>");
            }

            // dd($player)

        print('</ul>');
    }
});

// 多対多
Route::get('/team-to-coach', function(){
    /* Team モデルを通じて、teams テーブルのデータをすべて取得 */
    $all_teams = Team::all();
    foreach($all_teams as $team){
        /* nullの場合があるので、ifでチェック */
        if ($team->coach != null){
            $coach = $team->coach->name;
        } else {
            $coach = '';
        }
        print("<h2>チーム名： {$team->name} (監督：{$coach}) </h2>");
        print("<p>所属プレイヤー</p>");
        print('<ul>');
            /* $team->playersで、関連付けされたteams テーブルのレコードの内容を取得できる
             * Team モデルとPlayer モデルのリレーションは一対多(hasMany)
             * 複数データが取得されるため、foreachでループしてひとつずつ処理する
             */
            foreach($team->players as $player) {
                print("<li>{$player->name}</li>");
            }
        print('</ul>');
    }
});

Route::get('player', function(){
    /* Player モデルを通じて、players テーブルのデータをすべて取得 */
    $all_players = Player::all();
    foreach($all_players as $player){
        /* null の場合があるので、if でチェック */
        if ($player->team != null){
            $team = $player->team->name;
        } else {
            $team = '';
        }
        print("<h2>プレイヤー名： {$player->name} (所属チーム: {$team})</h2>");
        print("<p>得意ポジション</p>");
        print('<ul>');
            /* $player->positionsで、関連付けされたpositions テーブルのレコードの内容を取得できる
            * Player モデルとPosition モデルのリレーションは多対多(belongsToMany)
            * 複数データが取得されるため、foreachでループしてひとつずつ処理する
            */
            foreach($player->positions as $position){
                print("<li>{$position->name}</li>");
            }
        print('</ul>');
    }
});
