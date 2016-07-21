<div class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
      <span class="sr-only">Открыть навигацию</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!--Логотип-->
    <a class="navbar-brand" href="/">
      <img src="images/svg/meditatingMan(black).svg" class="logo">
    </a>

  </div>
  <div class="collapse navbar-collapse" id="responsive-menu">
    <ul class="nav navbar-nav">
      <?
          $query = "SELECT page_name, page_alias FROM pages WHERE page_publish='Y'";
          $db->run($query);
          while ($db->fetch())
          {
            echo "<li>";
            echo "<a href={$db->data[page_alias]}>";
            echo "{$db->data[page_name]}";
            echo "</a></li>";
          }
          $db->stop();
      ?>
    </ul>
  </div>
</div> 
