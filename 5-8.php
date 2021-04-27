<?php
class Item {
  // protected 親クラスと継承したクラスで参照できるプロパティ
  protected int $unit; // 個数（アクセス修飾子をprivateにすると継承クラスでは使用できない）

  public function __construct(int $unit) {
    $this->unit = $unit;
  }

  public function getUnit(): string {
    return $this->unit . '個';
  }
}

class Book extends Item {
  private int $page; // ページ数
  public function __construct(int $unit, int $page) {
    // parent:: 自分の親クラス
    parent::__construct($unit);
    $this->page = $page;
  }
  // オーバーライド（親クラスで定義されたメソッドを上書きする）
  public function getUnit(): string {
    return $this->unit . '冊';
  }
}

$eraser = new Item(10);
echo $eraser->getUnit(), "\n";

$book = new Book(5, 120);
echo $book->getUnit();
