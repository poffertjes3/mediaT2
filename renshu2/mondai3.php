<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="LemonChiffon"> 
  <p>　</p>
  <h3>学生検索</h3>

  <table border="1">
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>age</th>
    <th>htown</th>
    <th>class</th>

<?php

	$conn = mysqli_connect( "localhost", "root", "root", "db2_renshu2" );
	if( $conn == false )
	{
		die("MySQL 接続エラー");
	}
	mysqli_set_charset( $conn,"utf8" );

	$sql  = "";
	print($sql);
	$res = mysqli_query( $conn, $sql );
	while( $row = mysqli_fetch_array( $res ) )
	{
		print("<tr>");
		print("<td>" . $row["id"] . "</td>");
		print("<td>" . $row["name"] . "</td>");
		print("<td>" . $row["gender"] . "</td>");
		print("<td>" . $row["age"] . "</td>");
		print("<td>" . $row["htown"] . "</td>");
		print("<td>" . $row["class"] . "</td>");
		print("</tr>\n");
	}
	mysqli_free_result($res);
	mysqli_close();
?>
  </table>

</body>
</html>


