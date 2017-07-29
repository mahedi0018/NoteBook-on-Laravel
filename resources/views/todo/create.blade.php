@extends('layout.app')

@section('body')
	<br>
	<a href="\todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>{{substr(Route::currentRouteName(),5)}} item</h1>
	
			<form class="form-horizontal"
			action="@if($view_type=='edit') /todo/@yield('editId') @elseif($view_type=='create') /todo @endif" method="post">
			 {{csrf_field()}}
			 @section('editMethod')
			   @show
			  <fieldset>
				<div class="form-group">
			      <div class="col-lg-10">
			        <input type="text" class="form-control" placeholder="Title" value="@yield('editTitle')" name="title">
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10">
			        <textarea class="form-control" name="body" placeholder="Body" rows="5" id="textArea">@yield('editBody')</textarea><br>
			        <button type="submit" class="btn btn-success">Submit</button>
			      </div>
			    </div>
			    
			 </fieldset>
			</form>
			@include('todo.partials.error')
	</div>
@endsection