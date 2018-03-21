<html>
<head>
<title>Divide</title>
</head>

<body>
<pre>
Divide
Adam chose three natural numbers N, X, C and a string S of N natural numbers. He chooses a value P,
a non-zero natural number, in order to divide the string S in P subsequences (elements from S placed
in neighbouring positions) with the minimum sum of their subsequences costs (denoted mx). It is
known that for each subsequence that is obtained, its cost represents the absolute value of the
difference between C and the sum of the elements in that subsequence. The value P will not exceed
the number X. Adam wants to calculate the value V, which is equal to the sum of the values mx
obtained for all the possible choices of P. Since V can be very big, you have to find the remainder of V
divided by 666013.

Input Data
The input file test.in will contain three natural numbers N, X and C on the first line. The second line
of the file will contain the N elements of the string S.

Output Data
The output file test.out will contain on the first line the value V modulo 666013.

Restrictions
• 1 ≤ X ≤ N ≤ 100.000
• 1 ≤ P ≤ X ≤ 30
• the values of the string S and the value C will be natural numbers within the interval [1, 1.000.000]

Example
test.in test.out
5 4 6    32
1 3 2 2 8

Explanations
If P=1, then the cost obtained is 10.
If P=2, then the cost obtained is minimum 4 for selecting the two sequences 1 3 2 and 2 8.
If P=3, then the cost obtained is minimum 6 for selecting the three sequences 1 3, 2 2 and 8.
If P=4, then the cost obtained is minimum 12 for selecting the four sequences 1 3, 2 , 2 and 8.

Execution time 0.2s/test Memory 16 MB
</pre>

<form action="form.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Evaluează fișieru ăsta" name="submit">
</form>

</body>
</html>