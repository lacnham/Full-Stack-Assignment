<php>

<head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>


*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
}
.browse{
  height: 70px;
}
.browse ul{
  margin-right: 30px;
  list-style: none;
  text-decoration: none;
}
.browse ul li{
  display: inline-block;
  list-style: none;
  text-decoration: none;
}
.browse ul li a{
  color: white;
  display: block;
  padding: 0 15px;
  line-height: 70px;
  font-size: 20px;
  background: grey;
  transition: .5s;
}
.browse ul li a:hover,
.browse ul li a.active{
  color: pink;
}
.browse ul ul{
  position: absolute;
  top: 85px;
  border-top: 3px solid #23dbdb;
  opacity: 0;
  visibility: hidden;
}
.browse ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  transition: .3s linear;
}
.browse ul ul li{
  width: 200px;
  display: list-item;
  position: relative;
  border: 1px solid #042331;
  border-top: none;
}
.browse ul ul a{
  line-height: 50px;
}
.browse ul ul ul{
  border-top: none;
}
.browse_by{
  position: relative;
  top: -70px;
  left: 200px;
}
.fa-caret-right{
  margin-left: 45px;
}

    </style>
</head>
<body>
<div class='browse'>
  <ul>  
  <li>
    <a href="#">Browse
      <i class="fas fa-caret-down"></i>
    </a>
    <ul>
      <li>
        <a href="#">By Shop
            <i class="fas fa-caret-right"></i>
        </a>

        <ul>
          <li class = 'browse_by'><a href="store_by_category.php">Category</a>
          </li>

          <li class = 'browse_by'><a href="store_by_name.php">Name</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#">By Products
          <i class="fas fa-caret-right"></i>
        </a>
        <ul>
          <li class = 'browse_by'><a href="product_by_category.php">Category</a>
          </li>

          <li class = 'browse_by'><a href="product_by_time.php">Created Time</a>
          </li>
        </ul>
      </li>

    </ul>
  </li>
  </ul>
</div>

</body>
</php>