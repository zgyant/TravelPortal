<?php
use App\Booking;
use App\Packages;
$bookings = Booking::all();

?>


<h1>List Bookings</h1>
<table id ="list-bookings" class="table table-bordered">
        <thead>
        <tr>
                <th>Booking ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Place</th>
                <th>Activity</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach($bookings as $booking)
        {
            $users=\App\Users::where('email',$booking->email)->get();
            $packages=Packages::where('id',$booking->packageid)->get();
            foreach($users as $user)
                {
                  $uname=  $user->fname;
                    foreach($packages as $package)
                        {
              echo '<tr><td>'.$booking->id.'</td><td>'.$uname.'</td><td>'.$booking->email.'</td><td>'.$package->location.'</td><td>'.$package->activity.'</td></tr>';
                }
                }
        } ?>
        </tbody>
</table>