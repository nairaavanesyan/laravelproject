<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container my-5">
<h1>Edit</h1>

<form class="form" action="edit" method="post" >

@csrf 
    <div class="form-group">
        <label>Name</label>
        <input type="text"  name="name" class="form-control" value="{{$product->name}}">
    </div>

     <div class="form-group">
        <label>Price</label>
        <input type="text"  name="price" class="form-control" value="{{$product->price}}">
    </div>

     <div class="form-group">
        <label>Count</label>
        <input type="text"  name="count" class="form-control" value="{{$product->count}}">
    </div>

     <div class="form-group">
        <labelDescription></label>
        <textarea name="description" class="form-control" rows="5">{{$product->description}}</textarea>
    </div>

    <div>
        <input type="submit" class="btn btn-primary" value="Save">
    </div>

    
</form>


</div>
</body>
</html>