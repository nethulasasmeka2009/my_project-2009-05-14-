<!DOCTYPE html>
<html>
    <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  height: 20px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

#styles{
  background-color: lightblue;
}
</style>
</head>
<body>
  
      <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item" >
            <a class="nav-link" href="../html/index.html">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/register/register.html">register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/documant/documant.html">documant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/Questions/Questions.html">Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../html/Questions/Questions.html">video</a>
          </li>
        </ul>
      </nav><br>

      <div id="styles">
    <div class="container">           
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
      
    </div>
  </div>
        
  <?php
            $host = 'localhost';  
            $user = 'root';  
            $pass = '';  
            $dbname = 'my_project';  
              
            $conn = mysqli_connect($host, $user, $pass,$dbname);  
            if(!$conn){  
              die('Could not connect: '.mysqli_connect_error());  
            } 
            

            // Retrieve data from the database
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            

           
           
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["fist_name"]."</td>";
                    echo "<td>".$row["last_name"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "</tr>";
                }
              
              }else {
                echo "0 results";
            }

            // Close MySQL connection
            $conn->close();
            ?>
        </div>
    </table>
    </li>
    </div>

</body>
</html>
