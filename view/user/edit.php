<h1 class="page-header text-center">
    <?php echo $tea->id != null ? $tea->name : 'New Register'; ?>
</h1>
<ol class="breadcrumb">
  <li><a href="?c=user">User</a></li>
  <li class="active"><?php echo $tea->id != null ? $tea->name : 'New Register'; ?></li>
</ol>

<form id="frm-user" action="?c=user&a=Load" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $tea->id; ?>" />
    
    <div class="form-group">
        <label>User Name</label>
        <input type="text" name="name" value="<?php echo $tea->name; ?>" class="form-control" placeholder="Enter your name" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>User</label>
        <input type="text" name="user" value="<?php echo $tea->user; ?>" class="form-control" placeholder="Enter your user" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" value="<?php echo $tea->password; ?>" class="form-control" placeholder="Enter your password" data-validacion-tipo="requerido" />
        <input type="checkbox" onclick="myFunction()">Show Password
    </div>

    <div class="form-group">
        <label>User Type</label>
        <input  type="text" name="type" value="<?php echo $tea->type; ?>" class="form-control" placeholder="Enter your type" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Address</label>
        <input  type="text" name="address" value="<?php echo $tea->address; ?>" class="form-control" placeholder="Enter your address" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Phone Number</label>
        <input  type="text" name="phone" value="<?php echo $tea->phone; ?>" class="form-control " placeholder="Enter your phone" data-validacion-tipo="requerido|telefono" />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success btn-lg ">Load</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-user").submit(function(){
            return $(this).validate();
        });
    })
</script>
<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<br><br><br><br><br><br><b></br>