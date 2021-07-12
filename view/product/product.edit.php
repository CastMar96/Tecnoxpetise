<h1 class="page-header">
    <?php echo $pdt->productId != null ? $pdt->productName : 'New Product'; ?>
</h1>			
<ol class="breadcrumb">
  <li><a href="?c=Product">Product</a></li>
  <li class="active"><?php echo $pdt->productId != null ? $pdt->productName : 'New Product'; ?></li>
</ol>
<form id="frm-product" action="?c=Product&a=Load" method="post" enctype="multipart/form-data">
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
        <label>Price</label>
        <input type="text" name="price" value="<?php echo $pdt->price; ?>" class="form-control" placeholder="Price for product" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Category</label>
        <select id="category" name="category" >|
        <option value="<?php echo $pdt->category;?>" hidden><?php echo $pdt->category;?></option>
         <option value="Computers">Computers</option>
         <option value="Phones">Phones</option>
         <option value="Smartwatch">Smartwatch</option>
         <option value="Cameras">Cameras</option>
         <option value="Tablets">Tablets</option>
         <option value="TV">TV</option>
        </select>
        
    
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="number" name="stock" value="<?php echo $pdt->stock; ?>" class="form-control" placeholder="stock" data-validacion-tipo="requerido" />
    </div>

    <hr />
            <div class="form-group">
                <label>Product Image</label>
                <input type="hidden" name="image" value="<?php echo $pdt->image;?>" />
                <input type="file" name="image" placeholder="Ingrese una imagen" accept="image/*" />    
                <br>
            <?php if($pdt->image != ''): ?>
                <div class="img-thumbnail text-center">
                    <!--OJO NO ELIMINAR EL ESPACIO QUE EXISTE ENTRE PRODUCTS\ <  ? PHP SI NO NO SE MUESTRAN LAS IMAGENES-->
                    <img width="70" height="85" src="image\products\ <?php echo $pdt->image; ?>"  />
                </div>
            <?php endif; ?>            
    <br>
    <div class="text-right">
        <button class="btn btn-success" value="upload" name="upload">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-product").submit(function(){
            return $(this).validate();
        });
    })
    
</script>
<br><br><br><b><b><br><b></b></b></b><br><br><br><b><b><br><b></b></b></b>
