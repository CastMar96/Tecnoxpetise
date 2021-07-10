<h1 class="page-header">
    <?php echo $pdt->productId != null ? $pdt->productName : 'New Product'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Product">Product</a></li>
  <li class="active"><?php echo $pdt->productId != null ? $pdt->productName : 'New Product'; ?></li>
</ol>
<form id="frm-product" action="?c=Product&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="productId" value="<?php echo $pdt->productId; ?>" />
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="productName" value="<?php echo $pdt->productName; ?>" class="form-control" placeholder="Product Name" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="<?php echo $pdt->description; ?>" class="form-control" placeholder="Insert a product description" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>price</label>
        <input type="number" name="price" value="<?php echo $pdt->price; ?>" class="form-control" placeholder="Price for product" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>category</label>
        <input type="text" name="category" value="<?php echo $pdt->category; ?>" class="form-control" placeholder="Product Category" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>stock</label>
        <input type="number" name="stock" value="<?php echo $pdt->stock; ?>" class="form-control" placeholder="stock" data-validacion-tipo="requerido" />
    </div>
    <div class="form-group">
                <strong>Product Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success" name="upload">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-product").submit(function(){
            return $(this).validate();
        });
    })
</script>