<?php

class db {

    function __construct() {
        $conn_string = "host=127.0.0.1 port=5433 dbname=book user=postgres password=Presiqn11";
        $dbconnect = pg_connect($conn_string)or die('connection failed');
        return $dbconnect;
    }

    function select() {

        $name = $_POST['val'];
        $coding = pg_set_client_encoding("UNICODE");
        $select = pg_query("SELECT author,name FROM bookstore WHERE author='$name';");
        if (empty($select)) {
            print_r("Не можахме да намерим този автор");
        } else {
            $row = pg_fetch_all($select);
            foreach ($row as $x) {
                print_r('<p class="animated slideInLeft text">' . $x['name'] . '</p>');
            }
        }
    }

    function select_author() {
        $coding = pg_set_client_encoding("UNICODE");
        $select = pg_query("SELECT author FROM bookstore;");
        $row = pg_fetch_all($select);
        foreach ($row as $x) {
         return $row;        
         
        }
    }

    function insert() {
        $coding = pg_set_client_encoding("UNICODE");
    $db = pg_query("INSERT INTO bookstore (author, name)
  values ('$author',  '$name') ON CONFLICT (author) DO UPDATE SET name = Excluded.name;");
    }

}
