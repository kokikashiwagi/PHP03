<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>trip memory</title>
  <img src="https://lh3.googleusercontent.com/proxy/qRccxer8HoINPUwAgZFwuFuwes3sy0CulrdY78XbT3qiT5knQWKQivk-XcYzzB3by26t33mxXCpiyPOSzPScA9UHGbBWJKveQI2aJ7Y3d75tMf8wISiyToJc8w" alt="">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- <style>div{padding: 10px;font-size:16px;}</style> -->
</head>
<body>

<!-- Head[Start] -->
<header>
  <!-- <nav class="navbar navbar-default"> -->
    <!-- <div class="container-fluid"> -->
    <!-- <div class="navbar-header"><a class="navbar-brand" href="select.php">Trip memory</a></div> -->
    <!-- </div> -->
  <!-- </nav> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <!-- <legend>Trip Memory</legend> -->
    <table>
    <tr>
      <td width=200px>
        <label>your name 
      </td>
      <td>
        <input type="text" name="name" ></label><br>
      </td>
    </tr>
    <tr>
      <td>
        <label> country <br> (tap the map below)
        </td>
        <td>
         <input type="text" name="cname" id='ctn' value='Japan' style="background-color:#dcdcdc;" readonly></label><br>
      </td>
    </tr>
     <tr>
     <td>
     <label>how was it?
     </td>
      <td>
       <select name=star>
            <option value=★>★</option>
            <option value=★★>★★</option>
            <option value=★★★>★★★</option>
            <option value=★★★★>★★★★</option>
            <option value=★★★★★>★★★★★</option>
        </select><br>
      </td>
      </tr>
      <tr>
      <td>
        <label>comment
        </td>
        <td>
          <textArea name="comment" rows="4" cols="40"></textArea></label><br>
      </td>
      </tr>
      <tr>
      <td>
      </td>
      <td>
        <input type="submit" value="submit">
      </tr>
      </td>
    </table>

    <a href="select.php">
      <input type="button" value="結果を見る" >
    </a>
    </fieldset>
  </div>
</form>



<!-- 地図表示ゾーン -->
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="./datamaps.world.min.js"></script>
<div id="container" style="position: relative; width: 500px; height: 300px;"></div>


<script>
    var map = new Datamap({
        element: document.getElementById('container'),
        done: function(datamap) {
            datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
                document.getElementById("ctn").value = geography.properties.name ;

            });
        }
    });
</script>
<!-- ここまで地図表示ゾーン -->

<!-- Main[End] -->

  
</body>
</html>
