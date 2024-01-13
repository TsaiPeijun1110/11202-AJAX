<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body {
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin-right: 100px;
  }


  .card {
    flex: 0 0 auto;
    width: 100%;
    /* 確保卡片內容寬度與 .card 一致 */
    box-sizing: border-box;
    /* 考慮內邊距和邊框的寬度 */
    /* 其他卡片樣式... */
  }

  .card-container {
    display: flex;
  }

  .card-img-top {
    max-width: 100%;
    /* 讓照片最大寬度不超過其父容器 */
    height: auto;
    /* 保持高度自適應，避免拉伸 */
  }

  .card-container {
    display: flex;
    justify-content: space-between;
  }

  .myCarousel-name {
    display: flex;
    justify-content: space-between;
    height: 400px;
  }

  .carousel-inner img {
    margin-top: 10px;
    width: 200%;
    height: 300%;
    object-fit: cover;
    border-radius: 20px;
  }

  .carousel-control-prev {
    margin-top: 10px;
    height: 600px;
  }

  .carousel-control-next {
    margin-top: 10px;
    height: 600px;
  }

  .carousel-inner {
    width: 1350px;
    height: 900px;
  }

  .login-main {
    margin-right: 200px;
    margin-top: 405px;
    width: 1000px;
    height: 300px;
  }

  .box {
    margin-top: 200px;

  }

  .image {
    width: 400px;
    display: flex;
    justify-content: space-between;
    margin-right: 10px;
  }

  .login-main {
    width: 400px;
  }

  .card-name {
    margin-top: 218px;
  }
</style>

<div class="di" style="height:300px;  width:100%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">

  <div style="height:32px; display:block;"></div>
  <!--正中央-->

  <div style="  height:400px;">
    <div id="mwww" loop="true" style="width:100%; height:155%; padding:4px "></div>
    <div style="width:180%; height:150%; position:relative; left:300px;" class="cent">沒有資料</div>
  </div>


  <div class="card-name">
    <div class="card-container">
      <div class="card" style="width:400px;">
        <img src="https://picsum.photos/seed/picsum/550/260" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button href="#" class="btn btn-primary">
          <a href="#" class="btn btn-primary">Go somewhere</a>
          </button>
        </div>
      </div>

      <div class="card" style="width:450px;">
        <img src="https://picsum.photos/seed/picsum/500/210" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 500px;">
        <img src="https://picsum.photos/seed/picsum/450/190" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>


  <div class="card-name2">
    <div class="card-container">
      <div class="card" style="width:400px;">
        <img src="https://picsum.photos/seed/picsum/550/260" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width:450px;">
        <img src="https://picsum.photos/seed/picsum/500/210" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 500px;">
        <img src="https://picsum.photos/seed/picsum/450/190" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>


  <div class="myCarousel-name">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/seed/picsum/700/410" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/seed/picsum/700/410" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/seed/picsum/700/410" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <div class="image margin-top:300px;">
    <div class="login-main">
      <?php
      if (isset($_SESSION['login'])) {
        to("back.php");
      }


      if (isset($_GET['error'])) {
        echo "<script>alert('{$_GET['error']}')</script>";
      }

      ?>
      <div class="di" style="height:500px; border:#999 1px solid; width:200%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
        <?php include "marquee.php"; ?>
        <div style="height:32px; display:block;"></div>
        <!--正中央-->
        <form method="post" action="./api/check.php">
          <p class="t botli text-center">登入</p>
          <p class="cent">帳號 : <input name="acc" autofocus="" type="text"></p>
          <p class="cent">密碼 : <input name="pw" type="password"></p>
          <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
        </form>
      </div>
    </div>

    <div style="width:100%; height:300px; align-items:center; margin-top:600px; margin-right:40px;" class="dbor">
      <span class="t botli">校園映象區</span>
      <div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
      <?php
      $imgs = $Image->all(['sh' => 1]);

      foreach ($imgs as $idx => $img) {
      ?>
        <div id="ssaa<?= $idx; ?>" class='im cent'>
          <img src="./img/<?= $img['img']; ?>" style="width:200px;height:130px;border:3px solid orange;margin:3px">
        </div>
      <?php
      }
      ?>
      <div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
      <script>
        var nowpage = 1,
          num = <?= $Image->count(['sh' => 1]); ?>;

        function pp(x) {
          var s, t;
          if (x == 1 && nowpage - 1 >= 0) {
            nowpage--;
          }
          if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
            nowpage++;
          }

          $(".im").hide()
          for (s = 0; s <= 2; s++) {
            t = s * 1 + nowpage * 1;
            $("#ssaa" + t).show()

          }
        }
      </script>




      <div class="box">
        <div style="clear:both;"></div>
        <div style="width:1300px;  position:relative; background:#FC3;  height:150px; display:flex; align-items:center; justify-content: space-between;">
          <span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
          <div class="dbor" style="margin-left:120px; width:40%; height:40%; line-height:60px;">
            <span class="t">進站總人數 :</span>
          </div>
        </div>
      </div>


    </div>
  </div>
  <script>
    var lin = new Array();
    <?php
    $lins = $Mvim->all(['sh' => 1]);
    foreach ($lins as $lin) {
      echo "lin.push('{$lin['img']}');";
    }
    ?>

    var now = 0;
    ww();
    if (lin.length > 1) {
      setInterval("ww()", 3000);
      now = 1;
    }

    function ww() {
      $("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
      //$("#mwww").attr("src",lin[now])
      now++;
      if (now >= lin.length)
        now = 0;
    }
  </script>

</div>