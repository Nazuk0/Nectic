<?php

    require 'database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST))
    {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM items WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: index.php");
    }
    
    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NECTIC.</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crete+Round">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../css/index.css">
        <script src="../js/index.js"></script>

        <link rel="icon" type="image/jpg" href="../images/nectic.jpg" />
    </head>
    
    <body>
        
        <header>
            <div id="banner" class="container-fluid">
                <h1>NECTIC<span class="text-primary">.</span></h1>
            </div>
        </header>
        
        <div class="container admin" style="padding-top:100px;">
            <div class="row">
                <h2><strong>Delete an item</strong></h2>
                <br>
                <form class="form" role="form" action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                    <p class="alert alert-warning">Do you really want to delete ?</p>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning"> Yes</button>
                        <a class="btn btn-default" href="index.php"> No</a>
                    </div>
                </form>
            </div>
        </div>
    
    </body>
    
</html>