<?php
use App\Packages;
$trekkings = Packages::where('activity', 'Trekking')->get();
$raftings = Packages::where('activity', 'rafting')->get();
foreach($trekkings as $trekking)
{
    $tlocation= $trekking->location;
    $tcost= $trekking->cost;
    $tcompany= $trekking->company;
    $ttime= $trekking->time;
    $tid=$trekking->id;
}foreach($raftings as $rafting)
{
    $rlocation= $rafting->location;
    $rcost= $rafting->cost;
    $rcompany= $rafting->company;
    $rtime= $rafting->time;
    $rid=$rafting->id;
}

?>


<div class="container">
    <h1>Activities</h1>
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#rafting">Rafting</a></li>
        <li><a data-toggle="tab" href="#trekking">Trekking</a></li>
    </ul>
    <div class="tab-content">
        <div id="rafting" class="tab-pane fade in active">
            <h2>Rafting</h2>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Cost</th>
                    <th>Company</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $rlocation?></td>
                    <td><?php echo $rcost?></td>
                    <td><?php echo $rcompany?></td>
                    <td><?php echo $rtime?></td>
                    <td><a href="booking?id=<?php echo $rid?>">Book</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="trekking" class="tab-pane fade">
            <h2>Trekking</h2>

            <p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Cost</th>
                    <th>Company</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $tlocation?></td>
                    <td><?php echo $tcost?></td>
                    <td><?php echo $tcompany?></td>
                    <td><?php echo $ttime?></td>
                    <td><a href="booking?id=<?php echo $tid?>">Book</a></td>
                </tr>
                </tbody>
            </table>


        </div>

    </div>
</div>