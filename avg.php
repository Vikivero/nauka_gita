<?php
function avg($str)
{
    $nums = explode(', ', $str);
	echo array_sum($nums)/count($nums);
}
?>