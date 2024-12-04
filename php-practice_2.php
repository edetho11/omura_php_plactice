<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します ' . "\n";
for ($i = 1; $i <=100; $i++) {

  if ($i % 4 == 0 && $i % 5 == 0){
    echo  'tic-tac' . "\n";

  } elseif ($i % 4 == 0) {
    echo 'tic' . "\n";

  } elseif ($i % 5 == 0) {
    echo 'tac' . "\n";

  }else{
    echo $i . "\n";

  }

}
// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// Q2_1
$infoBsTel = $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。' . "\n";
echo $infoBsTel;

// Q2_2
foreach ($personalInfos as $key => $value){
  $key += 1;
  $emailAndTel = $key . '番目の' . $value['name'] . 'メールアドレスは' . $value['mail'] . 'で、電話番号は' . $value['tel'] . 'です。' . "\n";
  echo $emailAndTel;
}

// Q3_3
$ageList = [25, 30, 18];

foreach ($personalInfos as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}

var_dump($personalInfos);



// Q3 オブジェクト-1
class Student {
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($Subject)
    {
      echo $this->studentName . 'は' . $Subject . 'の授業に参加しました。' . '学籍番号:' . $this->studentId . "\n";
    }
}

$yamada = new Student('120', '山田');
$yamadasInfo = '学籍番号' . $yamada -> studentId . '番の生徒は' . $yamada->studentName . 'です。' . "\n";
echo $yamadasInfo;



// Q4 オブジェクト-2
$yamada->attend('PHP');



// Q5 定義済みクラス
// Q5_1
$now = new DateTime();
$now->modify('-1 month');

echo $now->format('Y-m-d') . "\n";

// Q5_2
$referenceDate = new DateTime('1992-04-25');
$now->modify('+1 month');
$diff = $now->diff($referenceDate);

echo $diff->format('あの日から%a日経過しました。') . "\n";



?>