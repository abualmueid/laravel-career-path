# Problem 1: Given a list of integers, find the minimum of their absolute values.

Note: 'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. <br>

Sample input 1: 10 12 15 189 22 2 34 <br>
Sample output 1: 2 <br>

Sample input 2: 10 -12 34 12 -3 123 <br>
Sample output 2: 3 <br>

## How to solve

1. Declare an array of some integer numbers.
2. Loop through the numbers upto the length of the array. 
3. Check for any negative number. If so then make it positive.
4. Find the min value among the numbers.
5. Return the value and print it.