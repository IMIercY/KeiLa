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
@section('content')
    @include('headers.navigation')
<div style="border: 1px solid white; padding: 01%;">
<!--	<img width="180px" height="170px" src="storage/app/uploads/<?php /*$Tour->profile_image*/ ?>" >-->
<?php foreach($T as $Tour){ ?>
	<div class="row">
		<div style="border: 1px solid lightblue; padding: 1%; background-color: lightblue" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
			<img width="80px" height="70px" src="storage/app/uploads/<?php echo $Tour->profile_image ?>">
		</div>
		<div style="border: 1px solid lightblue; padding: 1%; background-color: lightblue ;display: inline-grid; align-items: center; font-size: 25px; font-weight: bold ;color: white" class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-center">
			<?php echo $Tour->name ?>
		</div>
		<div style="border: 1px solid lightblue; padding: 1%; background-color: lightblue; align-items: center; display: inline-grid" class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-center">
<!--		<?php echo $Tour->type."<br>"; echo $Tour->profile_image ?>-->
			<a href="<?php echo $Tour->id ?>/create_team"><button class="btn-info">CreateTeam</button></a>
		</div>
	</div>
<?php }?> 
<!--	////////////////////////////////////////////////////////////////////////////////////////-->
	<div style="border: none solid white;">
		<div class="row" style="background-color: lightgray;">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="border-right: 1px solid black; display: inline-grid; align-items: center; text-align: center">
				Do Later !
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" style="border-left: 1px solid black;">
				<div class="row" style="padding-bottom: 5%;">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
						<button style="cursor: pointer;" class="btn form-control" onClick="click_btn('BRACKETS', this ,'green', 'black')">BRACKETS</button>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
						<button style="cursor: pointer;" id="selected" class="btn form-control" onClick="click_btn('TEAM_LIST', this ,'red', 'black')">TEAM LIST</button>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
						<button style="cursor: pointer" class="btn form-control" onClick="click_btn('TIME_TABLE', this ,'yellow', 'black')">TIME TABLE</button>
					</div>
				</div>
<!--					/////////////////Tab Team List/////////////////////-->
					<div id="TEAM_LIST" class="tabcontent">
  						<h3>Hell0</h3>
  						<?php
							$item = array();
							$scoreArr = array();
							$itemS = array();
							$scoreSArr = array();
							$itemS2 = array();
							$scoreS2Arr = array();
						foreach ($team as $getTeams)
						{
							$nameT = $getTeams->name;
							$score = $getTeams->score;
							$item[] = $nameT;
							$scoreArr[] = $score;
						}
///////////////////////////Only Teams Have Score///////////////////////////////////////////////
						foreach ($teamS as $getTeamScore)
							{
								$itemS[] = $getTeamScore->name;
								$scoreSArr[] = $getTeamScore->score; 
							}
						foreach ($teamS2 as $getTeamScore2)
							{
								$itemS2[] = $getTeamScore2->name;
								$scoreS2Arr[] = $getTeamScore2->score;
							}
						?>
						
<!--
<table>
	<tr>
		<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none;">
			<?php echo $item[7] ?>
		</td>
	</tr>
</table>
-->
						<?php print_r($scoreS2Arr)?><br>
					</div>
<!--					/////////////////Tab Bracket/////////////////////-->
					<div id="BRACKETS" class="tabcontent">
  						<h2>List of the Tournmanet for Competition</h2>
  						<p style="padding-bottom: 50px">Here is the Bracket for our Tournmant !!!</p>
<!--//////////////////////////////////////Tournament-Drawing///////////////////////////////////////////-->
<table style="margin-left: 20%">
<tr>
<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none;"><?php echo $item[0] ?></td><td style="border-bottom: 1px solid black"></td><td style="border: 1px solid red; border-left: none; border-bottom: none" rowspan='2'>
						<?php if($scoreArr[0] > $scoreArr[1] ){ echo $item[0];}elseif($scoreArr[0] < $scoreArr[1] ){ echo $item[1];}else{ echo ""; } ?></td>
