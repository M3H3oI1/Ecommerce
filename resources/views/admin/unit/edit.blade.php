@extends('admin.master')

@section('body')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Unit From</h4>
                <hr>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form class="form-horizontal p-t-20" action="{{ route('Unit.update',['id'=> $Unit->id]) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $unit->name}}" name="name" id="exampleInputuname3" placeholder="Unit Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Unit Code <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ $unit->code}}" name="name" id="exampleInputuname3" placeholder="Unit Code"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Unit Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" id="exampleInputuname3" placeholder="unit Description ">{{ $unit->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-3 control-label">Publicaion Status</label>
                        <div class="col-sm-9">
                            <label class="me-3"> <input type="radio" name="status" {{$unit->status == 1 ? 'checked' : '' }} value="1" checked>Published</label>
                            <label> <input type="radio" name="status" {{$unit->status == 2  ? 'checked' : '' }} value="2">Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Unit info </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
