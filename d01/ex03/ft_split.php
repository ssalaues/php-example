<?php

	function ft_split($input)
	{
		$split = explode(' ', $input);
		$split = array_filter($split);
		$split = array_splice($split, 0);
		sort($split);
		return $split;
	}

?>
