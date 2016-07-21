<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script>
      $(document).ready(function () {
        $('.showNextDiv').click(function () {
          // $('.hiddenDiv').not($(this)).slideUp('slow');
          $(this).next('div').stop(true, true).slideToggle('slow');
        });
        $('.hideMenu').click(function () {
          $('.hiddenDiv').slideUp();
        });
      });
    </script>
    <style>
      .hideMenu {
        color: black;
      }
      .showNextDiv {
        display:block;
        cursor:pointer;
        color:black;
        position: fixed;
        top: 45%;
        left: 0%;
      }
      .hiddenDiv {
        opacity: 0.95;
        overflow: auto;
        margin-top: 50px;
        display: none;
        position: fixed;
        list-style:none;
        padding: 10px;
        /*margin: 0;*/
        /*box-sizing: border-box;*/
        /*width: device-width;*/
        background-color: #eee;
        height: 80%;
        top: 0;
        /*left: 200px;*/
        transition: left .2s;
        z-index: 2;
        -webkit-transform: translateZ(0);
        -webkit-backface-visibility: hidden;
      }
    </style>
<?
    $query = "SELECT * FROM asanas.asanas";
    $asanasArray = mysql_query($query);
    echo "<button class='showNextDiv btn btn-default btn-sm'>а<br>с<br>а<br>н<br>ы</button>";
    echo "<div class='row hiddenDiv'>";
      echo "<div class='asanaList'>";
        echo "<ol>";
          while($asana = mysql_fetch_array($asanasArray))
          {
            echo "<li>";
              $ref = "#".$asana['projectName'];
              echo "<a href='$ref' class='hideMenu'>";
                echo $asana[nameRu];
              echo "</a>";
            echo "</li>";
          }
        echo "</ol>";
      echo "</div>"; 
    echo "</div>";

    mysql_data_seek($asanasArray, 0);
    while($asana = mysql_fetch_array($asanasArray)) 
    {
      echo "<div class='row' id=$asana[projectName]>";
        echo "<figure class='asns-dscr'>";
          echo "<figcaption>";
            echo "<h1 class='text' >";
              echo "$asana[id]. $asana[nameRu]";
            echo "</h1>";

            // Колонка 'col' для изображений
            echo "<div class='row'>"; 
                $n = $asana['projectName'];
                $query1 = "SELECT imgPath FROM asanas.asanaBigImages INNER JOIN asanas.asanas
                                  WHERE asanas.asanas.projectName = asanas.asanaBigImages.projectName
                                  AND asanas.asanaBigImages.projectName = '$n'";
                $ssql = mysql_query($query1);
                while ($arr = mysql_fetch_array($ssql))
                {
                   echo "<img src=$arr[imgPath] class='asanaImg'>";
                }
                echo "<div class='text'>";
                echo(file_get_contents("text/$asana[projectName].txt"));
              echo "</div>";
            echo "</div>";

          echo "</figcaption>";
        echo "</figure>";
      echo "</div>";
    }
?>
<script type="text/javascript">
  window.onhashchange = function () {
    console.log(location.hash);
    history.replaceState('', '',  '/asanas');
  };
  window.onload = function () {
      location.hash && window.setTimeout(function() {
      history.replaceState('', '',  '/asanas');
    },300)
  };
</script>

