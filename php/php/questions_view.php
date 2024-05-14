<!DOCTYPE html>
<html lang="en">
<head>
        <title>View Students</title>
        
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/font-awesome.min.js"></script>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        #student{
            text-align:center;
            margin:auto;
            width:50%;
            border: 1px solid black;
            padding: 8px;
        

        }
  #nav_bar {
    background-color: #333;
    overflow: hidden;
    height: 50px;
    width: 100%;
  }
  #stayle{
    background-color: rgb(255, 51, 204);
    width: 100%;
    height: 50px;
    color: white;
    font-size: 20px;
    font-weight: bold;
  }
  



    </style>
</head>
<body>
<nav class="navbar navbar-inverse"> 
 
 <ul class="nav navbar-nav">
   <li><a href="../html/index.html">Home</a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">Register<span class="caret"></span></a>
        <ul class="dropdown-menu">
         <li><a href="../../view/register.html">data insert</a></li>
         <li><a href="#">data update</a></li>
         <li><a href="#">data delete</a></li>
         <li><a href="../php/student_data.php">data view</a></li>
       </ul>
     </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">student documents  <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="../html/documant/inset.html">data insert</a></li>
        <li><a href="#">data update</a></li>
        <li><a href="#">data delete</a></li>
        <li ><a href="../php/docmant_view.php">data view</a></li>
      </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">student video <span class="caret"></span></a>
     <ul class="dropdown-menu">
      <li><a href="../html/video/inset.html">data insert</a></li>
      <li><a href="#">data update</a></li>
      <li><a href="#">data delete</a></li>
      <li class="active"><a href="../php/video_view.php">data view</a></li>
    </ul>
  </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">student questions  <span class="caret"></span></a>
   <ul class="dropdown-menu">
    <li><a href="../html/Questions/inset.html">data insert</a></li>
    <li><a href="#">data update</a></li>
    <li><a href="#">data delete</a></li>
    <li><a href="../php/questions_view.php">data view</a></li>
  </ul>
  </ul>
</div>
</nav>

    <h2 id="student"><i>View Students</i></h2><br>
    <table>
        <tr id="stayle">
            <th>ID</th>
            <th>Fist Name</th>
            <th>Last Name</th>
            <th>Email</th>

        </tr>

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
            $sql = "SELECT * FROM student_questions";
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
            } else {
                echo "0 results";
            }
            
            // Close MySQL connection
            $conn->close();
            ?>
        </div>
    </table>
    </li>

</body>
</html>
