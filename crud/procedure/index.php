<?php
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 border shadow-sm mt-5 py-5 bg-white">
          <h3 class="text-center mb-4">CRUD with Procedure</h3>
          <?php 
          if(isset($_GET['id'])){
           $id = $_GET['id'];
           $sql = "SELECT * FROM user WHERE id = '$id'";
           $result = mysqli_query($conn,$sql);
           $row = mysqli_fetch_array($result);
           ?>
          <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <input value="<?php echo $row['name']?>"
              type="text"
              class="form-control mb-2"
              placeholder="Enter Name"
              name="name" 
            />
            <input value="<?php echo $row['email']?>"
              type="text"
              class="form-control mb-2"
              placeholder="Enter Email"
              name="email"
            />
            <button class="btn btn-primary">Update</button>
          </form>
          <?php } else{  ?>
        
          <form method="POST" action="create.php">
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Enter Name"
              name="name"
            />
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Enter Email"
              name="email"
            />
            <button class="btn btn-primary">Create</button>
          </form>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped mt-3 col-md-12">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created Date</th>
            <th>Modified Date</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php
          $sql = "SELECT * FROM user";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['created_date'];?></td>
                <td><?php echo $row['modified_date'];?></td>
                <td><a href="index.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php
          }
          ?>
        </table>
      </div>
    </div>
  </body>
</html>
