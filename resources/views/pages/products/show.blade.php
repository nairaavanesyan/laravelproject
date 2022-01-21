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

<div class="container mt-5">
    <p><b>Id:</b>{{$product->id}}</p>
    <p><b>Name:</b>{{$product->name}}</p>
    <p><b>Count:</b>{{$product->count}}</p>
    <p><b>Price:</b> {{ $product->price }}</p>
    <p><b>Views:</b> {{ $product->views }}</p>
    <p><b>Description:</b> {{ $product->description }}</p>
</div>

</body>
</html>
