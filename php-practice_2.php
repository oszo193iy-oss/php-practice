<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac' . PHP_EOL;
        
    } elseif ($i % 5 === 0) {
        echo 'tac' . PHP_EOL;
        
    } elseif ($i % 4 === 0) {
        echo  'tic' . PHP_EOL;
        
    } else {
        echo $i . PHP_EOL;
    }
}

// Q2 多次元連想配列
問題1
$b_tel = $personalInfos[1]['tel'];
echo 'Bさんの電話番号は'. $b_tel . 'です。';

問題2
foreach ($personalInfos as $index => $m) {
    $number = $index + 1;
    echo $number . '番目の' . $m['name'] . 'のメールアドレスは' . $m['mail'] . 'で、電話番号は'. $m['tel'] . 'です。' . PHP_EOL; 
}

問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => &$m){
    $m ['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('エラー');
        
    }
    
        $this->studentId = $id;
        $this->studentName = $name;
    }
    
    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120,'山田');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。' ;

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('エラー');
        
    }
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this -> studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this -> studentId;
    }
}
$student = new Student(120,'山田');
$student->attend('PHP'); 

// Q5 定義済みクラス

問題1
$date = new DateTime ();
$date ->modify('-1 month');
echo $date->format('Y-m-d');

問題2
$date1 = new DateTime('2026-03-11');
$date2 = new DateTime('1992-04-25');

$interval = $date1 -> diff($date2);

echo 'あの日から' . $interval -> days . '日経過しました。';