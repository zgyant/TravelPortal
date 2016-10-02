<?php
use App\Packages;

$packages = Packages::all();

?>
<h1>List Packages</h1>
<table id ="list-bookings" class="table table-bordered">
    <thead>
    <tr>
        <th>Package ID</th>
        <th>Location</th>
        <th>Company Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($packages as $package) {?>
    <tr>
        <td><?php echo $package->id; ?></td>
        <td><?php echo $package->location; ?></td>
        <td><?php echo $package->company; ?></td>
        <td><a href="?page=edit-package&id=<?php echo $package->id ?>">Edit</a></td>
    </tr>
    <?php }?>
    </tbody>
</table>