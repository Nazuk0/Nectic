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
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.js"></script>
    <script src="../js/isotope-docs.min.js"></script>

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/shop.css">
    <script src="../js/index.js"></script>
    <script src="../js/filter.js"></script>

    <link rel="icon" type="image/jpg" href="../images/nectic.jpg" />
</head>

<body>

    <header>
        <div id="banner" class="container-fluid">
            <h1>NECTIC<span class="text-primary">.</span></h1>
        </div>
    </header>

    <nav id="navbar" class="navbar navbar-inverse data-spy" data-offset-top="20">

        <div class="container-fluid">

            <ul class="nav navbar-nav">

                <li><a href="../index.php">News</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Women<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="tops-women.php">Tops Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="pants-women.php">Pants Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="sweaters-women.php">Sweaters &AMP; Cardigans <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="jackets-women.php">Jackets &AMP; Coats <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="shoes-women.php">Shoes<span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="accessories-women.php">Accessories <span class="glyphicon glyphicon-menu-right"></span></a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Men<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="tops-men.php">Tops Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="pants-men.php">Pants Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="sweaters-men.php">Sweaters &AMP; Cardigans <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="jackets-men.php">Jackets &AMP; Coats <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="shoes-men.php">Shoes<span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="accessories-men.php">Accessories <span class="glyphicon glyphicon-menu-right"></span></a></li>

                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><span class="glyphicon glyphicon-heart"></span> Favorites</a></li>
                <li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
                <li><a href="#" data-toggle="modal" data-target=".myLoginRegister"><span class="glyphicon glyphicon-log-in"></span>Login/Register</a></li>
            </ul>

        </div>

    </nav>

    <!-- Side navigation -->
    <div class="sidenav">
        <h2><strong>Accessories Section</strong></h2>
        <a href="#" data-filter="*">All</a><br><br>
        <a href="#" data-filter=".beanny">Beannies</a><br><br>
        <a href="#" data-filter=".scarf">Scarf</a><br><br>
        <a href="#" data-filter=".bag">Bags</a><br><br>
    </div>
    <div class="sidenav2">
        <h2><strong>Men clothes</strong></h2>
        <a href="tops-men.php" >Tops</a><br><br>
        <a href="pants-men.php" >Pants</a><br><br>
        <a href="sweaters-men.php" >Sweaters</a><br><br>
        <a href="jackets-men.php" >Jackets &AMP; Coats</a><br><br>
        <a href="shoes-men.php" >Shoes</a><br><br>
    </div>
    
    <?php

        require '../admin/database.php';

        $db = Database::connect();
        $statement = $db->query('SELECT * FROM categories');
        $categories = $statement->fetchAll();

        foreach($categories as $category)
        {   
            echo '<div class="row">';
            
            $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
            $statement->execute(array($category['id']));
            
            while($item = $statement->fetch())
            {
                     echo '<div class="col-lg-3 col-md-4 col-sm-6">
                         <img src="../images/accM' . $item['image'] . '" alt="imgAccessoriesM">
                         <h3>' . $item['name'] . '</h3>
                         <h4>' . number_format($item['price'],2,'.','') .' CAD</h4>
                         </div>';
                     
            }
            echo '</div>';
        }
    
        Database::disconnect();

    ?>

    <footer>
        <div id="footer" class="container-fluid">
            <h3>Made by Céline Cornet &AMP; Nicolas Thong</h3>
        </div>
    </footer>
    
    <div class="modal fade myLoginRegister" role="dialog">

    <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#login"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a data-toggle="tab" href="#register"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                </ul>
            </div>

            <div class="modal-body">
                <div class="tab-content">
                    <div id=login class="tab-pane fade in active">
                        <form >
                            <!--PHP-->
                            <div class="form-group">
                                <label for="email">Email address :</label>
                                <input type="email" class="form-control" id="email" placeholder="example@hotmail.com">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Password :</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Password">
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>

                    <div id="register" class="tab-pane fade">
                        <form >
                            <!--PHP-->
                            <div class="form-group">
                                <label for="name">Your Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                    name="name">
                            </div>

                            <div class="form-group">
                                <label for="newemail">Email:</label>
                                <input type="email" class="form-control" id="newemail" placeholder="Enter new email"
                                    name="newemail">
                            </div>

                            <div class="form-group">
                                <label for="newpwd">Password:</label>
                                <input type="password" class="form-control" id="newpwd" placeholder="New password"
                                    name="newpwd">
                            </div>

                            <div class="form-group">
                                <label for="repeatpwd">Repeat Password :</label>
                                <input type="password" class="form-control" id="repeatpwd"
                                    placeholder="Repeat Password" name="repeatpwd">
                            </div>

                            <button type="submit" class="btn btn-success">Register</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>