<h1 class="page-header">Products</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Product&a=Crud">New Product</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th style="width:400px;">Image</th>
            <th style="width:120px;">category</th>
            <th style="width:120px;">stock</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->productName; ?></td>
            <td><?php echo $r->description; ?></td>
            <td><?php echo $r->price; ?></td>
            <td><?php echo $r->category; ?></td>
            <td><?php echo $r->stock; ?></td>
            <td><img class="img.fiting" src="/Tecnoxpetise/image/<?php echo $r->image;?>"></td>
            <td>
                <a href="?c=Product&a=Crud&id=<?php echo $r->productId;?>">Edit</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Do you want to delete this product?');" href="?c=Product&a=Eliminar&id=<?php echo $r->productId; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
