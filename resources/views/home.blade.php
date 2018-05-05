@extends('layouts.main')
@section('title')
    KEILA
@endsection
@section('user_fullname')
    {{$user->full_name}}
@endsection
@section('user_profile')
    @if($user->profile_image !="")
    {
        {{$user->profile_image}}
    }
    @else
        {{URL('/image/ic_default_profile.png')}}
    @endif
@endsection
<div style="padding-top: 0%;">
@section('content')
    @include('headers.navigation')
    Welcome
        {{$user->full_name}}
    !
<img width="80px" height="70px" src="storage/app/uploads/bird.png" >
<div class="grid-container">
		<?php	foreach($Tournaments as $Tour){ ?>
		<div class="grid-item">
			<a style="text-decoration: none; color: black;" href="<?php echo $Tour->id ?>"><div style="border: 1px solid white">
						<img width="80px" height="70px" src="storage/app/uploads/<?php echo $Tour->profile_image ?>" >
					<?php
						echo "<div class='text-center' style= 'color: green; font-size: 20px; margin-bottom: 8px; font-weight: bold;'>$Tour->name</div>";
						echo "<div style='color: red'>Requirement !</div>";
						echo "This Tournament needs  ".$Tour->team_number." "."teams for competition."."<br>";
						echo "Team can have only  ".$Tour->team_member." "."members."."<br>";
						echo "Sport Type : ".$Tour->type."<br>";
						echo "Address : ".$Tour->address."<br>";		   
					?>
			</div></a>
		</div>
	<?php } ?>
</div>
</div>
@endsection
<!--
<div style="margin: 5%;" >
	<?php	// foreach($Tournaments as $Tour){ ?>
	<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
			</div>
			<div style="border: 1px solid lightgray; padding: 2%; margin-bottom: 10px" class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
				<a style="text-decoration: none" href="<?php // echo $Tour->name; ?>"><div style="cursor: pointer; color: black;" class="row">
					<div style="border: 1px solid white" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><div class="text-center" style="margin-top: 15%;"><img src="storage/app/uploads/<?php // echo $Tour->profile_image ?>" width="80px" height="70px"></div></div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
						<?php	// echo "<div class='text-center' style= 'color: green; font-size: 20px; margin-bottom: 8px; font-weight: bold;'>$Tour->name</div>";
								// echo "<div style='color: red'>Requirement !</div>";
								// echo "This Tournament needs  ".$Tour->team_number." "."teams for competition."."<br>";
								// echo "Team can have only  ".$Tour->team_member." "."members."."<br>";
								// echo "Sport Type : ".$Tour->sport_id."<br>";
								// echo "Address : ".$Tour->address."<br>";		   
						?>
					</div>
				</div></a>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
			</div>
			
		</div>
	<?php //} ?>
</div>
-->

			
		
	
 

	





