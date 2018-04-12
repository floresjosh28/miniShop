
@if(count($errors) > 0)
<div class="msg-alert" id="msgid">
	<div class="col-md-6 col-md-offset-3">
		<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
						{{ $error }}<br>
			@endforeach
		</ul>
		</div>		
	</div>
</div>	
@endif

@if(session('success'))
<div class="msg-alert" id="msgid">
	<div class="col-md-6 col-md-offset-3">
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	</div>
</div>
@endif

@if(session('error'))
<div class="msg-alert" id="msgid">
	<div class="col-md-6 col-md-offset-3">
		<div class="alert alert-danger">
			{{ session('error')}}
		</div>
	</div>
</div>
@endif