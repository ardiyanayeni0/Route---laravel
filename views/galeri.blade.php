<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
</style>
    <title>beranda</title>
  </head>
  <body>
   
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="beranda">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.blade.php">profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri.blade.php">galeri</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

.row,
.row > .column {
  padding: 8px;
}

.column {
  float: left;
  width: 33.33%;
  display: none;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.content {
  background-color: white;
  padding: 20px;
}

.show {
  display: block;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<div class="main">
<h2>GALLERY</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('scenery')">scenery</button>
  <button class="btn" onclick="filterSelection('EXO')">EXO</button>
  <button class="btn" onclick="filterSelection('friend')">friend</button>
</div>


<div class="row">
  <div class="column scenery">
    <div class="content">
      <img src="https://i1.wp.com/bartleytech.com/wp-content/uploads/2019/03/indahnya-senja-di-lautan.jpg?resize=7192C475&ssl=1" alt="Mountains" style="width:100%; height:150px">
      
    </div>
  </div>
  <div class="column scenery">
    <div class="content">
    <img src="https://i.pinimg.com/originals/f1/b1/aa/f1b1aab855f3cf0e88092bf92ec4a0c2.jpg" alt="Lights" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column scenery">
    <div class="content">
    <img src="https://images.unsplash.com/photo-1511497584788-876760111969?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80" alt="Nature" style="width:100%; height:150px">
    </div>
  </div>
  
  <div class="column EXO">
    <div class="content">
      <img src="https://i.pinimg.com/originals/e6/dc/e5/e6dce57d5d6ef5b6c87cf67827609f4e.jpg" alt="Car" style="width:100%; height:350px">
     </div>
  </div>
  <div class="column EXO">
    <div class="content">
    <img src="https://0.soompi.io/wp-content/uploads/2020/03/18080515/suho-13.jpg" alt="Car" style="width:100%; height:350px">
    </div>
  </div>
  <div class="column EXO">
    <div class="content">
    <img src="https://th.bing.com/th/id/OIP.UYpN9EIgEB8lO6M5CibZXQHaJl?pid=ImgDet&rs=1" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://th.bing.com/th/id/OIP.XUWL0wv7jJ7W5b2f2zmABgHaJQ?pid=ImgDet&rs=1" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://c1.staticflickr.com/5/4758/38860316735_8587bc2455_o.jpg" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://pm1.narvii.com/6576/ade45bb97fdce3d5bc52146ef024775ba55085b7_hq.jpg" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://i.pinimg.com/originals/6b/71/f4/6b71f42aae702cbbc6171a6525aff7dd.jpg" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://www.allkpop.com/upload/2018/10/content/EXO_Chen_1540653781_EXO_1028_CHEN_6.jpg" alt="Car" style="width:100%; height:350px">
    </div>
 </div>
 <div class="column EXO">
    <div class="content">
    <img src="https://th.bing.com/th/id/OIP.9qaIzogEIfBCny2LBvw-eAHaJl?pid=ImgDet&rs=1" alt="Car" style="width:100%; height:350px">
    </div>
 </div>


  <div class="column friend">
    <div class="content">
      <img src="https://i.pinimg.com/236x/1d/80/6a/1d806a533778b68c6acb6a3bb08ab457.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column friend">
    <div class="content">
    <img src="https://i.pinimg.com/564x/89/f6/91/89f691ae17c5910cd3b356b4d2a669f4.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column friend">
    <div class="content">
    <img src="https://i.pinimg.com/564x/b9/67/51/b967514711dd49af1f525b06d893a4d2.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column friend">
    <div class="content">
    <img src="https://i.pinimg.com/236x/7d/67/d4/7d67d4a62f0c562ef959d46f8e8d460b.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column friend">
    <div class="content">
    <img src="https://i.pinimg.com/236x/a6/99/db/a699db7171001393ee7b651fae5ce8e8.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
  <div class="column friend">
    <div class="content">
    <img src="https://i.pinimg.com/564x/e7/c4/6c/e7c46c22be1620c7c31d887c93a03602.jpg" alt="Car" style="width:100%; height:150px">
    </div>
  </div>
</div>

</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>


<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">GALERI</h1>
  </div>
</header>





   
  
        
      </div>
<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>