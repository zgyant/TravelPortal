<?php
use App\Stories;
use App\Users;
$stories = Stories::all();
foreach($stories as $story)
{
        $desc=$story->desc;
        $uimg=$story->uimage;
        $cimg=$story->cimage;
        $user=$story->user;
$users=Users::where('email',$user)->get();
foreach($users as $user)
{
	$user=$user->fname;
?>

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">

            <div class="panel-heading">

                <img class="banner" src="img/<?php echo $cimg;?>"/>
            </div>

            <div class="panel-heading">
                <div class="user-img">
                    <!-- normal --></br>

                    <div class="ih-item circle effect1">

                        <a href="#">
                            <div class="img">
                                <img src="img/<?php echo $uimg;?>" alt="img">
                            </div>
                            <div class="info">
                                <h3>Posted By</h3>

                                <p><?php echo $user;?></p>
                            </div>
                        </a>
                    </div>
                    <!-- end normal -->
                    <!-- <img src="img/user-photo1.jpg" class="img-circle" /> -->
                </div>

                <div class="panel-body">
                    <?php echo $desc;?>

                </div>
            </div>
        </div>


    </div>
</div>

<?php
}
}
?>
