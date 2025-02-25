@extends('app')


@push('title')
    <title>Product Management!</title>
@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Edit Product</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- Asset Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form action="{{ route('products.update',$product->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                        <div class="container mt-5">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h1 class="d-flex justify-content-center mt-4">EDIT PRODUCT</h1>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $product->name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="detail" class="form-label">Detail</label>
                                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                                            <span class="text-danger">
                                                @error('duration')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    {{-- <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="status" class="col-form-label">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            <span class="text-danger">
                                                @error('status')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div> --}}

                                    <button type="submit" class="btn waves-effect waves-light btn-sm submitbtn">
                                        Done
                                    </button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection