<?php
// 都道府県コード => 都道府県名
$prefectures = array(
  1  => "北海道", 2  => "青森県", 3  => "岩手県", 4  => "宮城県", 5  => "秋田県",
  6  => "山形県", 7  => "福島県", 8  => "茨城県", 9  => "栃木県", 10 => "群馬県",
  11 => "埼玉県", 12 => "千葉県", 13 => "東京都", 14 => "神奈川県", 15 => "新潟県",
  16 => "富山県", 17 => "石川県", 18 => "福井県", 19 => "山梨県", 20 => "長野県",
  21 => "岐阜県", 22 => "静岡県", 23 => "愛知県", 24 => "三重県", 25 => "滋賀県",
  26 => "京都府", 27 => "大阪府", 28 => "兵庫県", 29 => "奈良県", 30 => "和歌山県",
  31 => "鳥取県", 32 => "島根県", 33 => "岡山県", 34 => "広島県", 35 => "山口県",
  36 => "徳島県", 37 => "香川県", 38 => "愛媛県", 39 => "高知県", 40 => "福岡県",
  41 => "佐賀県", 42 => "長崎県", 43 => "熊本県", 44 => "大分県", 45 => "宮崎県",
  46 => "鹿児島県", 47 => "沖縄県",
);

//末尾から要素を取り除く→沖縄だけ取り除く
// var_dump(array_pop($prefectures));
// var_dump($prefectures);

echo '<br><br>';

//先頭から要素を1つ取り出す 北海道が取り出される
// var_dump(array_shift($prefectures));
// var_dump($prefectures);

echo '<br><br>';

// var_dump(array_keys($prefectures));

// var_dump($prefectures);

//先頭から2つ 北海道と青森が取り除かれた
// var_dump(array_slice($prefectures, 2));

//指定した値を探しだす true or false で判定
// var_dump(in_array("東京都", $prefectures));
// var_dump(in_array("もやし", $prefectures));

//指定した文字列を挟んでくれる
var_dump(implode('#', $prefectures));

var_dump(is_array($prefectures));
?>

