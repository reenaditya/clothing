@extends("admin.layouts.app")
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Update User</h1>

					<div class="row">
						
						<div class="col-md-12">
							<div class="card">
								
								<div class="card-body">
									<form action="{{ route('admin.user.update',$user->id) }}" method="post" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<div class="row">
											<div class="mb-4 col-md-6">
												<label class="form-label">Full Name</label>
												<input type="text" name="name" class="form-control" placeholder="enter full name"  value="{{ old('name',$user->name) }}">
												@error('name')
													<span class="text-danger">{{$message}} </span>
												@enderror
											</div>
											<div class="mb-4 col-md-6">
												<label class="form-label">Email</label>
												<input type="email" name="email" class="form-control" placeholder="enter email id"  value="{{ old('email',$user->email) }}">
												@error('email')
													<span class="text-danger">{{$message}} </span>
												@enderror
											</div>
											
											
										</div>
										<div class="row">
											
											
											<div class="mb-4 col-md-6">
												<label class="form-label">Phone Number</label>
												<input type="text" name="phone_number" class="form-control" placeholder="enter phone number"  value="{{ old('phone_number',$user->phone_number) }}">
												@error('phone_number')
													<span class="text-danger">{{$message}} </span>
												@enderror
											</div>
											<div class="mb-4 col-md-6">
												<label class="form-label" >Status</label>
												<select class="form-control" name="status" >
													<option value="1" {{$user->status == 1 ? 'selected':''}} >Active</option>
													<option value="0" {{$user->status == 0 ? 'selected':''}}>Inactive</option>
												</select>
												
												@error('status')
													<span class="text-danger">{{$message}} </span>
												@enderror
											</div>
											
										</div>
										
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

						
					</div>

				</div>
			</main>
@endsection
@push('script')
	<script type="text/javascript">
		@if (Session::has('success'))
			
			Swal.fire({
	  			icon: 'success',
	  			title: '{{ Session::get('success')}} '
			})

		@endif
		@if (Session::has('error'))
			
			Swal.fire({
	  			icon: 'error',
	  			title: '{{ Session::get('error')}} ',
			})	

		@endif
		
	</script>
@endpush