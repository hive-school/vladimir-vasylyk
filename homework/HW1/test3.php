
<?php

//echo "Input any string of characters:\n";
//$line = fgets(STDIN);

$line = "Input any string of characters:";

$start = microtime(true);

for($k=0; $k < strlen($line);$k++)
{
    $arr_char[] = $line{$k};
}
$unique_char = array_unique($arr_char); //creating array w/ unique values
$unique_char = array_values($unique_char); //reindexing array w/ unique values

//adding new comment to see how it will be merged

$counter = 0; //variable to count characters
$total_char = 0;

// for each character in unique array counting number of character in input string
foreach($unique_char as $val){
    for($i=0;$i<count($arr_char);$i++){
        if ($val == $arr_char[$i]){
            $counter++;
        }
    }
    //echo "Symbol '{$val}' presented in the input line " . $counter . " times\n";
    $total_char += $counter;
    $counter=0; //resetting counter
}
$time = microtime(true) - $start;
printf('time: %.5F сек.', $time);
echo "\n";

//echo "Input string length is " . strlen($line) . " characters\n";
//echo "This script processed  " . $total_char . " characters\n";
//
//if (strlen($line) == $total_char){
//    echo "Profit! :)\n";
//} else {
//    echo "Oh noooo, not working again\n";
//}