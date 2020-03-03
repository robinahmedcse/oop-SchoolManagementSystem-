$connect = mysqli_connect("localhost", "root", "", "schoolms");

$query = "SELECT * FROM teacher";
 $result = mysqli_query($connect, $query);


 $rows=array();
    while($rows =mysqli_fetch_array(result)){

        $row[]=$row;
    }
    echo json_encode($rows);


  
