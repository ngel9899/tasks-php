<?php


// 1)Сформируйте с его помощью следующий HTML код:
// <ul>
// 	<li><a href="page1.html">text1</a></li>
// 	<li><a href="page2.html">text2</a></li>
// 	<li><a href="page3.html">text3</a></li>
// </ul>
$arr = [
	['href'=>'page1.html', 'text'=>'text1'],
	['href'=>'page2.html', 'text'=>'text2'],
	['href'=>'page3.html', 'text'=>'text3'],
];

function arrayOutput($array){
  $resultString = "";
  foreach ($array as $key => $value) {
    $resultString .= '<li><a href=' . $value['href'] . '>' . $value['text'] . '</a></li>';
  }
  echo "<ul><br>$resultString</ul>";
}

arrayOutput($arr);


//2) Сформируйте с его помощью HTML таблицу.

$products = [
	[
		'name'   => 'product1',
		'price'  => 100,
		'amount' => 5,
	],
	[
		'name'   => 'product2',
		'price'  => 200,
		'amount' => 6,
	],
	[
		'name'   => 'product3',
		'price'  => 300,
		'amount' => 7,
	],
];

function createTable($array){
  $resultPrice = "";
  foreach ($array as $key => $value) {
    $resultPrice .= '<tr><td>'. $value['name'] . '</td>' . '<td>'. $value['price'] . '</td>' . '<td>'. $value['amount'] . '</td></tr>';
  }
  echo "<table><tr><td>Имя</td><td>Цена</td><td>Количество</td></tr>$resultPrice</table>";
}

createTable($products);



//3) Сделайте функцию, противоположную функции array_unique.
// Ваша функция должна оставлять дубли и удалять элементы, не имеющие дублей.

$input = [22, 31, 12, 123, 12323, 23213, 12, 22, 12, 44124, 12323];

function removingNonDuplicates($array){
  $arrayDoble = [];
  for($i=0; $i < count($array); $i++) {
    $verification = $array[$i];
    unset($array[$i]);
    if (in_array($verification, $array)){
      $arrayDoble[] = $verification;
    }
    $array[$i] = $verification;
  }
  echo print_r($arrayDoble); //или var_dump()
}

removingNonDuplicates($input);

// А если массив $input = ("a" => "green", "red", "b" => "green", "blue", "red"), не смог придумать что с ним делать. Разбивать на более мелкие?


//4)Дана строка. Поменяйте ее первый символ на второй и наоборот, третий на четвертый
//и наоборот, пятый на шестой и наоборот и так далее. То есть из строки '12345678'
//нужно сделать '21436587'

$string = '12345678';

$arrayString = implode(array_reverse(str_split(strrev($string), 2)));

echo "$arrayString";

//5)Дан массив с произвольными целыми числами. Сделайте так, чтобы первый элемент
//стал ключом второго элемента, третий элемент - ключом четвертого и так далее.
//Пример: [1, 2, 3, 4, 5, 6] превратится в [1=>2, 3=>4, 5=>6]

$array = [1, 2, 3, 4, 5, 6];

function valuesIntoKeys($array){
  $key = [];
  $newArray = [];
  for ($i=0; $i <= count($array) -1 ; $i+= 2) {
    $key = $array[$i];
    $newArray[$key] = $array[$i + 1] ;
  }
  echo print_r($newArray);
}
valuesIntoKeys($array);
