<?


	$num_str = strlen($num);
	
	echo "strlen() �Լ� ��� : $num_str <br>";

	$num_front = substr($num, 0, 6);
	$num_back = substr($num, 6, 13);

	echo "substr() �Լ� ��� : $num_front , $num_back <br>";

	if ($num_back[1] == 2)
	{
		echo "����";
	}
	else
	{
		echo "����";
	}

	
?>