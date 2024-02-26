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
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    ></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 border shadow-sm mt-5 py-5 bg-white">
          <h3 class="text-center mb-4">CRUD with Ajax, jQuery and PHp</h3>
            <input type="text" class="id">
            <input
              type="text"
              class="form-control mb-2 name"
              placeholder="Enter Name"
              name="name"
            />
            <input
              type="text"
              class="form-control mb-2 email"
              placeholder="Enter Email"
              name="email"
            />
            <button onclick="create()" class="cu_btn btn btn-primary">Create</button>
         
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
          <tbody class="table_here">
          <tr>
            <td>1</td>
            <td>John</td>
            <td>jh@gmail.com</td>
            <td>2342002</td>
            <td>2342002</td>
            <td><button onclick="edit()"class=" btn btn-primary">Edit</button></td>
            <td><button onclick="destroy()" class=" btn btn-danger">Delete</button></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script type="text/javascript"> 
    $(document).ready(function() {
      read()
    })
    function read(){
      $.ajax({
        url:'curd.php',
        method:'POST',
        data: {'select': true},
        success: function(result){
          $('.table_here').html(result);
        }
      })
    }
    function create(){
      var name = $('.name').val();
      var email = $('.email').val();
      $.ajax({
        url:'curd.php',
        method:'POST',
        data:{name,email},
        success:function(){
          $('.name,.email').val("");
          read();
        }
      })
    }
    function destroy(id){
      $.ajax({
        url:'curd.php',
        method:'POST',
        data:{id},
        success:function(){
          read();
        }
      })
    }
    function edit(eid){
      $.ajax({
        url:'curd.php',
        method:'POST',
        data:{eid},
        dataType: 'json',
        success:function(outpost){
          // document.write(outpost);
          $('.id').val(outpost.id);
          $('.name').val(outpost.name);
          $('.email').val(outpost.email);
          $('.cu_btn').text('Update').attr('onclick','update()');
        }
      })
    }
    function update(uid){
      var uid = $('.id').val();
      var uname = $('.name').val();
      var uemail = $('.email').val();
      $.ajax({
        url:'curd.php',
        method:'POST',
        data:{uid,uname,uemail},
        success:function(){
          read();
          $('.name,.email').val("");
          $('.cu_btn').text('Create').attr('onclick','create()');
        }
      })
    }

    </script>
  </body>
</html>
