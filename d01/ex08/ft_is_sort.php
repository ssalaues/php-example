<?php
	function ft_is_sort($tab)
	{
		$new = $tab;
		sort($new);
		if ($tab === $new)
			return true;
		else
			return false;
	}
?>
