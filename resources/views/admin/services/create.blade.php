@extends('admin.layouts.app')
@section('title',' Doctor Profile Create')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create Doctor</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Doctor</h4>
                    </div>
                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Doctor Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="doctor name" name="doctor_name" value="{{ old('doctor_name'); }}" required>
                                        @error('doctor_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Select Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Doctor Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Contact Number</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="contact number" name="contact_number" value="{{ old('contact_number'); }}" required>
                                        @error('contact_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Doctor Degree</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="doctor degree" name="degree" value="{{ old('degree'); }}" required>
                                        @error('degree')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 my-2">
                                    <label for="field-1" class="control-label">Doctor Image <span class="text-light"> &nbsp;(Preferable width : 120px Height: 120px)</span></label><br>
                                    <button type="button" class="btn btn-secondary btn-file">
                                        <input type="file" class="btn-secondary" name="image" />
                                    </button><br>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Education (University or Institute) Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="education" name="education" value="{{ old('education'); }}" required>
                                        @error('education')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Current Working Hospital Name</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="working hospital" name="working hospital" value="{{ old('working_hospital'); }}" required>
                                        @error('working_hospital')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('service.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Published Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

