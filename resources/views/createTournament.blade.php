@extends('layouts.main')
<!--
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
-->
@section('title')
	Create Tournament
@endsection
	<div style="margin-top: 10%;">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
	<form action="insertTournament" method="post" enctype="multipart/form-data">
						<label class="align-self-center" style="cursor: crosshair;"><input onChange="upload()" type="file" name="image" hidden><img src="image/ic_tournament.png" width="120px" height="110px"></label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5"></div>
				</div>
<!--	<form action="insert" method="post" enctype="multipart/form-data">-->
				<input class="form-control" name="tournamentName" placeholder="Your Tournament Name :" autofocus><br>
				<input class="form-control" name="address" placeholder="Adress :"><br>
				<input class="form-control" type="text" maxlength="2" name="team_number" placeholder="Number of Team For Competition :" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"><br>
				<input class="form-control" type="text" maxlength="2" name="team_member" placeholder="Number of Member Can Join Team :" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"><br>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Select One Type of Sport : </p>
				<input type="radio" name="ball" value="1">Football<br>
				<input type="radio" name="ball" value="2">Volleyball<br>
				<input type="radio" name="ball" value="3">Basketball<br>
				<input style="margin-top: 10px;" type="submit" value="Done" class="btn btn-info float-right " onClick="conf()">
				<input type="date">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
	<input type="text" hidden name="materialPic" value="ic_tournament.png">
	</form>
			</div>
			
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
			
		</div>
	</div>

<script type="text/javascript">
function conf()
{
//var con=confirm("Your Tournament has created");
	alert('                    Your Tournament Has Created !');
}
</script>
<script type="text/javascript">
function upload ()
	{
		var input = document.querySelector('input[type=file]').files[0];
		var img   = document.querySelector('img');
		var reader= new FileReader();
			reader.onloadend = function ()
		{
			img.src = reader.result;
		}
			if(input)
			{
				reader.readAsDataURL(input);
			}else
			{
				input="";
			}
	}
</script>
<!--
<div class="input-group" data-provide="datepicker">
   <div style="background-color: white" class="input-group-addon">
    	<img src="image/ic_tournament.png" width="30px" height="30px">
  </div>
  <input type="text" class="form-control">
  <div class="input-group-addon">
    <img src="image/ic_tournament.png" width="30px" height="30px">
  </div>
</div>








