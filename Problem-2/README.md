# Problem-2: Given a few paragraphs in a file, read the file and count how many words are there. 

For example, if there is a file with the following contents: <br>

Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor. <br>

You need to output: 10 <br>

Because there are 10 words. <br>

Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs.
You need to read the data from a file. 

## How to solve

1. Check file exits or not.
2. If exits open the file in read mode and read the whole file line by line.
3. Count the no of words in each line.
4. Keep adding the no of words of each line with the previous line.
5. To count the no of words loop through the whole line string and find if there is any space. Simple logic is - no of Words = Space+1. 
6. Need to handle other unnecessary remaining spaces with trim() and some other methods.
7. Close the file before returing the final value.