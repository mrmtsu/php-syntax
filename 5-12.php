<?php
trait Tax {
  // 消費税を返す
  public function getTax(): int {
    return 10;
  }
}

// 外国の消費税を扱う
trait ForeignTax {
  public function getTax(): int {
    return 20;
  }
}

class Item {
  // TaxとForeginTax2つのトレイトを使用（同じメソッド名の場合）
  use Tax, ForeignTax {
    Tax::getTax insteadof ForeignTax;
    ForeignTax::getTax as getForeginTax;
  }
  private int $price;
}

class Service {
  use Tax;
  private int $service_price;
}

$item = new Item;
echo $item->getTax(), "\n";
echo $item->getForeginTax(), "\n";

$service = new Service;
echo $service->getTax(), "\n";
