<?php
// ファイルがなければその後の処理は行わない
require('4-9_include.php');

// ファイルが存在しなくてもその後の処理は継続される
include ('4-9_include.php');

echo sum(10, 15);
