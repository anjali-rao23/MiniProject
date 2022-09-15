<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg p-3 mb-5 ">
  <a class="navbar-brand" href="index.php">NGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="index.php" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">
        <?php 
          $stmt3 = $pdo->query("SELECT `name` FROM `admin` WHERE `admin_id` =".$_SESSION['admin_id']);
          $rows2 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
          echo $rows2[0]['name'];
        ?>
        <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="update/adminUpdate.php">Edit Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container bg-light ">

    <div class="row">
        <div class="col-6">
            <img src="images/donors.png" style ="width : 40%"alt="">
       </div>
       <div class="col-6">
            <img src="images/volunteer.png" style ="width : 40%"alt="">
       </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a class="display-1 " href="admin.php">Donors</a>
            
       </div>
       <div class="col-6">
           <a class="display-1 " href="adminVolunteer.php">Volunteers</a>
       </div>
    </div>
    
</div>    


<div class="total_registered">
  <div class="row">
    <div class="col-6">
        
        <?php
          $query111=$pdo->query("SELECT * FROM `donor` ");
          $query111_run = $query111->rowCount();
          
          echo "<h2 class='shadow-lg p-3 mb-5 bg-light rounded mx-auto' style='width: 550px;'>Total Donors Registered: $query111_run </h2>" ;
        ?>

        
        <?php
          
          $query112=$pdo->query("SELECT * FROM `volunteer` ");
          $query112_run = $query112->rowCount();
          echo "<h2 class='shadow-lg p-3 mb-5 bg-light rounded mx-auto' style='width: 550px;'>Total Volunteers Registered: $query112_run </h2>" ;
        ?>




    </div>

  </div>


</div>
