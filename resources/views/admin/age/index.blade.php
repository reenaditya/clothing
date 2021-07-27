@extends('admin.layouts.app')
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Age List</h1>

					<div class="row">
						<div class="col-9">
							<div class="card">
								
								<div class="card-body">
								
									<table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Name</th>
												<th>Status</th>
												<th>Created At</th>
												<th>Updated At</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($ages as $key => $_age)
												<tr>
													<td>{{ ++$key }} </td>
													<td>{{$_age->name ?? ''}} </td>
													
													<td><button class="btn btn-{{$_age->status?'success':'danger'}} ">
														{{$_age->status? 'Active':'Inactive'}}
													</button> </td>
													<td>{{$_age->created_at ?? ''}} </td>
													<td>{{$_age->updated_at->diffForHumans() ?? ''}} </td>
													<td>
														<a href="{{ route('admin.age.edit',$_age->id) }}" class="btn btn-primary">Edit</a>
														<a href="javascript:;" onclick="destroy('{{$_age->id}}')" class="btn btn-danger">Delete</a>
														<form method="post" action="{{ route('admin.age.destroy',$_age->id) }}" id="cuisine{{$_age->id}}">
															@csrf
															@method('DELETE')
														</form>
													</td>
												</tr>
											@endforeach
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-3">

							<div class="card">
								
								<div class="card-body">
									<h1 class="h3 mb-3">Add Age</h1>
									<form action="{{ route('admin.age.store') }}" method="post" enctype="multipart/form-data">
										@csrf
										
										<div class="row">
											<div class="mb-4 col-md-12">
												<label class="form-label">Name</label>
												<input type="text" name="name" class="form-control" placeholder="enter  name"  value="{{ old('name') }}">
												@error('name')
													<span class="text-danger">{{$message}} </span>
												@enderror
											</div>
											
											
										</div>
										<div class="row">
											
											<div class="mb-4 col-md-12">
												<label class="form-label" >Status</label>
												<select class="form-control" name="status" >
													<option value="1">Active</option>
													<option value="0">Inactive</option>
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
	<script>
		
		// DataTables with Column Search by Select Inputs
		document.addEventListener("DOMContentLoaded", function() {
			$('#datatables-column-search-select-inputs').DataTable({
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});
						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});
		});

		function destroy(id){

			Swal.fire({
			  	title: 'Are you sure?',
			  	text: "You won't be able to revert this!",
			  	icon: 'warning',
			  	showCancelButton: true,
			  	confirmButtonColor: '#3085d6',
			  	cancelButtonColor: '#d33',
			  	confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.isConfirmed) {

			  	document.getElementById(`cuisine${id}`).submit();
			  }
			})
		}
	</script>
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