@extends('shared.layout')

@section('page_title', "Contact")

@section('content')
			<form class="form-horizontal m-20" action="" onclick="validate()">
				<div class="form-group">
					<label class="control-label col-sm-1" for="email">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" placeholder="Email Anda"/>
						<span id="get_error_email" style="color:#d9534f;"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-1" for="pwd">Messages</label>
					<div class="col-sm-10"> 
						<textarea class="form-control" rows="10" id="msg" placeholder="Messages Anda"></textarea>
						<span id="get_error_msg" style="color:#d9534f;"></span>
					</div>
				</div>
				<div class="col-sm-10 col-sm-offset-1" style="padding:5px"> 
					<input type="button" id="btn" class="btn btn-default" value="Submit" />
				</div>
			</form>
		
	<script>
		function validate() {
			document.getElementById("get_error_email").innerHTML = "";
			var x = document.getElementById("email").value;
			var valid1 = document.getElementById("get_error_email");
			var valid2 = document.getElementById("get_error_msg");
			if (x == "") {
				valid1.innerHTML = "*Email tidak boleh kosong";
			} else if (x != "") {
				valid1.innerHTML = "";
				var check = x.indexOf("@");
				if(check<1) {
					valid1.innerHTML = "*Gunakan tanda @ untuk alamat e-mail. Email anda tidak valid";
				} else {
					var y = document.getElementById("msg").value;
					if (y == "") {
						valid2.innerHTML = "*Messages anda kosong";
					} else if (y != "") {
						valid2.innerHTML = "";
						alert("Terima Kasih atas pesan anda");
					}
				}	
			}
		}
	</script>
	@endsection
