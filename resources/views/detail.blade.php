@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Data:</strong> Tidak Tersimpan <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row align-items-center justify-content-center h-100">
        <div class="col-12">
            <div class="card mt-md-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col text-left">Show Product</div>
                        <div class="col text-right">
                        <a href="{{url('table')}}" class="btn btn-sm btn-danger">
                        <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('product.show', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" class="form-control" value="{{$product->product_id}}" name="product_id" readonly>
                    </div> -->
                    <div class="form-group">
                        <label for="#">Product</label>
                        <input type="text" name="product_title" class="form-control"
                            placeholder="Nama Product" value="{{ $product->product_title }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Slug</label>
                        <input type="text" name="product_slug" class="form-control"
                            placeholder="Nama Merk" value="{{ $product->product_slug }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Image</label>
                        <input type="text" name="product_image" class="form-control"
                            placeholder="Harga Beli" value="{{ $product->product_image }}">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection