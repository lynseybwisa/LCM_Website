<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=msongari', 'root', '');
 
if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from events'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array( 'Title', 'Start of event', 'End of event');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array( $row['Title'], $row['Start_event'], $row['end_event']);
        fputcsv($f, $lineData, $delimiter);
    }
     //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 }
}
?>