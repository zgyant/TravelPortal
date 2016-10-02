<?php
use App\Booking;
use App\Packages;
$user=Session::get('email');
$bookings = Booking::where('email',$user)->get();

?>

<h1>List Bookings</h1>
<table id ="list-bookings" class="table table-bordered">
        <thead>
        <tr>
                <th>Booking ID</th>
                <th>Place Name</th>
                <th>Activity</th>
        </tr>
        </thead>
        <tbody>
                <?php

                foreach($bookings as $booking)
                {
                        $packageid= $booking->packageid;
                        $bookingid=$booking->id;
                        $packages=Packages::where('id',$packageid)->get();
                        foreach($packages as $package)
                        {
                                $activity=$package->activity;
                                $location=$package->location;
                echo '<tr><td>'. $bookingid.'</td>
                <td>'. $location.'</td>
                <td>'. $activity.'</td></tr>';

                        }
                } ?>

        </tbody>
</table>