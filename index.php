

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/style.css">

  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  
  <title>Php-Dischi-Json</title>
</head>
<body>
<div id="app">
  <header>
    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-icon-marilyn-scott-0.png" alt="" srcset="">
  </header>

<div class="cont-card">

<div v-for="(item , index) in arrayDischi" class="card">
   <div class="pic-card">
    <img :src="item.poster" alt="">
   </div>
  <div class="cont-text">
   <div class="title">
     <h4>{{item.title}}</h4>
   </div>
   <div class="author">
     <p>{{item.author}}</p>
   </div>
   <div class="date">
     <h4>{{item.year}}</h4>
   </div>
  </div>
</div>


</div>

</div>
  <script src="js/script.js"></script>
</body>
</html>