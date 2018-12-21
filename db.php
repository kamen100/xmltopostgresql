<?php

//$host = "postgres://ydstwclxtoxoec:da80598bda384c366f3eb1b97fc22a0475f46f3b54bab6627fe0c495ae8f24fc@ec2-54-247-102-1.eu-west-1.compute.amazonaws.com:5432/d49h1eienme0da"; 
//$password = "da80598bda384c366f3eb1b97fc22a0475f46f3b54bab6627fe0c495ae8f24fc";
//$database = "d49h1eienme0da";
//$user = "ydstwclxtoxoec";
//$port = "5432";

class db {

    function __construct() {
//        $conn_string = "host=localhost port=5432 dbname=myappssp_book user=kmyappssp_amen password=Presiqn11";
        $conn_string = "host=127.0.0.1 port=5433 dbname=book user=postgres password=Presiqn11";
        $dbconnect = pg_connect($conn_string)or die('connection failed');
        return $dbconnect;
    }

    function select() {

//        $name = $_POST['val'];
//        $name = $_POST['authorVal.value'];
        $name = $_POST['xhr'];
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
