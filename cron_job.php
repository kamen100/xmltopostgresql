<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="conten-type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>        
    <body>
        
    </body>
</html>
<?php
//$url = ('https://some_site/feet'); //For production, do not forget to remove the test $url
$url = ('xml.xml');             //For a test
$xml = simplexml_load_file($url);
$conn = new db;
$author = "";
$name = "";

foreach ($xml as $x => $level1) {
    $author = (string) $level1->author;
    $name = (string) $level1->name;
    $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    echo "Първо ниво на вложеност";
    ?><br><?php }
?><br><?php
foreach ($level1 as $x => $level2) {
    $author = (string) $level2->author;
    $name = (string) $level2->name;
    $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    echo "Второ ниво на вложеност";
    ?><br><?php }
?><br><?php
foreach ($level2 as $x => $level3) {
    $author = (string) $level3->author;
    $name = (string) $level3->name;
    $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    echo "Трето ниво на вложеност";
    ?><br><?php }
?><br><?php
foreach ($level3 as $x => $level4) {
    $author = (string) $level4->author;
    $name = (string) $level4->name;
    $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    echo "Четвърто ниво на вложеност";
    ?><br><?php }
?><br><?php
foreach ($level4 as $x => $level5) {
    $author = (string) $level5->author;
    $name = (string) $level5->name;
    $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    echo "Пето ниво на вложеност";
    ?><br><?php
}
?>