<!--/////////////////////////////Round 2///////////////////////////////////////////						-->
	<td rowspan="2" style="border-bottom: 1px solid green"></td><td style="border: 1px solid red; border-bottom: none; border-left: none;" rowspan='4'>
						<?php if($scoreSArr[0] > $scoreSArr[1] ){ echo $itemS[0];}elseif($scoreSArr[0] < $scoreSArr[1] ){ echo $itemS[1]; }else{ echo "";} ?></td><td style="border-bottom: 1px solid green" rowspan="4"></td><td rowspan="8">
						<?php if($scoreS2Arr[0] > $scoreS2Arr[1] ){ echo $itemS2[0];}elseif($scoreS2Arr[0] < $scoreS2Arr[1] ){ echo $itemS2[1]; }else{ echo ""; } ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-top: none; border-left: none"><?php echo $item[1] ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-top: none; border-left: none; border-bottom: none"><?php echo $item[2] ?></td><td style="border-bottom: 1px solid black"></td><td style="border: 1px solid red; border-top: none; border-left: none" rowspan='2'>
						<?php if($scoreArr[2] > $scoreArr[3] ){ echo $item[2];}else if($scoreArr[2] < $scoreArr[3] ){ echo $item[3];}else{ echo ""; } ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none;border-top: none"><?php echo $item[3] ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none;"><?php echo $item[4] ?></td><td style="border-bottom: 1px solid black"></td><td style="border-right: 1px solid red" rowspan='2'>
						<?php if($scoreArr[4] > $scoreArr[5] ){ echo $item[4];}else if($scoreArr[4] < $scoreArr[5] ){ echo $item[5];}else{ echo ""; } ?></td>
	<td style="border-bottom: 1px solid green" rowspan="2"></td><td style="border: 1px solid red; border-top: none; border-left: none" rowspan='4'>
						<?php if($scoreSArr[2] > $scoreSArr[3] ){ echo $itemS[2];}elseif($scoreSArr[2] < $scoreSArr[3] ){ echo $itemS[3];}else{ echo "";} ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none; border-top: none"><?php echo $item[5] ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-bottom: none; border-left: none;"><?php echo $item[6] ?></td><td style="border-bottom: 1px solid black"></td><td style="border-bottom: 1px solid red; border-right: 1px solid red" rowspan='2'>
						<?php if($scoreArr[6] > $scoreArr[7] ){ echo $item[6];}else if($scoreArr[6] < $scoreArr[7] ){ echo $item[7];}else{ echo ""; } ?></td>
</tr>
<tr>
<td class="form-control" style="border: 2px solid red; border-top: none; border-left: none;"><?php echo $item[7] ?></td>
</tr>
</table>
			<br>
			<br>
			<br>
			<br>
					</div>
<!--					/////////////////Tab Time Table/////////////////////-->
					<div id="TIME_TABLE" class="tabcontent">
  						<h3>Testing Paragraph</h3>
						In writing, students begin by learning letters, then words, and finally sentences. In time, students learn how to write a paragraph by taking those sentences and organizing them around a common topic. Learning how to write a paragraph can be challenging since it requires knowing how to write a great topic sentence, using supporting details and transitional words, as well as finding a strong concluding sentence.  In fiction, writing a paragraph means understanding which ideas go together and where a new paragraph should begin.

At Time4Writing.com, you’ll find plenty of resources to help students learn how to write a paragraph as well as improve their paragraph writing skills, including free writing resources on topic sentences and the different types of paragraphs, such as descriptive, expository, and narrative.  Articles will assist you in guiding your students and the activities allow them to practice their skills using printable worksheets and quizzes, video lessons, and interactive games.  For further instruction on how to write a paragraph, eight-week writing courses are available for all levels.
						In writing, students begin by learning letters, then words, and finally sentences. In time, students learn how to write a paragraph by taking those sentences and organizing them around a common topic. Learning how to write a paragraph can be challenging since it requires knowing how to write a great topic sentence, using supporting details and transitional words, as well as finding a strong concluding sentence.  In fiction, writing a paragraph means understanding which ideas go together and where a new paragraph should begin.

At Time4Writing.com, you’ll find plenty of resources to help students learn how to write a paragraph as well as improve their paragraph writing skills, including free writing resources on topic sentences and the different types of paragraphs, such as descriptive, expository, and narrative.  Articles will assist you in guiding your students and the activities allow them to practice their skills using printable worksheets and quizzes, video lessons, and interactive games.  For further instruction on how to write a paragraph, eight-week writing courses are available for all levels.
						In writing, students begin by learning letters, then words, and finally sentences.
						In writing, students begin by learning letters, then words, and finally sentences.

					</div>



<script>
	function click_btn(tabName,elmnt,Bcolor,color){
		var i, tabcontent, btn ;
		tabcontent = document.getElementsByClassName("tabcontent");
		for(i=0; i<tabcontent.length; i++)
		{
			tabcontent[i].style.display = "none";
		}
		btn = document.getElementsByClassName("btn");
		for (i=0; i<btn.length; i++){
			btn[i].style.backgroundColor = "";
		}
		document.getElementById(tabName).style.display = "block";
		elmnt.style.backgroundColor = Bcolor;
		if (document.getElementsByClassName("btn").onclick = click_btn ){
			elmnt.style.color = color;
		}
		else{
			document.getElementsByClassName("btn").style.color = Bcolor;
		}
	}
	document.getElementById("selected").onclick();
</script>











@endsection
