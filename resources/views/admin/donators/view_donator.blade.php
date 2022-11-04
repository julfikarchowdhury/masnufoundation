@extends('admin.layout.layout')

@section('content')


<div class="content-wrapper">
	<div class="row">
		<div class="col-md-12 grid-margin">
			<div class="row">
				<div class="col-12 col-xl-8 mb-4 mb-xl-0">
					<h3 class="font-weight-bold">donator</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				
				<form class="forms-sample" >

					<div class="form-group">
						<label> Amount</label>
						<input class="form-control" value="" readonly>

					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
@endsection


@foreach($donator as $donator)
@endforeach