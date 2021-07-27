@extends('admin.layouts.app')
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">User List</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
									<a href="{{ route('admin.user.create') }}" class="btn btn-success"> <i class="fa fa-plus"></i> Add User</a>
									<table id="datatables-column-search-text-inputs" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Full Name</th>
												<th>Email</th>
												<th>Phone Number</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($user as $key => $_user)
												<tr>
													<td>{{ ++$key }} </td>
													<td>{{$_user->name ?? ''}} </td>
													<td>{{$_user->email ?? ''}} </td>
													<td>{{$_user->phone_number ?? ''}} </td>
													<td><button class="btn btn-{{$_user->status?'success':'danger'}} ">
														{{$_user->status? 'Active':'Inactive'}}
													</button> </td>
													<td>
														<a href="{{ route('admin.user.edit',$_user->id) }}" class="btn btn-primary">Edit</a>
														<a href="javascript:;" onclick="destroy('{{$_user->id}}')" class="btn btn-danger">Delete</a>
														<form method="post" action="{{ route('admin.user.destroy',$_user->id) }}" id="cuisine{{$_user->id}}">
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
@endpush