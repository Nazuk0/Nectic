<?php

    $email = $pwd = $name = $newemail = $newpwd = $repeatpwd = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = verifyInput($_POST["email"]); 
        $pwd = verifyInput($_POST["pwd"]); 
        $name = verifyInput($_POST["name"]); 
        $newemail = verifyInput($_POST["newemail"]);
        $newpwd = verifyInput($_POST["newpwd"]); 
        $repeatpwd = verifyInput($_POST["repeatpwd"]); 
    }

    //To remove escape, tabulation, backslashes etc
    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
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

    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>

    <link rel="icon" type="image/jpg" href="images/nectic.jpg" />
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

                <li><a href="index.php">News</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Women<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/tops-women.php">Tops Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/pants-women.php">Pants Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/sweaters-women.php">Sweaters &amp; Cardigans <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/jackets-women.php">Jackets &amp; Coats <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/shoes-women.php">Shoes<span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/accessories-women.php">Accessories <span class="glyphicon glyphicon-menu-right"></span></a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Men<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        <li><a href="php/tops-men.php">Tops Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/pants-men.php">Pants Clothes <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/sweaters-men.php">Sweaters &amp; Cardigans <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/jackets-men.php">Jackets &amp; Coats <span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/shoes-men.php">Shoes<span class="glyphicon glyphicon-menu-right"></span></a></li>
                        <li class="divider"></li>
                        <li><a href="php/accessories-men.php">Accessories <span class="glyphicon glyphicon-menu-right"></span></a></li>

                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><span class="glyphicon glyphicon-heart"></span> Favorites</a></li>
                <li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>

                <li><a href="#" data-toggle="modal" data-target=".myLoginRegister"><span class="glyphicon glyphicon-log-in"></span>
                        Login/Register</a></li>


            </ul>

        </div>

    </nav>
    
    <h2 class="firstH2 text-primary">Women's tops</h2>

    <div id="Carousel1" class="carousel slide odd" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel1" data-slide-to="1"></li>
            <li data-target="#Carousel1" data-slide-to="2"></li>
            <li data-target="#Carousel1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsW1.jpg" class="img-responsive center" alt="homepageWomenTop1" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Grey Pullover</h6>
                        <p><strong>Color: </strong>Unicolor, grey <br>
                            <strong>Type: </strong> Casual <br>
                            <strong>Material: </strong> 100% Acrylique<br>
                            <strong>Season:</strong> Autumn, Winter</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsW2.jpg" class="img-responsive center" alt="homepageWomenTop2" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Rose Hoodie</h6>
                        <p><strong>Color: </strong> Unicolor, beige <br>
                            <strong>Type: </strong> Warm<br>
                            <strong>Material: </strong> Cotton blend<br>
                            <strong>Season:</strong> Autumn, Winter</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsW3.jpg" class="img-responsive center" alt="homepageWomenTop3" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Brown Leather Jacket</h6>
                        <p><strong>Color: </strong> Unicolor, brown <br>
                            <strong>Type: </strong> Stylish<br>
                            <strong>Material: </strong> 100% polyester lining<br>
                            <strong>Season:</strong> Spring</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsW4.jpg" class="img-responsive center" alt="homepageWomenTop4" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Stripped Martian Crop Top</h6>
                        <p><strong>Color: </strong> Strip, black and white <br>
                            <strong>Type: </strong> Casual<br>
                            <strong>Material: </strong> Cotton<br>
                            <strong>Season:</strong> Summer</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr>

    <h2 class="evenH2 text-primary">Women's bottoms</h2>

    <div id="Carousel2" class="carousel slide even" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel2" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel2" data-slide-to="1"></li>
            <li data-target="#Carousel2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Sports 3/4 long short</h6>
                        <p><strong>Color: </strong> Grey and pink<br>
                            <strong>Type: </strong> Sporty, casual<br>
                            <strong>Material: </strong> Cotton<br>
                            <strong>Season:</strong> Spring</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepagebottomsW1.jpg" class="img-responsive center" alt="homepageWomenBottom1" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Jeans</h6>
                        <p><strong>Color: </strong> Medium wash blue<br>
                            <strong>Type: </strong> Casual<br>
                            <strong>Material: </strong> Cotton/Polyester<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepagebottomsW2.jpg" class="img-responsive center" alt="homepageWomenBottom2" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Blue shorts</h6>
                        <p><strong>Color: </strong> Light blue<br>
                            <strong>Type: </strong> Casual<br>
                            <strong>Material: </strong> Cotton<br>
                            <strong>Season:</strong> Summer</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepagebottomsW3.jpg" class="img-responsive center" alt="homepageWomenBottom3" />
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr>

    <h2 class="oddH2 text-primary">Women's accessories</h2>

    <div id="Carousel3" class="carousel slide odd" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel3" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel3" data-slide-to="1"></li>
            <li data-target="#Carousel3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageAccW1.jpg" class="img-responsive center" alt="homepageWomenAccessory1" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Black Beanny</h6>
                        <p><strong>Color: </strong> Unicolor, black<br>
                            <strong>Material: </strong> 100% wool<br>
                            <strong>Season:</strong> Winter</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7 ">
                        <img src="images/homepage/homepageAccW2.jpg" class="img-responsive center" alt="homepageWomenAccessory2" />
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <h6>Colorfull Scarf</h6>
                        <p><strong>Color: </strong> Frenzy of scibbled archive florals<br>
                            <strong>Material: </strong> 100% silk<br>
                            <strong>Season:</strong> Autumn, Winter</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7 ">
                        <img src="images/homepage/homepageAccW3.jpg" class="img-responsive center" alt="homepageWomenAccessory3" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Nike Sneakers</h6>
                        <p><strong>Color: </strong> Black and white<br>
                            <strong>Material: </strong> 95% mesh, 5% synthetic<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel3" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel3" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <hr>

    <h2 class="evenH2 text-primary">Men's tops</h2>

    <div id="Carousel4" class="carousel slide even" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel4" data-slide-to="1"></li>
            <li data-target="#Carousel4" data-slide-to="2"></li>
            <li data-target="#Carousel4" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Grey North Face</h6>
                        <p><strong>Color: </strong>Dark grey<br>
                            <strong>Type: </strong> Casual and comfortable<br>
                            <strong>Material: </strong> Cotton-blend<br>
                            <strong>Season:</strong> Autumn, Winter</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsM1.jpg" class="img-responsive center" alt="homepageMenTop1" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Dark Brown Leather</h6>
                        <p><strong>Color: </strong>Dark brown<br>
                            <strong>Type: </strong> Casual and warm<br>
                            <strong>Material: </strong>Polyester and Faux Shearling<br>
                            <strong>Season:</strong> Autumn, Winter</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsM2.jpg" class="img-responsive center" alt="homepageMenTop2" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Blue/White Long Tshirt</h6>
                        <p><strong>Color: </strong>white and blue<br>
                            <strong>Type: </strong> Casual<br>
                            <strong>Material: </strong> Cotton<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsM3.jpg" class="img-responsive center" alt="homepageMenTop3" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Canada Tshirt</h6>
                        <p><strong>Color: </strong>white<br>
                            <strong>Type: </strong> Casual<br>
                            <strong>Material: </strong> Cotton, polyester<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageTopsM4.jpg" class="img-responsive center" alt="homepageMenTop4" />
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel4" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel4" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <hr>

    <h2 class="oddH2 text-primary">Men's bottoms</h2>

    <div id="Carousel5" class="carousel slide odd" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel5" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel5" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepagebottomsM1.jpg" class="img-responsive center" alt="homepageMenBottom1" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Blue Shorts</h6>
                        <p><strong>Color: </strong> Blue<br>
                            <strong>Type: </strong> Training<br>
                            <strong>Material: </strong> Woven fabric<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepagebottomsM2.jpg" class="img-responsive center" alt="homepageMenBottom1" />
                    </div>
                    <div class="col-md-5 col-sm-5 textOdd">
                        <h6>Blue Checkered</h6>
                        <p><strong>Color: </strong> Blue and green<br>
                            <strong>Type: </strong> Formal<br>
                            <strong>Material: </strong> Wool<br>
                            <strong>Season:</strong> All seasons</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel5" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel5" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <hr>

    <h2 class="evenH2 text-primary">Men's accessories</h2>

    <div id="Carousel6" class="carousel slide even" data-interval="20000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel6" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel6" data-slide-to="1"></li>
            <li data-target="#Carousel6" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Blue Beanny</h6>
                        <p><strong>Color: </strong>Blue<br>
                            <strong>Material: </strong> Cotton<br>
                            <strong>Season:</strong> Winter</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageAccM1.jpg" class="img-responsive center" alt="homepageMenAccessory1" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Blue/Grey Scarf</h6>
                        <p><strong>Color: </strong>Grey and blue stripped<br>
                            <strong>Material: </strong> Polyester<br>
                            <strong>Season:</strong> Winter</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageAccM2.jpg" class="img-responsive center" alt="homepageMenAccessory2" />
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 textEven">
                        <h6>Nike Sneakers</h6>
                        <p><strong>Color: </strong>Black<br>
                            <strong>Season:</strong> Winter</p>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <img src="images/homepage/homepageAccM3.jpg" class="img-responsive center" alt="homepageMenAccessory3" />
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#Carousel6" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel6" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <footer>
        <div id="footer" class="container-fluid">
            <h3>Made by Céline Cornet &amp; Nicolas Thong</h3>
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
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <!--PHP-->
                                <div class="form-group">
                                    <label for="email">Email address :</label>
                                    <input type="email" class="form-control" id="email" placeholder="example@hotmail.com" required>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Password :</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Password" required>
                                </div>

                                <div class="checkbox">
                                    <label><input type="checkbox">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </form>
                        </div>

                        <div id="register" class="tab-pane fade">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <!--PHP-->
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                        name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="newemail">Email:</label>
                                    <input type="email" class="form-control" id="newemail" placeholder="Enter new email"
                                        name="newemail" required>
                                </div>

                                <div class="form-group">
                                    <label for="newpwd">Password:</label>
                                    <input type="password" class="form-control" id="newpwd" placeholder="New password"
                                        name="newpwd" required>
                                </div>

                                <div class="form-group">
                                    <label for="repeatpwd">Repeat Password :</label>
                                    <input type="password" class="form-control" id="repeatpwd" placeholder="Repeat Password"
                                        name="repeatpwd" required>
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