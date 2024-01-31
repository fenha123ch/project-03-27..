@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Products</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('p.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>image</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($product as $pro)
                                  <tr>
                                  <td>1</td>
                                  <td>{{$product->firstItem()+ $loop ->index}}</td>x
                                  <td>{{$pro->name}}</td>
                                  <td>{{$pro->category->name}}</td>
                                  <td>
                                    <img src="{{ asset('backend/product/resize/'.$pro->image)}}">
                                  </td>

                                 <td>{{$pro->price}}</td>
                                 <td>{{$pro->description}}</td>
                                 <td>{{$pro->created_at}}</td>
                                 <td>{{$pro->updated_at}}</td>

                                  <td>
                                    <a href="{{ route('p.edit',$pro->product_it) }}"><i class='bx bxs-edit'></i></a>
                                    <a href="{{url('admin/product/delete/',$pro->product_id)}}"><i class='bx bx-trash'></i></a>
                                  </td>

                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
@endsection
