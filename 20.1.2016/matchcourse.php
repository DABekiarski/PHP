<?php

$coursename = 'JS';

echo match($coursename){
	'PHP' => 'PHP Course',
	'HTML' => 'HTML Course',
	'JS' => 'JavaScript Course',
	'WebD' => 'Web Development Course'
};

?>