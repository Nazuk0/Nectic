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
                <h2><strong>List of items    </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"> Add</span></a></h2>
                
                <table class="table tabble-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Season </th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        
                        require'database.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT items.id, items.name, items.season, items.price, categories.name AS category, sub_categories.name AS sub_category
                                                FROM items 
                                                LEFT JOIN categories 
                                                    ON items.category = categories.id
                                                LEFT JOIN sub_categories
                                                    ON items.sub_category = sub_categories.id
                                                ORDER BY items.id DESC');
                        while($item = $statement->fetch())
                        {
                            echo '<tr>';
                            echo '<td>' . $item['name'] . '</td>';
                            echo '<td>' . $item['season'] . '</td>';
                            echo '<td>' . number_format((float)$item['price'],2,',','') . ' CAD</td>';
                            echo '<td>' . $item['category'] . '</td>';
                            echo '<td>' . $item['sub_category'] . '</td>';
                            echo '<td width=300>';
                            echo    '<a class="btn btn-default" href="view.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-eye-open"> View</span></a>';
                            echo ' ';
                            echo    '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-pencil"> Modify</span></a>';
                            echo ' ';
                            echo    '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-remove"> Delete</span></a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        
                        Database::disconnect();
                        
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    
    </body>
    
</html>