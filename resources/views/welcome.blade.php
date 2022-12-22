<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students details App </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('navbar.navbar');



<div class="container">
<div class="row">
    <div class="col-md-3 text-center">
        <a href="/add" class="btn btn-primary" >Add Student </a>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>mobile</th>
                <th>Action</th>
            </thead>
            <tbody>

            @foreach($data as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->roll}}</td>
                    <td>{{$data->mobile}}</td>
                    <td>
                        <a href={{"/view/{$data->id}"}} class="btn btn-info m-1">View</a>
                        <a href="/edit" class="btn btn-success m-1">Edit</a>
                        <a href={{"/delete/{$data->id}"}} class="btn btn-danger m-1">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
