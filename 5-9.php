<?php
// 今回であればgetPriceメソッドを必ず使用しなければならない
interface ItemInterface {
  public function getPrice(): int;
}

// ItemInterfaceを実装したBookクラス
class Book implements ItemInterface {
  private int $price;
  public function getPrice(): int {
    return $this->price;
  }
}

// ItemInterfaceを実装したPencilクラス
class Pencil implements ItemInterface {
  private int $price;
  public function getPrice(): int {
    return $this->price;
  }
}
