<?php

$input = explode("\n", file_get_contents('day1.txt'));
$output = 0;
$found = [$output];
$foundTwice = false;

while(!$foundTwice) {
	foreach ($input as $line) {
		if(!empty($line)) {
			$output += (int)$line;
			if(in_array($output, $found)) {
				echo $output . " already found\n";
				$foundTwice = true;
				break;
			}
			$found[] = $output;
		}
	}
	echo $output . PHP_EOL;
}
