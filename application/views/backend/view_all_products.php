<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Products</title>
		<!-- Load JQuery dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	</head>
	<body>
		<?php $this->load->view('backend/admin_menu')?>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>Product Image</th>
							<th>Price</th>
							<th>Stock</th>
							<th>
								<?=anchor(	'admin/products/create',
											'Add Product', 
											['class'=>'btn btn-primary btn-sm'])
								?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($products as $product) : ?>
						<tr>
							<td><?=$product->id?></td>
							<td><?=$product->name?></td>
							<td><?php
								$product_image = [	'src'	=> 'uploads/' . $product->image,
													'height'	=> '50'
													];
								echo img($product_image)
							?></td>
							<td><?=$product->price?></td>
							<td><?=$product->stock?></td>
							<td>
								<?=anchor(	'admin/products/update/' . $product->id, 
											'Edit',
											['class'=>'btn btn-default btn-sm'])
								?> 
								<?=anchor(	'admin/products/delete/' . $product->id, 
											'Delete',
											['class'=>'btn btn-danger btn-sm',
											 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
											])
								?> 
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>