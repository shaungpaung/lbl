<?php
include('crud.php');
?><!DOCTYPE html>
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
          <h3 class="text-center mb-4">CRUD with OOP</h3>
          <?php 
          if(isset($_GET['eid'])){ 
            $condition = ['id' => $_GET['eid']];
            $query = $obj->edit("user", $condition);
            $row = mysqli_fetch_assoc($query);
            ?>
            <form method="POST" action="crud.php">
            <input
              type="hidden"
              class="form-control mb-2"
              placeholder="Enter Name"
              name="uid"
              value="<?php echo $row['id']; ?>"
            />
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Enter Name"
              name="uname"
              value="<?php echo $row['name']; ?>"
            />
            <input
              type="text"
              class="form-control mb-2"
              placeholder="Enter Email"
              name="uemail"
              value="<?php echo $row['email']; ?>"
            />
            <button class="btn btn-primary">Update</button>
          <?php } else {
          ?>
          <form method="POST" action="crud.php">
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
            <?php } ?>
          </form>
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
          $query = $obj->read("user");
          while ($row = mysqli_fetch_assoc($query)){
          ?>
          <tr>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row ['name'];?></td>
            <td><?php echo $row ['email'];?></td>
            <td><?php echo $row ['created_date'];?></td>
            <td><?php echo $row ['modified_date'];?></td>
            <td><a href="index.php?eid=<?php echo $row ['id'];?>" class="btn btn-primary">Edit</a></td>
            <td><a href="crud.php?id=<?php echo $row ['id'];?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </body>
</html>
