<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Products</title>
	</head>
	<body>
		<h1>Products Table</h1>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Product Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($products as $product) : ?>
				<tr>
					<td><?=$product->id?></td>
					<td><?=$product->name?></td>
					<td><?=$product->description?></td>
					<td><?=$product->price?></td>
					<td><?=$product->stock?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>