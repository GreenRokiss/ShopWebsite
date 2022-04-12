<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
        <meta charset="UTF-8">
        <script src="script.js"></script>
    </head>
    <body>
    	
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="assets/logo.png "navbar-brand" href="#" width = 60px height = 60px></img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">HOME
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">PROFILE</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="feed.php">FEED</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SUBSCRIPTION</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DROPDOWN</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Optional Thing</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">SEARCH</button>
          </form>
        </div>
      </nav>
          <div id = "AddPost" style = "position:relative; left:10%; top:10%;">
          <br><br>
             <form action="upload.php" id="addpostform" method="post" enctype="multipart/form-data">
                Select an image to upload: 
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                Caption: 
                <input type="text" name="caption" id="captioninput" style = "width: 50%; height: 20%;"><br><br>
				<button type="submit" value="Upload Image" name="submit" id="AddPost" class="btn btn-info btn-lg">
             	<span class="glyphicon glyphicon-plus-sign">+ Add Post</span>
             </button> 
            </form>
            <br><br>
          </div>
          <div id = "posts">
          <?php 
$mysqli = new mysqli('localhost','3700262@localhost','','my_webdevkieransoutter'); 
$query = "SELECT * FROM posts ORDER BY timestamp DESC;";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> </td> 
          <td> </td> 
          <td> </td> 
          <td> </td> 
          <td> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["timestamp"];
        $field2name = $row["image"];
        $field3name = $row["Caption"];

        echo '<div style = "position:relative; left:10%; top:10%;"> 
        <br>
                  <p><b>'.$field1name.'</b></p>  
                  <p>'.$field2name.'</p> 
                  <p>'.$field3name.'</p><br>  
              </div>';
    }
    $result->free();
} 
?>
          </div>
    </body>
    <footer id="PageFooter">
    </footer>
</html>