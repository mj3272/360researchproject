<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now logged into the user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
        <hr>
    </div>
    
<div>


<?php
require('db.php');
if(isset($_POST['submitDeleteBtn'])){
    $key = $_POST['KeyToDelete'];

    //check if the record exists to delete

    $check = $con->query("select * from users where id = '$key'");
    if(mysqli_num_rows($check)>0){
        //record found & now deleting
        $queryDelete = $con->query("DELETE from users where id = '$key'");
    }
    else{
        //warning that record does not exist?>
    <div>
        <p>Record does not exist!</p>
    </div>

    <?php }
}
?>

    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Delete?</th>

</tr>
    <?php
    require('db.php');
    $sql = "select * from users";
    $result = $con->query($sql);
    $sr =1;

    while($row = $result->fetch_assoc()){?>
    <tr>
        <form action="" method="post" role="form">
            <td><?php echo $sr;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>    
                <input type="checkbox" name ="KeyToDelete" value="<?php echo $row['id'];?>" required>
             </td>
             <td>
                <input type="submit" name="submitDeleteBtn">
             </td>
        </form>
    </tr>
        <?php $sr++; }
        ?>
</table>
</div>





    
</body>
</html>