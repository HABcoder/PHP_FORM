<?php include 'connection.php'?>

<?php 
if(isset($_POST['ins'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $rating = $_POST['rating'];
    $service_imporvement = $_POST['improvements'];
    $comments = $_POST['comments'];


    $imporve = implode(',',$service_imporvement);

    $query = "insert into resturant(Name,Email,Rating,impovements,comments) values ('$Name','$Email',' $rating','$imporve','$comments')";
    
    $queryexe = mysqli_query($con,$query);

    if($queryexe){
        echo 'Data Inserted';
    }
    else{
        echo 'Data Not Inserted';
    }
}
?>