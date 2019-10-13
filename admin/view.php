<?php

    require 'Database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    $db = Database::connect();
    $statement = $db->prepare('SELECT items.id, items.name, items.season, items.price, items.image, categories.name AS category, sub_categories.name AS sub_category
                              FROM items 
                              LEFT JOIN categories
                                ON items.category = categories.id
                              LEFT JOIN sub_categories
                                ON items.sub_category = sub_categories.id
                              WHERE items.id = ?');

    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

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
                <div class="col-sm-6">
                    <h2><strong>View an item</strong></h2>
                    <br>
                    <form>
                        <div class="form-group">
                            <label>Name:</label><?php echo ' ' . $item['name']; ?>
                        </div>
                        <div class="form-group">
                            <label>Season:</label><?php echo ' ' . $item['season']; ?>
                        </div>
                        <div class="form-group">
                            <label>Price:</label><?php echo ' ' . number_format((float)$item['price'],2,',','') . ' CAD'; ?>
                        </div>
                        <div class="form-group">
                            <label>Category:</label><?php echo ' ' . $item['category']; ?>
                        </div>
                         <div class="form-group">
                            <label>Sub Category:</label><?php echo ' ' . $item['sub_category']; ?>
                        </div>
                        <div class="form-group">
                            <label>Image:</label><?php echo ' ' . $item['image']; ?>
                        </div>
                    </form>
                    <br>
                    
                    <div class="form-actions">
                        <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                    </div>
                </div>
                    
                <div class="col-sm-6">
                    <img src="<?php echo '../images/' . $item['image'] ;?>" alt="imageOfClothes">
                </div>
            </div>
        </div>
    
    </body>
    
</html>