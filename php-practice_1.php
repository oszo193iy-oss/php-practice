<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num /2 ;

// Q3 日付操作
$time = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $time . ' です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows') {
    echo '使用OSはwindowsです。';
} else {
 if ($device === 'mac') {
    echo '使用OSはmacです。';
} else {
    echo 'どちらでもありません。';
}
}

// Q5 条件分岐-2 三項演算子

$age = 23;
if ($age < 18) {
    echo '未成年です。';
}

if ($age > 18) {
    echo '成人です。';
}

// Q6 配列

$prefectures = ['青森県','東京都','大阪府','栃木県','千葉県'];
echo $prefectures[3] .'と'. $prefectures[4]. 'は関東地方の都道府県です。';

// Q7 連想配列-1

$date = [
    '東京都'=>'新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
    ];

foreach ($kanto as $key) {
    echo $key . PHP_EOL;
}


// Q8 連想配列-2

foreach ($kanto as $key => $value){
    if ($key == '埼玉県'){
      echo $key . 'の県庁所在地は、' . $value. 'です。';   
    }
}

// Q9 連想配列-3

foreach ($kanto as $key => $value)
{
  if (
      $key=='東京都'||
      $key=='神奈川県'||
      $key=='千葉県'||
      $key=='埼玉県'||
      $key=='栃木県'||
      $key=='群馬県'||
      $key=='茨城県'
      ) {
          echo $key . 'の県庁所在地は、' . $value . 'です。' . PHP_EOL;
      }else{
         echo $key . 'は関東地方ではありません。' . PHP_EOL; 
      }
};      


// Q10 関数-1

function hello($name)
{
    return $name . 'さん、こんにちは。';  
}
echo hello('金谷') . PHP_EOL;
echo hello('安藤') . PHP_EOL;


// Q11 関数-2

function calcTaxInPrice($price){
    return $price * 1.1;
}
$taxInPrice = calcTaxInPrice(1000);
echo '1000円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($number){
    if ($number % 2 == 1){
        return $number . 'は奇数です。';
    }else{
        return $number . 'は偶数です。';
    }
}

echo distinguishNum(11) . PHP_EOL;
echo distinguishNum(24) . PHP_EOL;

// Q13 関数とswitch文

function evaluateGrade($score){
    
    switch ($score) {
        case 'A':
        case 'B':    
            return '合格です。';
            break;
            
        case 'C':
            return  '合格ですが追加課題があります。';
            break;
            
        case 'D':
            return  '不合格です。';
            break;
        default:
            return  '判定不明です。講師に問い合わせてください。';
            break;
    }
}

    echo evaluateGrade('A') . PHP_EOL;
    echo evaluateGrade('E') . PHP_EOL;