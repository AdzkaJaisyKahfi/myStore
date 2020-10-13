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
                        <div class="col text-left">Add Product</div>
                        <div class="col text-right">
                        <a href="{{url('table')}}" class="btn btn-sm btn-danger">
                        <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ Route('product.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="#">Product</label>
                        <input type="text" name="product_title" class="form-control"
                            placeholder="Nama Product" value="">
                    </div>
                    <div class="form-group">
                        <label for="#">Slug</label>
                        <input type="text" name="product_slug" class="form-control"
                            placeholder="Nama Merk" value="">
                    </div>
                    <div class="form-group">
                        <label for="#">Price</label>
                        <input type="text" name="product_price" class="form-control"
                            placeholder="Harga" value="">
                    </div>
                    <div class="form-group">
                        <label for="#">Image</label>
                        <input type="text" name="product_image" class="form-control"
                            placeholder="Gambar" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Save
                    </button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection