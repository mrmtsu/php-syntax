<?php
class Item {
  // 静的プロパティ
  public static int $tax = 10; // 消費税

  // 静的メソッド
  public static function getTax(): int {
    // 静的メソッドから静的プロパティを呼び出す際はselfを使用する
    return self::$tax;
  }

  // // 静的メソッド内では$thisは使用できない
  // public static function getTax(): int {
  //   return 15;
  // }
}

// $item = new Item();
// echo $item->getTax();

// echo Item::getTax();

echo Item::$tax;
Item::$tax = 8;

$item02 = new Item();
echo $item02->getTax();
