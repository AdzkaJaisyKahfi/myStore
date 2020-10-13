@extends('layouts.app')

@section('content')
<a  href="{{url('tambah')}}" class="btn btn-success float-right mb-2">
<i class="fas fa-plus"></i> Create
</a>
@if(session('error'))
<div class="alert alert-danger col-3" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{session('error')}}</strong>
</div>
@endif

@if(session('info'))
<div class="alert alert-success col-3" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{session('info')}}</strong>
</div>
@endif

<table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Nama Slug</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $merk)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$merk->product_title}}</td>
        <td>{{$merk->product_slug}}</td>
        <td>{{$merk->product_image}}</td>
        <td>{{$merk->product_price}}</td>
        <td class="text-center">
            <form action="{{ route('product.destroy', $merk->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('product.show', $merk->id) }}" class="btn btn-info">
                <i class="fas fa-info-circle"></i> Detail
                </a>
                <a href="{{ route('product.edit', $merk->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
                </a>
                <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i> Delete
                </button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$data->links()}}
@endsection