<?php
function avg($str)
{
    $nums = explode(', ', $str);
	echo array_sum($nums)/count($nums);
}

function avg_wazona($stx)
{
    $nums = explode(', ', $stx);
	echo array_sum($nums)/count($nums);
}
?>
