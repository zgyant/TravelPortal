<?php
use App\Packages;

$packages = Packages::where('id', $_GET['id'])->get();
foreach ($packages as $package) {
    $location = $package->location;
    $time = $package->time;
    $cost = $package->cost;
    $company = $package->company;
    $address = $package->address;
    Session::flash('idfedit', $_GET['id']);
}
?>
<h1>Edit Package</h1>
<form role="form" method="post" action="editpackage">
    <div class="form-group">
        <label>Location</label>
        <input class="form-control" name="location" value="<?php echo $location ?>" placeholder="Enter Location">
    </div><div class="form-group">
        <label>Time</label>
        <input class="form-control" name="time" value="<?php echo $time ?>" placeholder="Enter TIme">
    </div><div class="form-group">
        <label>Cost</label>
        <input class="form-control" name="cost" value="<?php echo $cost ?>" placeholder="Enter Cost">
    </div><div class="form-group">
        <label>Company</label>
        <input class="form-control" name="company" value="<?php echo $company ?>" placeholder="Enter Company Name">
    </div><div class="form-group">
        <label>Contact Address</label>
        <input class="form-control" name="contact" value="<?php echo $address ?>" placeholder="Enter Contact Number">
    </div>

    <hr>
    <button type="submit" class="btn btn-default">Edit Package</button>
</form>
