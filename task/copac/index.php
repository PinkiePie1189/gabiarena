<html>
<head>
<title> Copac</title>
</head>

<body>
<pre>
Copac
Winter is coming and Silviu the lumberjack, who lives in The Wonderful Grove needs to cut the trees
such that he can transport them to the city. One such tree can only be transported if, after cutting a
node, the resulting subtrees are smaller or equal than half the size of the initial tree.
Help Silviu figure out which vertices he could “cut”.
Cutting a vertex erases all the connections with his neighbours.
Input data
The input file “test.in” has on the first line a number N, representing the size of the tree.
On the following N-1 lines there are pairs of the form x y, meaning there is an edge between x and y.
Output data
The output file "test.out" must contain the vertices that Silviu could cut such that the tree can be
transported, each vertex on new line, in ascending order. If such a node doesn’t exist, display "Winter is
here!".
Sample
test.in test.out
7 3		 3
1 2
1 3
2 4
3 5
3 6
3 7
Constraints
1<= N, x, y<= 100.000
Execution time 0,3 seconds / test.
Memory 16384 kbytes
</pre>

<form action="form.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Evaluează fișieru ăsta" name="submit">
</form>

</body>
</html>