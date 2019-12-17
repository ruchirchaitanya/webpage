  <html>

  <head>
   <title>Test</title>
  </head>

  <body bgcolor="pink">

  <?
  $link = pg_Connect("dbname=sampledb user=userD4U password=MS3Of3Phenhbgj1K");
  $result = pg_exec($link, "select * from link");
  $numrows = pg_numrows($result);
  echo "<p>link = $link<br>
  result = $result<br>
  numrows = $numrows</p>
  ";
  ?>

  <table border="1">
  <tr>
   <th>Last name</th>
   <th>First name</th>
   <th>ID</th>
  </tr>
  <?

   // Loop on rows in the result set.

   for($ri = 0; $ri < $numrows; $ri++) {
    echo "<tr>\n";
    $row = pg_fetch_array($result, $ri);
    echo " <td>", $row["id"], "</td>
   <td>", $row["url"], "</td>
   <td>", $row["name"], "</td>
   <td>", $row["description"], "</td>
   <td>", $row["rel"], "</td>
  </tr>
  ";
   }
   pg_close($link);
  ?>
  </table>

  </body>

  </html>