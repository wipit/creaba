<div id="barra">
	@if (count($errors) > 0)
	    <div class="alert alert-danger" role="alert">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	@if (Session::has('mensaje'))
	    <div class="alert alert-success" role="alert">
	        <ul>
	            <li>{{ session('mensaje') }}</li>
	        </ul>
	    </div>
	@endif
</div>