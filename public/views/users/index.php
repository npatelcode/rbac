<table style="border:1px solid black">
 <thead>
     <tr>
         <th>#</th>
         <th>Title</th>
         <th>Description</th>
         <th>Active</th>
         <th>Created At</th>
    </tr>
</thead>
    <?php foreach($roles as $role): ?>
        <tr>
            <td><?=$role->id?></td>
            <td><?=$role->title?></td>
            <td><?=$role->description?></td>
            <td><?=$role->active?></td>
            <td><?=$role->createdAt?></td>
        </tr>
     <?php endforeach; ?>   
</table>
