<?php include 'connection.php' ?>
<?php include 'header.php' ?>

<table class="container table table-bordered mt-5">
    <tr>
        <th>Custid</th>
        <th>Name</th>
        <th>Email address</th>
        <th>Rating</th>
        <th>Improvements</th>
        <th>Comments</th>
        <th colspan = "2"> Buttons </th>
    </tr>

<?php
     
     $fetchdata = "SELECT * FROM resturant";
     $queryexe = mysqli_query($con, $fetchdata);

     $countdata = mysqli_num_rows($queryexe);
     if ($countdata > 0) {


        while ($recevdata = mysqli_fetch_assoc($queryexe)) {
          echo "<tr>";
          ?>
            <td><?php echo $recevdata['custid'] ?></td>
            <td><?php echo $recevdata['Name'] ?></td>
            <td><?php echo $recevdata['Email'] ?></td>
            <td><?php echo $recevdata['Rating'] ?></td>
            <td><?php echo $recevdata['impovements'] ?></td>
            <td><?php echo $recevdata['comments'] ?></td>
            <td><a href="edit.php?id=<?php $recevdata['custid']?>" class="btn btn-primary">Edit</a></td>
            <td><a href="view.php?Delid=<?php echo $recevdata['custid'] ?>" class="btn btn-danger">Remove</a></td>
<?php 
           echo "</tr>";
}  
    } 
    else{
        echo "<h1>No records found</h1>";
    }

    if(isset($_GET['Delid'])) {
    $idget = mysqli_real_escape_string($con, $_GET['Delid']);
    $delete = "DELETE FROM resturant WHERE custid = '$idget'";
    $query = mysqli_query($con, $delete);
    if($query) {
        echo "<script>alert('Record Deleted'); window.location.href='view.php';</script>";
        exit();
    }
}
?> 

</table>

