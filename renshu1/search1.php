<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="LemonChiffon"> 
  <p>　</p>
  <h3>レストラン検索</h3>
  <form name="search_form" action="search1.php" method="GET">
    <p>
      エリア：<br>
      <select name="address">
        <option value="">全て</option>
        <option value="渋谷">渋谷</option>
        <option value="新宿">新宿</option>
        <option value="高円寺">高円寺</option>
        <option value="千葉">千葉</option>
      </select>
    </p>
    <p>
      平均予算：<br>
      <input type="text" size="6" name="price_start" value=""/>～
      <input type="text" size="6" name="price_end" value=""/>
      <br>
    </p>
    <p>
      <input type="submit" name="submit" value="絞込検索">
    </p>
  </form>

  <table border="1">
    <th>No</th>
    <th>エリア</th>
    <th>店名</th>
    <th>平均予算</th>

<?php

	$conn = mysql_connect( "localhost", "root", "" );
	if( $conn == false )
	{
		die("MySQL 接続エラー");
	}
	mysql_set_charset( "utf8" );
	mysql_select_db( "db2_enshu1" );

	$sql  = " SELECT * FROM restaurant ";
	$res = mysql_query( $sql );
	while( $row = mysql_fetch_array( $res ) )
	{
		print("<tr>");
		print("<td>" . $row["restaurant_no"] . "</td>");
		print("<td>" . $row["address"] . "</td>");
		print("<td>" . $row["name"] . "</td>");
		print("<td>" . $row["price"] . "</td>");
		print("</tr>\n");
	}
	mysql_free_result($res);
	mysql_close();
?>
  </table>

</body>
</html>
