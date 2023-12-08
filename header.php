<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>nav</title>
</head>
<body>
    <nav class="nav">
        <div class="nav__logo"><a href="indes.php"><img src="Controller/uploads/logo.png" alt="logo" srcset=""></a></div>
        <div class="nav__search">
            <form id="form"> 
                <input type="search"  placeholder="Search...">
              </form>
        </div>
        <div class="nav__item">
            <a href="userprofile.php"><i class="fa-solid fa-user"></i></a>
            <a href="viewcart.php"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
    </nav>
    <header class="nav_category">
        <ul>
            <li>
                <a href="product.php?cid=wedding product">Wedding</a>
            </li>
            <li>
                <a href="product.php?cid=cake topper">Toppers</a>
            </li>
            <li>
                <a href="product.php?cid=festive collection">Festive</a>
            </li>
            <li>
                <a href="product.php?cid=personlised gift">Personlised</a>
            </li>
            <li>
                <a href="product.php?cid=corporate product">corporate</a>
            </li>
            <li>
                <a href="product.php?cid=home decor">Home Decor</a>
            </li>
            <li>
                <a href="feedback.php">Feedback</a>
            </li>
        </ul>
    </header>
</body>
</html>