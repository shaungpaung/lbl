<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 border shadow-sm mt-5 py-5 bg-white">
                <h3 class="text-center mb-4">CRUD with Procedure</h3>
                <form action="">
                    <input type="text" class="form-control mb-2" placeholder="Enter Name" />
                    <input type="text" class="form-control mb-2" placeholder="Enter Email" />
                    <button class="btn btn-primary">Create</button>
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
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>jh@gmail.com</td>
                    <td>2342002</td>
                    <td>2342002</td>
                    <td><a href="" class="btn btn-primary">Edit</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>