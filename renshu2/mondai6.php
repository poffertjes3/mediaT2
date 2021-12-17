<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="LemonChiffon"> 
  <p>　</p>
  <h3>売上検索</h3>

  <table border="1">
    <th>uriage_no</th>
    <th>renban</th>
    <th>shohin_CD</th>
    <th>volume</th>

<?php

	$conn = mysql_connect( "localhost", "db_user", "123456" );
	if( $conn == false )
	{
		die("MySQL 接続エラー");
	}
	mysql_set_charset( "utf8" );
	mysql_select_db( "db2_enshu2" );

	$sql  = "";
	print($sql);
	$res = mysql_query( $sql );
	while( $row = mysql_fetch_array( $res ) )
	{
		print("<tr>");
		print("<td>" . $row["uriage_no"] . "</td>");
		print("<td>" . $row["renban"] . "</td>");
		print("<td>" . $row["shohin_CD"] . "</td>");
		print("<td>" . $row["volume"] . "</td>");
		print("</tr>\n");
	}
	mysql_free_result($res);
	mysql_close();
?>
  </table>

</body>
</html>
