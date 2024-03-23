It is a solution of task: Problem on Array Sorting.
Here I implemented a function called findIndex.
In the function I sorted the array with array_multisort.I used the built-in array_multisort function in PHP, which is a hybrid of Merge Sort and Insertion Sort
It has an average time complexity of O(n log n) which improves the time complexity and efficiency of the code.
After sorting the array, I used binary search algorithm to find the index of the target or the insertion point.
The findIndex function will return mid if the target was found otherwise it will return left.
Here user can give array and target input.
Then the solution will give the output.
