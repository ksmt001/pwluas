<?php include "koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Company</title>
  </head>
  <body>
  	<div class="container mt-5">
  		<h1>Data Company</h1>
      <div class="row">
        <div class="col-6">
        <a href="city.php" class="btn btn-info" target="_self">1. CRUD City</a> &nbsp
        <a href="company.php" class="btn btn-info" target="_self">2. CRUD Company</a> &nbsp 
        <a href="tambahcompany.php" class="btn btn-success">Add Company</a> &nbsp   
        </div>
        <div class="col-6">
          <form class="float-right" method="POST" action="" enctype="multipart/form-data">
          <label><strong>File CSV</strong></label>
          <input type="file" name="upload">
          <input class="btn btn-info" type="submit" name="submit" value="Import CSV">
        </form>  
        </div>
      </div>

       <table class="table table-striped">
            <thead>
              <tr>
                
                <th scope="col">ID Company</th>
                <th scope="col">Company Name</th>
                

                <th scope="col"></th>
              
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                $query = "select idcompany,name from company";
                $exQuery = $mysqli->query($query);
                   while($user_data = mysqli_fetch_array($exQuery)) {         
                      echo "<tr>";
                      
                      echo "<td>$user_data[idcompany]</td>";
                      echo "<td>$user_data[name]</td>";
                     
                      echo "<td><a href='editcompany.php?idcompany=$user_data[idcompany]' class='btn btn-warning'>Edit Data</a></td>"; 
                     
                      echo "<td><a href='deletecompany.php?idcompany=$user_data[idcompany]' class='btn btn-danger'>Delete</a></td>";    
                      echo "</tr>";
                            
                  }
               ?>
            </tbody>
          </table>
        </div>
      </div>    
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

        
        
        