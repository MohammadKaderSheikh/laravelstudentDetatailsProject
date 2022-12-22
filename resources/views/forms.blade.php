<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('navbar.navbar')
    
    <div class="container mt-5">
       <div class="row mt-5 m-5">
       <div class="col-md-3">
            <a href="/" class="text-center btn btn-info">Student list </a>
        </div>
        <div class="col-md-9">
        <form action="insert" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="enter your name" >
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Roll</label>
                    <input type="text" name="roll" class="form-control" placeholder="enter your roll" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Mobile</label>
                    <input type="text" name="mobile" placeholder="enter your mobile" class="form-control">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
       </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>