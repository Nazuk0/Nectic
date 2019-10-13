<?php

    require 'database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    $name = $season = $price = $category = $sub_category = $image  = "";
    $nameErr = $seasonErr = $priceErr = $categoryErr = $sub_categoryErr = $imageErr = "";

    if(!empty($_POST))
    {
        $name = checkInput($_POST['name']);
        $season = checkInput($_POST['season']);
        $price = checkInput($_POST['price']);
        $category = checkInput($_POST['category']);
        $sub_category = checkInput($_POST['sub_category']);
        
        
        $image = checkInput($_FILES['image']['name']);
        $imagePath = '../images/' . basename($image);
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
        
        $isSuccess = true;
        
        if(empty($name))
        {
            $nameErr = "This field cannot empty";
            $isSuccess = false;
        }
        if(empty($season))
        {
            $seasonErr = "This field cannot empty";
            $isSuccess = false;
        }
        if(empty($price))
        {
            $priceErr = "This field cannot empty";
            $isSuccess = false;
        }
        if(empty($category))
        {
            $categoryErr = "This field cannot empty";
            $isSuccess = false;
        }
        if(empty($sub_category))
        {
            $sub_categoryErr = "This field cannot empty";
            $isSuccess = false;
        }
        if(empty($image))
        {
            $isImageUpdated = false;
        }
        else
        {
            $isImageUpdated = true;
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif")
            {
                $imageErr = "Files extrensions authorized are : .jpg, .png, .jpeg, .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath))
            {
                $imageErr = "File already exists";
                $isUploadSuccess = false;  
            }
            if($_FILES["image"]["size"] > 500000)
            {
                $imageErr = "File cannot over 500KB";
                $isUploadSuccess = false;  
            }
        }
        
        if(($isSuccess && $isImageUpdated &&  $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
        {
            $db = Database::connect();
            if($isImageUpdated)
            {
                $statement = $db->prepare("UPDATE items set name = ?, season = ?, price = ?, category = ?, sub_category = ?, image = ? WHERE id = ?");
                $statement->execute(array($name, $season, $price, $category, $sub_category, $image, $id));
            }
            else
            {
                $statement = $db->prepare("UPDATE items set name = ?, season = ?, price = ?, category = ?, sub_category = ? WHERE id = ?");
                $statement->execute(array($name, $season, $price, $category, $sub_category, $id));
            }
            Database::disconnect();
            header("Location: index.php");
        }
        else if($isImageUpdated && !isUploadSuccess)
        {
            $db = Database::connect();
            $statement = $db->prepare("SELECT image FROM items WHERE id = ?");
            $statement->execute(array($id));
            $item = $statement->fetch();
            $image = $item['image'];
            Database::disconnect();
        }
    }
    else
    {
        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM items WHERE id = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        
        $name = $item['name'];
        $season = $item['season'];
        $price = $item['price'];
        $category = $item['category'];
        $sub_category = $item['sub_category'];
        $image = $item['image'];

        Database::disconnect();
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
                <div class="col-sm-6">
                    <h2><strong>Update an item</strong></h2>
                    <br>
                    <form class="form" role="form" action="<?php echo 'update.php?id=' . $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name; ?>">
                            <span class="help-inline"><?php echo $nameErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="season">Season:</label>
                            <input type="text" class="form-control" id="season" name="season" placeholder="Season" value="<?php echo $season; ?>">
                            <span class="help-inline"><?php echo $seasonErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $price; ?>">
                            <span class="help-inline"><?php echo $priceErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" name="category">
                                <?php
                                    $db = Database::connect();
                                    foreach($db->query('SELECT * FROM categories') as $row)
                                    {
                                        if($row['id'] == $category)
                                        {
                                            echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                        else
                                        {
                                            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                    }
                                    Database::disconnect();
                                ?>
                            </select>
                            <span class="help-inline"><?php echo $categoryErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="sub_category">Sub Category:</label>
                            <select class="form-control" id="sub_category" name="sub_category">
                                <?php
                                    $db = Database::connect();
                                    foreach($db->query('SELECT * FROM sub_categories') as $row)
                                    {
                                        if($row['id'] == $sub_category)
                                        {
                                            echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                        else
                                        {
                                            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                    }
                                    Database::disconnect();
                                ?>
                            </select>
                            <span class="help-inline"><?php echo $sub_categoryErr; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <p><?php echo $image; ?></p>
                            <label for="image ">Select image:</label>
                            <input type="file" id="iamge" name="image">
                            <span class="help-inline"><?php echo $imageErr ; ?></span>
                        </div>
                        <br>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modify</button>
                            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo '../images/' . $image; ?>" alt="imageOfClothes">
                </div>
            </div>
        </div>
    
    </body>
    
</html>