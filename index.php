<?php
include_once 'db.php';
$conn = new db();
$row = $conn->select_author();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="conten-type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="animate.css">
        <title>xml->php->PostgreSQL</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
        <link rel="shortcut icon"
              href="favicon.ico">
    </head>        
    <body>
        <?php include_once 'menu.php';?>
        <h1>Search form for authors and their books.</h1>
        <div id="wrap" class="col-12 text">
            <div class="col-6 text">
                <input type="text"  id="get_author" class="text" placeholder="Start typing an author name" max="30" class="input" maxlength="30" list="states-list" >
                <datalist id="states-list" class="text" hidden="true">
                    <select>
                        <?php
                        foreach ($row as $x) {
                            ?><option class="text"><?php print_r($x['author']); ?></option> <?php
                        }
                        ?>         
                    </select>
                </datalist>
            </div>
            <div class="aj col-6 text" >
                <output id="content" class="text " >
                    
                </output>
            </div>
        </div>
    </body>
</html>