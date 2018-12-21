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

        <link rel="shortcut icon"
              href="favicon.ico">
    </head>        
    <body>
        <?php include_once 'menu.php'; ?>
        <h1>Search form for authors and their books.</h1>
        <div id="wrap" class="col-12 text">
            <div class="col-5 text">
                <input type="text" class="col-5 text"  id="get_author" name="get_author" class="text" placeholder="Start typing an author name" max="30" class="input" maxlength="30" list="author-list" >
                <datalist id="author-list" class="text" hidden="true">
                    <select>
                        <?php
                        foreach ($row as $x) {
                            ?><option class="text"><?php print_r($x['author']); ?></option> <?php
                        }
                        ?>         
                    </select>
                </datalist>
<!--                <select id="author-list" class="text" id="get_author" name="get_author">
                <?php
                foreach ($row as $x) {
                    ?><option value="<?php print_r($x['author']); ?>"class="text"><?php print_r($x['author']); ?></option> <?php
                }
                ?>         
</select>     -->
            </div>
            <div class='hidden' id='buttonMoz'class="buttonMoz ">
                <button class="text">
                    Press
                </button>
            </div>
            <div class="aj col-5 text" >
                <output id="content" class="text " >

                </output>
            </div>
        </div>
        <script type="text/javascript" src="myscript.js"></script>
    </body>
</html>