<html>
<head>
<title>student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/js/font-awesome.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
 
 <ul class="nav navbar-nav">
   <li><a href="#">Home</a></li>
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
        <li class="active"><a href="../html/documant/inset.html">data insert</a></li>
        <li><a href="#">data update</a></li>
        <li><a href="#">data delete</a></li>
        <li><a href="#">data view</a></li>
      </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">student video <span class="caret"></span></a>
     <ul class="dropdown-menu">
      <li><a href="../html/documant/inset.html">data insert</a></li>
      <li><a href="#">data update</a></li>
      <li><a href="#">data delete</a></li>
      <li><a href="#">data view</a></li>
    </ul>
  </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#">student questions  <span class="caret"></span></a>
   <ul class="dropdown-menu">
    <li><a href="../html/Questions/inset.html">data insert</a></li>
    <li><a href="#">data update</a></li>
    <li><a href="#">data delete</a></li>
    <li><a href="#">data view</a></li>
  </ul>
</li>
 </ul>
</div>
</nav>
        <?php  
        $host = 'localhost';  
        $user = 'root';  
        $pass = '';  
        $dbname = 'my_project';  
          
        $conn = mysqli_connect($host, $user, $pass,$dbname);  
        if(!$conn){  
          die('Could not connect: '.mysqli_connect_error());  
        }  
 

        $lesson_number=$_POST['lesson_number'];
        $lesson_name=$_POST['lesson_name'];
        $link=$_POST['link'] ;
          
        $sql = "INSERT INTO student_video(lesson_number,lesson_name,link) 
        VALUES ('$lesson_number', '$lesson_name','$link' )";  
        if(mysqli_query($conn, $sql)){  
        echo "Record inserted successfully";  
        }else{  
        echo "Could not insert record: ". mysqli_error($conn);  
        }  
          
        mysqli_close($conn);  
        ?>

</body>
</html>  