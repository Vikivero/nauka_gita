<?php
function avg($str)
{
    $nums = explode(', ', $str);
	echo array_sum($nums)/count($nums);
}

function avg_wazona($std)
{
    $nums = explode(', ', $std);
	echo array_sum($nums)/count($nums);
}
?>
