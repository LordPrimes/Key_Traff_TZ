<html lang="ru">
<head>
<meta charset="utf-8">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    <?php
 
    include('config/select.php');
?>
<div class="container">
    <div class='row'>
        <div class='d-flex justify-content-center flex-column col-lg-12 '>
        <h1>Задание№1 Результат:</h1> 
        <a href="#quetion2">Задание№2</a>
         <?php  
         $results = new TZ;
         foreach($results->select() as $row ): 
         ?>
                <div class="result py-5 card d-flex flex-row text-center justify-content-beetween">
                    <p class="col-lg-3"><?=$row['name']?> </p>
                    <p class="col-lg-3"><?=$row['price']?> </p>
                    <p class="col-lg-3"><?=$row['count']?> </p>
                    <p class="col-lg-3"><?=$row['fio']?> </p>        
                </div>
               <?php endforeach; ?>

               <h1 id="quetion2">Задание№2 Результат</h1>
<nav class="align-items-baseline navbar navbar-expand-lg navbar-dark mdb-color light-green mt-3 mb-5">
    <span class="navbar-brand">Групировать:</span>
    <div class="d-flex flex-wrap col-lg-10 justify-content-between">
        <p data-group="name" class="name">Имя товара</p>
        <p data-group="count" class="count">количество товара</p>
        <p data-group="price" class="price">price</p>
    </div>
</nav>
<div class="result-ajax d-flex">

</div>
        </div>
    </div>
</div>
<div  class="scrolingtop btn btn-rounded btn-light-green  " style="position:fixed;bottom:0;right:0" >
    <i class="fa fa-arrow-up fa-2x" ></i>
</div>
<footer>
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/js/mdb.min.js"></script>
<script src="app.js"></script>
</footer>
</body>
</html>