<?php

function findIndex($nums, $target) {
    // Sort the array in ascending order
    $sorted = $nums;
    array_multisort($sorted);

    // Use binary search to find the index of the target or the insertion point
    $left = 0;
    $right = count($sorted) - 1;

    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);

        if ($sorted[$mid] == $target) {
            return $mid;
        } elseif ($sorted[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    // The target was not found, return the insertion point
    return $left;
}

// user to enter the array elements
echo "Enter the array elements separated by spaces: ";
$input = trim(fgets(STDIN));
$nums = array_map('intval', explode(' ', $input));

//user to enter the target
echo "Enter the target: ";
$target = trim(fgets(STDIN));

echo "Input: nums = [" . implode(", ", $nums) . "], target = $target\n";
echo "Output: " . findIndex($nums, $target) . "\n";

?>