# Problem-3: Given a sentence, keep the order of the words same, but reverse the characters of each word. 

For example, if the given sentence is: ‘I love programming’ <br>
The result should be: ‘I evol gnimmargorp’ <br>

Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed. 

## How to solve

1. Take String input from user.
2. Loop through the string until there is no space left behind.
3. Inside the loop, take first word of the sentence always and then reverse it. Find first space (' ') occurance in the string each time and make sub string starting from index just after the space (' ') found to end of the string. 