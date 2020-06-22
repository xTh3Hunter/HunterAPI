<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>
    <form action="index.php" method="get">
        AssetVersionId: <input type="number" name="AssetVersionId">
        <br>
        <input type="submit">
    </form>
        <?php
            echo $_GET["AssetVersionId"];
        ?>
    </body>
</html>
