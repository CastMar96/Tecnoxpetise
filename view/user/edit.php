<h1 class="page-header">
    <?php echo $tea->id != null ? $tea->name : 'New Register'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=user">User</a></li>
  <li class="active"><?php echo $tea->id != null ? $tea->name : 'New Register'; ?></li>
</ol>

<form id="frm-user" action="?c=user&a=Save" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $tea->id; ?>" />
    
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $tea->name; ?>" class="form-control" placeholder="Enter your name" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>User</label>
        <input type="text" name="user" value="<?php echo $tea->user; ?>" class="form-control" placeholder="Enter your user" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>password</label>
        <input type="text" name="password" value="<?php echo $tea->password; ?>" class="form-control" placeholder="Enter your password" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>type</label>
        <input  type="text" name="type" value="<?php echo $tea->type; ?>" class="form-control" placeholder="Enter your type" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>addres</label>
        <input  type="text" name="address" value="<?php echo $tea->address; ?>" class="form-control" placeholder="Enter your address" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>phone</label>
        <input  type="text" name="phone" value="<?php echo $tea->phone; ?>" class="form-control " placeholder="Enter your phone" data-validacion-tipo="requerido|telefono" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Save</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-user").submit(function(){
            return $(this).validate();
        });
    })
</script>