<html>
<head>
</head>

<body>
<table border="1">
  <tbody>
    <tr>
    	<td>ISBN</td>
      <td>Title</td>
      <td>Author</td>
      <td>Description</td>
    </tr>
  </tbody>
  <?php
  			
			foreach ($books as $title => $book)
			{
				echo '<tr><td><a href="index.php?book=' .
				$book->isbn . '">' .
				$book->isbn . '</a></td><td>'.
				$book->title . '</a></td><td>' .
				$book->author . '</td><td>' .
				$book->description . '</td></tr>';
			}
		?>
</table>


<p>Filter records
<input type="text" name="filter"></p> <br>
<input type="submit">
</body>
</html>
