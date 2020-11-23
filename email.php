<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        
        #error { background-color: #600; border: 1px solid #FF0; color: #FFF;
         text-align: center; margin: 10px; padding: 10px; }
        
    </style>
</head>

<body>
<?php
if (isset($_GET['error']) && $_GET['error'] != '') {
    echo '<div id="error">' . $_GET['error'] . '</div>';
}
?>
<form action="commitmail.php" method="post">
    <table>
        <tr>
        <td><input type="text" name="correo"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>


</form>

</body>
</html>