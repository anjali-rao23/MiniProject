<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    .btn {
    display: block;
    /* float:right; */
    margin: auto;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<body>
  <br>
    <h1 class="text-warning text-center">USER DETAILS</h1>
 
<table  class=" table table-striped table-hover table-bordered>
  <thead class="thead-dark">
    <tr class="bg-dark text-white text-center">
      <th scope="col">VOLUNTEER NAME</th>
      <th scope="col">TASK</th>
      
      <!-- <th scope="col">EMAIL</th> -->
      <!-- <th scope="col">LOGOUT</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
require_once "./pdo.php";
$stmt3 = $pdo->query("SELECT * FROM `v_details`");
             $rows = $stmt3->fetchAll(PDO::FETCH_ASSOC);
             $count = 1;
              foreach($rows as $row){
                echo "<tr class=''>";
                // echo "<th scope='row' class=''>".$count."</th>";
                echo "<td class=''>".htmlentities($row['name'])."</td>";
                echo "<td class=''>".htmlentities($row['task'])."</td>";
                // echo("<td class='' > <a class='btn btn-primary btn-sm' href='admin/delete2.php?volunteer_id=".$row['volunteer_id']."'>Remove Volunteer</a></td>");
                echo "</tr>";
              $count++;
              }
?>
  
  </tbody>
</table>
<br>

<button class="btn-dark grey btn " class="text-white" name="start" ><a href="adminVolunteer.php">BACK</a></button>
</body>
</html>

