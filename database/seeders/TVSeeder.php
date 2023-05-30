<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_v_s')->insert(
            [
                [
                    'title' =>'おはよう!時代劇 暴れん坊将軍9 #12',
                    'time' =>'4:00',
                    'content' => '「吉宗危機一髪!美しき婚約者の献身」松平健▽八王子代官・郡司源一郎の先導で鷹狩りを行なっていた吉宗は、童子のような天衣無縫な若者・安兵衛と出会うが…',
                    'url' =>'nullable',
                    'genre_id' =>1
                ],
                [
                    'title' =>'グッド！モーニング',
                    'time' =>'4:55',
                    'content' => 'けさ知っておきたいニュースを独自目線でわかりやすく伝えます。林先生の「ことば検定」、依田さんの「お天気検定」、「ニュース検定」、「エンタメ検定」にも挑戦しよう!',
                    'url' =>'https://www.tv-asahi.co.jp/goodmorning/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'羽鳥慎一モーニングショー',
                    'time' =>'8:00',
                    'content' => '羽鳥慎一が毎日の様々なニュースを、分かりやすくお伝えします。暮らしをよりよくする情報はもちろん、難しいことは何が問題なのか、パネルを駆使して読み解きます。',
                    'url' =>'https://www.tv-asahi.co.jp/m-show/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'じゅん散歩',
                    'time' =>'9:55',
                    'content' => '三代目散歩人・高田純次が「駒込」を散策▽北島康介や寺川綾が学んだ名門スイミングセンター▽マスターズ日本記録を10個もつ女性スイマー▽生徒も作る!製菓学校のケーキ店',
                    'url' =>'https://www.tv-asahi.co.jp/junsanpo/',
                    'genre_id' =>7
                ],
                [
                    'title' =>'大下容子ワイド！スクランブル',
                    'time' =>'10:25',
                    'content' => 'スタジオの気鋭の識者たちが、視聴者に知っておいてもらいたい情報、抱いている疑問を深掘り解説!',
                    'url'=>'https://www.tv-asahi.co.jp/scramble/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'徹子の部屋 リリー・フランキー',
                    'time' =>'13:00',
                    'content' => '〜両親が逝き…"天涯孤独"の私生活は〜リリー・フランキーさんが今日のゲストです。',
                    'url' =>'https://www.tv-asahi.co.jp/tetsuko/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'DAIGOも台所 〜きょうの献立 何にする?〜 味わいたい旬の美味しさ初夏の魚',
                    'time' =>'13:30',
                    'content' => '冷蔵庫の食材管理もしながら、家族の好みや栄養バランス、肉・魚・野菜のローテーションも考えて献立を決めるのは本当に大変…日々の料理の悩みにこたえる献立を複数提案!',
                    'url' => 'https://onnela.asahi.co.jp/daidokoro',
                    'genre_id' =>7
                ],
                [
                    'title' =>'東京サイト 「玉川上水」',
                    'time' =>'13:45',
                    'content' =>'多摩川から取り入れた生活用水を江戸市中に送るため造られた「玉川上水」は、江戸時代の初期、1653(承応2)年に完成した人工の上水道です。玉川兄弟の驚きの技術とは…。',
                    'url' => 'https://www.tv-asahi.co.jp/t-site/',
                    'genre_id' =>7
                ],
                [
                    'title' =>'ANNニュース',
                    'time' =>'13:49',
                    'content' =>'正確なニュース・情報をいち早くお伝えするANNニュース!テレビ朝日系列の放送局26局が総力をあげ、緻密な取材にもとづいたニュースを最新機材を駆使して放送します。',
                    'url' => 'https://news.tv-asahi.co.jp/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'科捜研の女17 #7',
                    'time' =>'13:54',
                    'content' =>'「マリコvs現場保存のできない美人警察官!?衝撃ラスト」沢口靖子▽遺体が巧妙に事故死に偽装される事件が発生。現場保存を行った女性巡査はマリコの講義を受けていた…',
                    'url' => 'nullable',
                    'genre_id' =>1
                ],
                [
                    'title' =>'特捜96 #8',
                    'time' =>'14:50',
                    'content' =>'「消えた少年…1万人の密室!!東京湾岸大捜査」井ノ原快彦▽小学生が誘拐された現場は浅輪が子供時代を過ごした場所だった。"怪しげな人物"の目撃証言を得た特捜班は…',
                    'url' => 'nullable',
                    'genre_id' =>1
                ],
                [
                    'title' =>'刑事7人8 #4',
                    'time' =>'15:48',
                    'content' =>'「人気俳優スキャンダル死!?疑惑の証言…噂の真相!!」東山紀之▽映画の撮影中に俳優がボウガンの誤射で死亡した。容疑者は335人。天樹は一人ずつ事情聴取を始めるが…',
                    'url' => 'https://www.tv-asahi.co.jp/keiji7_09/',
                    'genre_id' =>1
                ],
                [
                    'title' =>'スーパーJチャンネル',
                    'time' =>'16:45',
                    'content' =>'視聴者が知りたいニュース・情報をズバリお伝えします!テレビ朝日の系列局26局(ANN)が総力取材!いち早く正確な情報を届けます。',
                    'url' => 'https://www.tv-asahi.co.jp/super-j/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'くりぃむクイズ ミラクル9 2時間SP',
                    'time' =>'19:00',
                    'content' =>'くりぃむしちゅー上田がMCを務める新感覚クイズバラエティ。有田チームとゲストキャプテン率いるチームとの対抗戦!著名人が様々なクイズに挑戦します',
                    'url' => 'https://www.tv-asahi.co.jp/miracle9/',
                    'genre_id' =>2
                ],
                [
                    'title' =>'私の幸福時間',
                    'time' =>'20:54',
                    'content' =>'あなたの「しあわせ」は、どこから?なにから?友人や家族と過ごす時間、歴史や文化に触れ合う時間、趣味に没頭する時間…誰もがもっている"大切なひととき"をご紹介。',
                    'url' => 'https://www.tv-asahi.co.jp/shiawasejikan/',
                    'genre_id' =>7
                ],
                [
                    'title' =>'特捜9 season6 #9',
                    'time' =>'21:00',
                    'content' =>'ある会社の社長が刺殺された!!捜査線上には恨みを持つ人物が現れる。しかし、留置場内で警察を揺るがす大事件が発生し…!?個性派刑事が活躍する人気ドラマシリーズ最終回!',
                    'url' => 'https://www.tv-asahi.co.jp/tokusou9_06/',
                    'genre_id' =>1
                ],
                [
                    'title' =>'報道ステーション',
                    'time' =>'21:54',
                    'content' =>'「深く、力強く、きょう色々。」大越健介キャスターが、きょう知りたいニュースを"深い洞察"と"平たい言葉"でお送りします。',
                    'url' => 'https://www.tv-asahi.co.jp/tokusou9_06/',
                    'genre_id' =>5
                ],
                [
                    'title' =>'博多華丸・大吉の世界水泳福岡ばい!',
                    'time' =>'23:10',
                    'content' =>'7月開幕!世界水泳福岡。常連客の博多大吉が通うのは元スイマー博多華丸の屋台"世界水泳"。 大会の注目ポイントや知れば通になる選手情報など旬なネタをお届けします!',
                    'url' => 'https://www.tv-asahi.co.jp/swimming/fukuokabai/',
                    'genre_id' =>6
                ],
                [
                    'title' =>'かまいガチ',
                    'time' =>'23:15',
                    'content' =>'メトロックに濱家&山内が参戦▼かまいたちの2人が今持てる全ての力を注ぎ込み"ガチでそのとき面白いと思うこと"に挑戦するかまいたちの関東初冠レギュラー番組!',
                    'url' => 'https://www.tv-asahi.co.jp/kamaigachi/#/?category=variety',
                    'genre_id' =>2
                ],
                [

                    'title' =>'くりぃむナンタラ',
                    'time' =>'23:45',
                    'content' =>'若手芸人がくりぃむら先輩に悩みを打ち明ける「芸人相談酒場」キングオブコント王者ビスケットブラザーズの悩みをくりぃむ&amp;チョコプラ&amp;ウイカが解決!どんな仕上がりに?',
                    'url' => 'https://www.tv-asahi.co.jp/nantara/',
                    'genre_id' =>2
                ],
                [
                    'title' =>'トゲトゲTV',
                    'time' =>'24:15',
                    'content' =>'3時のヒロイン福田×Aマッソ加納×ラランド サーヤ 令和のお笑い界に革命を起こす3人の女芸人があらゆるミッションをクリアするために奮闘し成長していくバラエティー',
                    'url' => 'https://www.tv-asahi.co.jp/togetogetv/',
                    'genre_id' =>2
                ],
                [
                    'title' =>'お願い!ランキングpresentsそだてれび',
                    'time' =>'24:45',
                    'content' =>'テレビ朝日全局員を対象にした企画オーディションバトルがスタート!《ドラマ》《バラエティー》《ドキュメンタリー》《アニメ》次世代のスタークリエイターを発掘・育成!',
                    'url' => 'https://www.tv-asahi.co.jp/onegai_chosenkyo/',
                    'genre_id' =>2
                ],
                [
                    'title' =>'全力坂',
                    'time' =>'25:20',
                    'content' =>'この坂を登り切れたら、自分の中の何かが変わる気がする。いや変わるはずだ。坂を全力で駆け上がる女性たちの姿と、話題の商品・エンタメ情報をお届けする深夜番組登場。',
                    'url' => 'https://www.tv-asahi.co.jp/saka/',
                    'genre_id' =>2
                ],
                [
                    'title' =>'Break Out',
                    'time' =>'25:26',
                    'content' =>'様々なシーンの最前線で活躍するアーティストたちに愛を捧げ、その素顔や魅力を発掘する音楽番組。',
                    'url' => 'http://break-out.jp/',
                    'genre_id' =>3
                ],
                [
                    'title' =>'岩井&花澤 まんが未知',
                    'time' =>'25:56',
                    'content' =>'《芸能人×漫画家》未知なる才能を掛け算する新感覚漫画バラエティ!◆=LOVE大場花菜が原作に挑戦…恋を知らない女子高生の気になる相手はイケメン女子?',
                    'url' => 'https://douga.tv-asahi.co.jp/program/25963-25962',
                    'genre_id' =>2
                ],
                [
                    'title' =>'シソンヌ長谷川×○○のキマリ',
                    'time' =>'26:13',
                    'content' =>'世代No.1コント師との呼び声高いシソンヌ長谷川と若い世代に支持されるアーティストがコラボ!一般の方々の「マイルール」="キマリ"を肴に本音をぶつけあうトーク番組!',
                    'url' => 'https://www.telasa.jp/series/12895?page=3',
                    'genre_id' =>2
                ],
                [
                    'title' =>'ミセススクールエスト',
                    'time' =>'26:30',
                    'content' =>'Mrs. GREEN APPLEが番組初の男子校へ潜入!サプライズの校内放送で全校生徒を集合させたミセスに、男子生徒たちの反応は!?さらに、自由に校内の壁に落書きOKのレア体験も!',
                    'url' => 'https://mrsgreenapple.com/contents/624024',
                    'genre_id' =>2
                ],
                [
                    'title' =>'杉谷拳士が取材中',
                    'time' =>'26:47',
                    'content' =>'ナレーションの極意を取材中の杉谷拳士に、意外な才能が発覚!? どこよりも遅いプロ野球大予言2023・ヤクルト編!',
                    'url' => 'https://douga.tv-asahi.co.jp/program/39558-39557',
                    'genre_id' =>5
                ],
                [
                    'title' =>'ワカコさんとマサルくんのお宅は買わないの??',
                    'time' =>'27:04',
                    'content' =>'ワカコさんとマサルくんにアナウンサーを目指す学生達が今話題の商品を紹介! その魅力と衝撃の価格にスタジオは驚きの連続!それでもお宅は買わないの??',
                    'url' => 'https://www.tv-asahi.co.jp/pr/contents/20230525_14620.html',
                    'genre_id' =>2
                ],
                [
                    'title' =>'ミッドナイトマルシェ',
                    'time' =>'27:30',
                    'content' =>'ダイエット・美容・ヘアケア・健康・ライフ・キッチン・雑貨・宝飾・電化製品‥日本・米国を始め世界中の逸品を自宅でくつろぎながらショッピング!',
                    'url' => 'https://www.tv-asahi.co.jp/pr/contents/20230604_01058.html',
                    'genre_id' =>7
                ]
            ]);
    }
}
