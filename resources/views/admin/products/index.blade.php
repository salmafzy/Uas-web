@extends('layouts.app')
@section('content')

<section class="page" >
			
					<table class="table table-striped table-sm">
						<thead class="thead-dark">
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Price</th>
								<th>Created at</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>

						<tbody class="tbody-light">
	
							@foreach($products as $product)
							<tr>
								<td>{{ $product['id'] }}</td>
								<td><center>
									<div class="card-header bg-transparent">
                        				<a href="{{route('admin.products.show', $product->id)}}" class="nav-link text-dark">
                   						 <img src="{{ asset('/images/'. $product->images()->first()->image_src) }}" class=""  >
                     					 </a>
                    				</div>
								{{ $product['name'] }}
									</center>
							    </td>
								<td>Rp. {{ number_format($product->price,2) }}</td>
								<td>{{ $product['created_at'] }}</td>
								<td width="10%">
									<a class="btn btn-warning" href="{{ route('admin.products.edit',$product->id) }}"><i class="fas fa-sync"></i> Edit</a>
								</td>	
								<td width="5%">
									<a class="btn btn-success" href="{{ route('admin.products.show',$product->id) }}"><i class="far fa-eye"></i> Detail</a>
								</td>
								<td>
									<form action="{{ route('admin.products.destroy', $product->id)}}" method="post">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
									
									</form>
									<!-- <a class="btn btn-primary" href="{{ route('admin.products.destroy',$product->id) }}">Delete</a> -->
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$products->links()}}

					</section>
				</div>

					
@endsection