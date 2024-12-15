<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
                'name' => 'UNO',
                'body' => 'UNOは、2～10人で遊べる人気のカードゲームです。プレイヤーは色と数字を合わせて手札を減らし、最初にカードをすべて使い切った人が勝者となります。特殊カード（スキップ、リバース、ドロー2、ワイルドカード）を使うことでゲームが盛り上がります。「UNO!」と宣言するルールが特徴で、手札が1枚になったときに忘れるとペナルティを受けます。ルールが簡単で、幅広い年齢層で楽しめるのが魅力です。',
                'level' => '簡単',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('games')->insert([
                'name' => 'カタン',
                'body' => 'カタンは、3～4人で遊ぶボードゲームで、プレイヤーは島を開拓して資源を集め、道や街を建設します。資源（木材、レンガ、小麦、羊、鉱石）はダイスの目で獲得でき、交渉やトレードで他プレイヤーとやり取りも可能です。建設や発展カードで得点を稼ぎ、10点に到達したプレイヤーが勝者となります。戦略性と交渉力が試される奥深いゲームです。',
                'level' => '普通',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'コヨーテ',
                'body' => 'コヨーテは、心理戦が魅力のパーティーカードゲームです。プレイヤーは各自、自分以外の全員のカードを見ることができますが、自分のカードだけは見えません。カードには正の数字や負の数字、特殊効果が記されており、全員で合計の数値を推測して宣言します。しかし、実際の合計値が宣言を超えていた場合、宣言者が負けになります。記憶力やブラフのスキルが試されるシンプルながら奥深いゲームです。',
                'level' => 'Normal',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'ザマインド',
                'body' => 'ザ・マインドは、チームで協力してプレイするユニークなカードゲームです。プレイヤーは番号が記されたカードを手札として受け取り、数字の小さい順に全員でカードを出していきます。ただし、話し合いやジェスチャーは禁止され、完全に直感やチームの一体感に頼ります。ラウンドをクリアするたびに難易度が上がり、より高度な連携が求められるため、集中力と心のつながりが試されるゲームです。',
                'level' => '簡単',
                'category_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => '音速飯店',
                'body' => '音速飯店は、スピードと記憶力を試すパーティーカードゲームです。プレイヤーはお客さんとして各自の注文（カード）を覚え、素早く正確に配膳（カードを出す）することが求められます。時間制限やルールに従いながら、ミスを減らし、最速で配膳を完了することが勝利の鍵です。短時間でプレイでき、笑いや緊張感を楽しめるゲームとして人気があります。',
                'level' => '簡単',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('games')->insert([
                'name' => 'そっとおやすみ',
                'body' => 'そっとおやすみは、協力型のパーティーカードゲームで、プレイヤー全員で一つの布団（カードの束）を作ることを目指します。カードには布団や枕、ぬいぐるみなどが描かれており、プレイヤーは順番に手札を出して布団を完成させますが、ルールに従いながら不要なカードをうまく避ける必要があります。シンプルながら駆け引きや協力が楽しめ、初心者から熟練者まで楽しめる内容です。',
                'level' => '簡単',
                'category_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
            
    }
}
