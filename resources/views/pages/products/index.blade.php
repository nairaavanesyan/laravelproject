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

		<table class="table table-hover table-bordered table-dark">
			<tr>
				<th>Name</th>
				<th>Count</th>
				<th>Price</th>
				<th>Views</th>
                <th>Action</th>
				
			</tr>

			@foreach($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->count }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->views }}</td>
                    <td>
                        <a href="/products/show/{{$product->id}}" class="btn btn-info">Show</a>
						<a href="/products/edit/{{$product->id}}" class="btn btn-warning">Edit</a>

						<form action="/products/delete/{{$product->id}}" method="POST" class="d-inline-block">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
				</tr>
			@endforeach
		</table>

	</div>



</body>
</html>