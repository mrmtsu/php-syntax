<?php
class Item {
  // プロパティ
  public string $name; // 商品名
  public int $price; // 価格

  // コンストラクター
  public function __construct(string $name, int $price = 0) {
    $this->name = $name;
    $this->price = $price;
  }

  // メソッドの定義
  public function getPrice(string $end = '') {
    return number_format($this->price) . $end;
  }
}

// デフォルト引数が設定されているため第二引数をしてしなくても実行可能
$php_basic = new Item('PHP入門');
echo $php_basic->name, '/', $php_basic->getPrice('円');

$js_basic = new Item('JS入門', 2300);
