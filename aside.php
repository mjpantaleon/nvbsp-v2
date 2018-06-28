<div class="card bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header text-white"><i class="fa fa-fw fa-camera"></i>&nbsp;TRENDING EVENTS</div>
    <ul class="list-group list-group-flush">
      <?php 
      $query = "  SELECT * FROM `trends` WHERE `disable_flag` = 0 ORDER BY id DESC ";
      $result = mysql_query($query);
      while($row = mysql_fetch_array($result)){
        $div = '
        <li class="list-group-item">
          <h5 class="card-title">'.$row['title'].'</h5>
          <p class="card-text">'.$row['text'].'</p>
        </li>
        ';
        echo $div;
      }
      ?>
      
    </ul>
</div>


<div class="card bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header text-white"><i class="fa fa-fw fa-cloud"></i>&nbsp;LATEST ADVISORIES</div>
    <ul class="list-group list-group-flush">
      <?php 
      $query = "  SELECT * FROM `advisories` WHERE `disable_flag` = 0 ORDER BY id DESC ";
      $result = mysql_query($query);
      while($row = mysql_fetch_array($result)){
        $div = '
        <li class="list-group-item">
          <h5 class="card-title">'.$row['title'].'</h5>
          <p class="card-text">'.$row['text'].'</p>
        </li>
        ';
        echo $div;
      }
      ?>
    </ul>
</div>

<div class="card bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header text-white"><i class="fa fa-fw fa-info-circle"></i>&nbsp;NVBSP SOCIAL MEDIA</div>
  <div class="card-body bg-white text-center">
    <a href='index.php'><i class="fa fa-fw fa-youtube fa-2x"></i></a>
    <a href='index.php'><i class="fa fa-fw fa-google fa-2x"></i></a>
    <a href='index.php'><i class="fa fa-fw fa-facebook-square fa-2x"></i></a>
    <a href='index.php'><i class="fa fa-fw fa-google-plus-square fa-2x"></i></a>
  </div>
</div>