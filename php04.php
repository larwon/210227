<?
	function plus($a, $b)
	{
		if ($a < $b)
		{
			$sum = 0;
			for ($i=$a; $i<=$b; $i++)
			{
				$sum = $sum + $i;
			}
		}
		else
		{
			$sum = 0;
			for ($i=$b; $i<=$a; $i++)
			{
				$sum = $sum + $i;
			}
		}
		return $sum;
	}
	
	$result = plus($num1, $num2);

		
	echo "ù��° �Է��� ���� : $num1 , �ι�° �Է��� ���� : $num2 <br>";
	echo "�� �հ� : $result";

?>