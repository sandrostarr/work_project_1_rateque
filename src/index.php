<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STOCKS</title>
</head>
<body>
	<h1>STOCKS!</h1>

<?



$emitent = 'GMKN';
$price = 18220;


$format = '.json';

$uri = 'https://iss.moex.com/iss/engines/stock/markets/shares/securities/'.$emitent.$format;

$result = file_get_contents($uri);
$resultObject = json_decode($result,true);
 /* @var $resultObject type */
$cost = $resultObject['marketdata']['data'][0][4];
// return $this->cost;
// var_dump($resultObject['marketdata']['data'][0]);
// echo $cost;


$difference = $cost-$price; // разница покупки и текущей цены
$percent = intval(($difference/$price*100) * 100) / 100;



?>

<table border="1">
	<tr>
		<th>Идентификатор</th>
		<th>Цена покупки</th>
		<th>Цена сейчас</th>
		<th>Разница</th>
		<th>Процент</th>
	</tr>
	<tr>
		<td><?=$emitent?></td>
		<td><?=$price?></td>
		<td><?=$cost?></td>
		<td><?=$difference?></td>
		<td><?=$percent?></td>
	</tr>
</table>


</body>
</html>