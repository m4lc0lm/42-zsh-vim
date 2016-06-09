<html>
	<head>
		<link rel="stylesheet" type="text/css" href="puissancestyle.css">
	</head>
<?php
for ($i=0; $i<8; $i++)
{
	for ($j=0; $j<8; $j++)
	{
		$grille[$i][$j] = '#';
		echo '<p class="case";>' . $grille[$i][$j] . '</p>';
	}
	echo '<br/>';
}

echo '<br/>';

for ($i=0; $i<8; $i++)
{
	if ($i%2 == 0)
	{
		for ($j=0; $j<8; $j++)
		{
			if ($j%2 == 0)
			{
				$damier[$i][$j] = '#';
			}	
			elseif ($j%2 != 0)
			{
				$damier[$i][$j] = 'O';
			}

		}
	}
	else
	{
		for ($j=0; $j<8; $j++)
		{
			if ($j%2 == 0)
			{
				$damier[$i][$j] = 'O';
			}	
			elseif ($j%2 != 0)
			{
				$damier[$i][$j] = '#';
			}

		}
	}

}

foreach ($damier as $val)
{
	foreach ($val as $final) 
	{
		echo '<p class="case";>' . $final  . '</p>';
	}
	echo '<br/>';
}

echo 'Done';
?>
</html>
