<h1 class="page-header">Tablets</h1>
<div class="container-lg">
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Product&a=Crud">New Product</a>
</div>
<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th style="width:400px;">Category</th>
            <th style="width:120px;">Stock</th>
            <th style="width:120px;">Image</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->ListTablets() as $r): ?>
        <tr>
            <td><?php echo $r->productName; ?></td>
            <td><?php echo $r->description; ?></td>
            <td><?php echo $r->price; ?></td>
            <td><?php echo $r->category; ?></td>
            <td><?php echo $r->stock; ?></td>
            <td><img width="90" height="85" src="image\products\ <?php echo $r->image;?>"></td>
            <td>
                <a href="?c=Product&a=Crud&productId=<?php echo $r->productId;?>">Edit</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Do you want to delete this product?');" href="?c=Product&a=Delete&productId=<?php echo $r->productId; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
</div>
<div class="row">

</div>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>