<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="LemonChiffon"> 
  <p>　</p>
  <h3>レストラン登録</h3>
  <form name="search_form" action="regist.php" method="GET">
    <p>
      No：<br>
      <input type="text" size="6" name="restaurant_no" value=""/>
    </p>

    <p>
      エリア：<br>
      <input type="text" size="6" name="address" value=""/>
    </p>

    <p>
      店名：<br>
      <input type="text" size="6" name="name" value=""/>
    </p>

    <p>
      平均予算：<br>
      <input type="text" size="6" name="price" value=""/>
    </p>

    <p>
      <input type="submit" name="submit" value="登録">
    </p>

  </form>

<?php
	if( $_REQUEST["restaurant_no"] != "" )
	{
		$conn = mysql_connect( "localhost", "root", "" );
		if( $conn == false )
		{
			die("MySQL 接続エラー");
		}
		mysql_set_charset( "utf8" );
		mysql_select_db( "db2_enshu1" );

		$sql = " INSERT INTO restaurant(restaurant_no,address,name,price) ";
		$sql = $sql . " VALUES( ";
		$sql = $sql . "'" . $_REQUEST["restaurant_no"] ."' , ";
		$sql = $sql . "'" . $_REQUEST["address"] ."' , ";
		$sql = $sql . "'" . $_REQUEST["name"] ."' , ";
		$sql = $sql . "'" . $_REQUEST["price"] ."' ) ";
		$res = mysql_query( $sql );

		if( $res == false )
		{
			print("エラーが発生しました。");
		}
		else
		{
			print("正常に登録されました。");
		}
		mysql_close();
	}
?>

</body>
</html>
