<h1 class="page-header">User</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=User&a=Crud">New User</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">ID</th>
            <th style="width:180px;">Name</th>
            <th style="width:180px;">User</th>
            <th style="width:120px;">Pasword</th>
            <th style="width:180px;">Type</th>
            <th style="width:120px;">Address</th>
            <th style="width:180px;">Phone</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->List() as $r): ?>
        <tr>
            <td><?php echo $r->id;?></td>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->user; ?></td>
            <td><?php echo $r->password; ?></td>
            <td><?php echo $r->type?></td>
            <td><?php echo $r->address?></td>
            <td><?php echo $r->phone?></td>
            <td>
                <a href="?c=User&a=Crud&id=<?php echo $r->id; ?>">Edit</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('Are you sure to delete this record?');" href="?c=User&a=Delete&id=<?php echo $r->id; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>