
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="conten-type" content="text/html" charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>description->xml->php->PostgreSQL</title>
    </head>        
    <body>
        <?php include_once 'menu.php'; ?>
        <div>
            <h5>==Тests ==</h5><br />
            <p>*    20.12.2018 used pure JavaScript and removed jQuery;</p>
            <p>*    20.12.2018 Problem Solved: When using firefox, the onchange event<br />
                does not work as expected, pushing an enter or tab to return a result;<br /></p>
            <p>*    20.12.2018 Problem Solved: Inserting an author's name that does not exist in the database<br />
                and confirm the wrong request, the application returns a foreach construct error,<br />
                validation should be validated to expected / possible given names;</p>
        </div>
    </body>
</html>
