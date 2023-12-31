@extends('admin.master')

@section('body')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Product From</h4>
                <hr>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form class="form-horizontal p-t-20" action="{{ route('sub-category.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" id="categoryId" >
                            <option value="" disable selected> -- Select Category --</option>
                            @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"> Sub Category Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="Sub_category_id" id="subCategoryId">
                            <option value="" disable selected> -- Select Sub Category --</option>
                            @foreach ($Sub_categories as $Sub_category )
                        <option value="{{$Sub_category->id}}">{{$Sub_category->name}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"> Brand Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="brand_id" >
                            <option value="" disable selected> -- Select Brand --</option>
                            @foreach ($brands as $brand )
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label"> Unit Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="unit_id" >
                            <option value="" disable selected> -- Select Unit --</option>
                            @foreach ($units as $unit )
                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                        @endforeach
                    </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Product Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="" placeholder="Product Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Product Code <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="code" id="" placeholder="Code"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Product Model </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="model" id="" placeholder="Model Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Product Stoke Amount <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="stoke_amount" id="" placeholder="Product Stoke Amount"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 control-label">Product price <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="number" class="form-control" name="regular_price" id="" placeholder="Model Name"/>
                                <input type="number" class="form-control" name="selling_price" id="" placeholder="Model Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Short Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="short_description" class="form-control" id="exampleInputuname3" placeholder="Short Description "></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Long Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="long_description" class="form-control summernote" id="exampleInputuname3" placeholder="long Description "></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-3 control-label" for="web">Feature Image<span class="text-danger">*</span> </label>
                        <div class="col-sm-9">

                            <input type="file" name="image" id="input-file-now" class="dropify" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-3 control-label" for="web">Other Image<span class="text-danger">*</span> </label>
                        <div class="col-sm-9">

                            <input type="file" name="other_image[]" multiple id="input-file-now" class="dropify" accept="image/*"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-3 control-label">Publicaion Status</label>
                        <div class="col-sm-9">
                            <label class="me-3"> <input type="radio" name="status" value="1" checked>Published</label>
                            <label> <input type="radio" name="status" value="2">Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
