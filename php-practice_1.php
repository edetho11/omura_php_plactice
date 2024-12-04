<?php

// Q1 変数と文字列
$name = '「大村」';
$message = '私の名前は' . $name . 'です。';
echo $message . "\n";



// Q2 四則演算
$x = 5;
$y = 4;
$num= $x * $y;
echo $num . "\n";
$num /= 2;
echo $num . "\n";



// Q3 日付操作
echo date("現在時刻は、Y年m月d日 H時i分s秒です。") . "\n";



// Q4 条件分岐-1 if文
$device='mac';
if ($device=='windows' || $device=='mac') {
    echo '使用OSは、' . $device . 'です。' . "\n";
} else {
    echo 'どちらでもありません' . "\n";
}



// Q5 条件分岐-2 三項演算子
$age=20;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message . "\n";



// Q6 配列
$prefectureInKanto = ['茨城県', '群馬県', '栃木県', '千葉県', '埼玉県', '東京都', '神奈川県'];
$message = $prefectureInKanto[2] . 'と' . $prefectureInKanto[3] . 'は関東地方の都道府県です。';
echo $message . "\n";



// Q7 連想配列-1
$prefectualCapitalInKanto = [
'東京都' => '新宿区',
'神奈川県' => '横浜市',
'千葉県' => '千葉市',
'埼玉県' => 'さいたま市',
'栃木県' => '宇都宮市',
'群馬県' => '前橋市',
'茨城県' => '水戸市'
];

foreach ($prefectualCapitalInKanto as $key => $value) {
echo  $value . "\n";
}



// Q8 連想配列-2
foreach ($prefectualCapitalInKanto as $key => $value) {
  if ($value == 'さいたま市') {
      echo $key . 'の県庁所在地は、' . $value. 'です。' . "\n";
  }
}



// Q9 連想配列-3
$prefectualCapitalInKanto = array_merge($prefectualCapitalInKanto, array('大阪府' => '大阪市'), array('名古屋県' => '名古屋市'));

foreach ($prefectualCapitalInKanto as $key => $value) {
  if (!($value == '名古屋市'|| $value == '大阪市')){
    echo $key. 'の県庁所在地は、' . $value . 'です。' . "\n";
    }else {
      echo $key. 'は関東地方ではありません。' . "\n";
  }
}



// Q10 関数-1
function sayHi($name)
{
    echo  $name . 'こんにちは ' . "\n";
}

sayHi('金谷さん');
sayHi('安藤さん');



// Q11 関数-2
function calcTaxInPrice($price){
    $taxInPrice = $price * 1.1;
    return $price . 'の商品の税込価格は' . $taxInPrice . "円です。" . "\n";
}

echo calcTaxInPrice(1000);



// Q12 関数とif文
function distinguishNum($number)
{
if(($number % 2) == 0){
  return $number . 'は偶数です。' . "\n";
}else{
  return $number . 'は奇数です。' . "\n";
}
}

echo distinguishNum(11);
echo distinguishNum(24);



// Q13 関数とswitch文
function evaluateGrade($Grades)
{
  switch ($Grades) {
    case 'A':
    case 'B':
      return '合格です。'."\n";
      break;

    case 'C':
      return '合格ですが追加課題があります。'."\n";
      break;

    case 'D':
      return '不合格です。'."\n";
      break;

    default:
      return '判定不明です。講師に問い合わせてください。'."\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('F');



?>