<?php
class Item {
  // protected 親クラスと継承したクラスで参照できるプロパティ
  protected int $uint; // 個数（アクセス修飾子をprivateにすると継承クラスでは使用できない）

  public function __construct(int $uint) {
    $this->uint = $uint;
  }

  public function getUint(): string {
    return $this->uint . '個';
  }
}

class Book extends Item {
  // オーバーライド（親クラスで定義されたメソッドを上書きする）
  public function getUint(): string {
    return $this->uint . '冊';
  }
}

$eraser = new Item(10);
echo $eraser->getUint(), "\n"; // 10個

$book = new Book(5);
echo $book->getUint(); // 5冊
