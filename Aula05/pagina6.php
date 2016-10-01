<?php
	$resultado = null;
	function fatorial ($x) {
		// 5*4*3*2*1 => return resultado final 
		// realizar o fatorial de um numero x
	for ($i = 1; $i >= $x; --$i) {
		$result=$i * --$i;
	}
	return = $result;
	
	}
	
	if (isset($_GET['value'])) {
		$resultado = fatorial($_GET['value']);
	}
?>

<html>
<head>
	<title>Fatorial</title>
</head>
<body>
      <form action="pagina6.php" method="GET">
      		<input type="text" name="value" />
      		<input type="submit" value="calcular" />
      </form>


<?php
	$valor=_GET[$value];
	fatorial($value)
?>	


      <div>
      	resposta: 

	<?php if($resultado != null): ?>
		<?= $resultado ?>
	<?php endif ?>



      </div>

</body>


</html>